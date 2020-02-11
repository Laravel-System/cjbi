<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use Auth;
use DB;

class PostController extends Controller
{
    public function index_post()
    { 
    	$category = Category::where('category_type','=','category')->get();
      // $post  = Post::where('post_type','=','post')      
      // ->get(); 
    	$post = Post::where('post_type','=','post')->orderBy('id','desc')->get();
    	return view('admin.post.index_post',compact('post','category'));
    }
    public function get_create_post()
    {
    	$category = Category::where('category_type','=','category')->get();
    	$post = Post::all();
    	return view('admin.post.create_post',compact('post','category'));
    }
    public function post_create_post(Request $request)
    {

    	$this->validate($request,[
    		'title' => 'required'
      ]);
      
      //show title
      if($request->show_title==1){
        $value=1;
      }else{
          $value=0;
      } 

      if($request->link != Null){
        $link = str_slug($request->link ,'-');
      }else{
        $link = str_slug($request->title,'-');
      }
    	if($request->hasFile('image')){
            $images = $request->file('image');
            $destinationPath = "images/";
            $fileNames = $images->getClientOriginalName();
            $fileName = str_replace(" ","-",$fileNames);
            $fileupload = $images->move($destinationPath,$fileName);
        }else{
             $fileName ="";
        }
        $postcout = Post::get();
        if(count($postcout) > 0){
          $pos_last_id = collect(Post::orderBy('id','asc')->get())->last();
          $id_post = $pos_last_id->id + 1;
        }else{
          $id_post = 1;
        }
        $post = [
            'id' => $id_post,
            'title' => $request->title,
            'action_title'=>$value,
            'link' => $link,
            'link_download' =>$request->link_download,
            'language'=>$request->language,
            'description' => $request->description,
            'status' => $request->status,
            'publish_date' => $request->publish_date,
            'post_type' => 'post',
            'image' => $fileName,
            'user_id' => Auth::user()->id,
            'unpublish_date' => $request->unpublish_date,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ];
        $post_id = Post::insertGetId($post);
        if ($post_id != 0) {
            if ($request->has('categorie_id')) {
                foreach ($request->categorie_id as $key => $cat) {
                    $post_category = [
                      'page_id' => $post_id,
                      'categorie_id' => $request->categorie_id[$key],
                    ];

                    DB::table('page_categories')->insert($post_category);
                }
            }
            if($request->hasFile('image_multi')) {
                foreach ($request->file('image_multi') as $ke => $value) {
                      $images = $request->file('image_multi')[$ke];
                      $destinationPath = "images/";
                      $fileName = $images->getClientOriginalName();
                      $fileupload = $images->move($destinationPath,$fileName);
                      $post_image = [
                          'post_id' => $post_id,
                          'image' => $request->get('images/',$fileName)
                      ]; 
                      DB::table('post_image')->insert($post_image);
                }
            }
          $post_image = [
            'post_id' => $post_id,
            'image' => $request->get('images/',$fileName)
          ];

          DB::table('post_image')->insert($post_image);
    }

    	return redirect()->to('create_post')->with('success','Created Successful');
    }

    public function get_edit_post($id)
    {
      $category =  Category::where('category_type','=','category')->get();
    	$posts = Post::all();
    	$post = Post::where('post_type','=','post')->where('id','=',$id)->first();
    	$post_tr = Post::where('post_type','=','post')->where('language','!=',$post->language)->get();
    	return view('admin.post.edit_post',compact('category','post','posts','post_tr'));
    }

    public function post_edit_post(Request $request,$id)
    {
        $this->validate($request,[
              'title' => 'required'
        ]);
        //show title
        if($request->show_title==1){
          $value=1;
        }else{
          $value=0;
        }
        if($request->link != Null){
          $link = str_slug($request->link ,'-');
        }else{
          $link = str_slug($request->title,'-');
        }
        $post = Post::find($id);
        if($request->hasFile('image')){
            $images = $request->file('image');
            $destinationPath = "images/";
            $fileNames = $images->getClientOriginalName();
            $fileName = str_replace(" ","-",$fileNames);
            $fileupload = $images->move($destinationPath,$fileName);
        }else{
             $fileName =$request->image_hidden;
        }
        if($request->translate){
          $link = $request->translate;
        }
        $post = [
            'title' => $request->title,
            'action_title'=>$value,
            'link' => $link,
            'link_download' =>$request->link_download,
            'language'=>$request->language,
            'description' => $request->description,
            'status' => $request->status,
            'publish_date' => $request->publish_date,
            'post_type' => 'post',
            'image' => $fileName,
            'user_id' => Auth::user()->id,
            'unpublish_date' => $request->unpublish_date,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('y-m-d h:i:s')
          ];

        $post_id = Post::where('id','=',$id)->update($post);

        DB::table('page_categories')->where('page_id','=',$id)->delete();
        if ($request->has('categorie_id')) {
                foreach ($request->categorie_id as $key => $cat) {
                    $post_category = [
                    'page_id' => $id,
                    'categorie_id' => $request->categorie_id[$key],
                    ];

                    DB::table('page_categories')->insert($post_category);
                }
         	}
          if($request->hasFile('image_multi')){
            DB::table('post_image')->where('post_id','=',$id)->delete();
              foreach ($request->file('image_multi') as $ke => $value) {
                      $images = $request->file('image_multi')[$ke];
                      $destinationPath = "images/";
                      $fileName = $images->getClientOriginalName();
                      $fileupload = $images->move($destinationPath,$fileName);
                    $post_image = [
                          'post_id' => $id,
                          'image' => $request->get('images/',$fileName)
                    ];

                    DB::table('post_image')->insert($post_image);
              }
          }else{
              if($request->mult_image_hidden == 0){
                //   dd("else");
                  DB::table('post_image')->where('post_id','=',$id)->delete();
              }
          }
        
    	return redirect()->to('posts')->with('success','Updated Successful');
    }
    public function get_delete_post($id)
    {
    	DB::table('page_categories')->where('page_id','=',$id)->delete();
    	$post = Post::find($id);
        DB::table('post_image')->where('post_id','=',$id)->delete();
    	$post->delete();
    	return redirect()->to('posts')->with('success','Deleted Successful');
    }

    public function upl_image(Request $request){
      if($request->hasfile('filename'))
      {
<<<<<<< HEAD
        $ids=$request->get('ids');
        // dd($ids);
        $post=DB::delete('delete from posts where id in('.implode(',',$ids).')');
        foreach($ids as $value){
          DB::table('post_image')->where('post_id','=',$value)->delete();
          DB::table('page_categories')->where('page_id','=',$value)->delete();
        }
        return back();
      }

=======
         foreach($request->file('filename') as $image)
         {
             $name=$image->getClientOriginalName();
             $image->move(public_path().'/images/', $name);  
             $data[] = $name;  
         }
      } 
      return redirect()->to('create_post')->with('success', 'Your images has been successfully');
    }
>>>>>>> 9b26eb5bc7c62329b897eeedd46611510015610b

    public function show_image(){
      $imagesDirectory = "images/";
        if(is_dir($imagesDirectory))
        {
          $opendirectory = opendir($imagesDirectory);
          
            while (($image = readdir($opendirectory)) !== false)
          {
            if(($image == '.') || ($image == '..'))
            {
              continue;
            }            
            $imgFileType = pathinfo($image,PATHINFO_EXTENSION);
            
            if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
            {
              echo "<img src='images/".$image."' width='200'> ";
            }
          }          
            closedir($opendirectory);        
        }
    }

}
