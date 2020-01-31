<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Gallery;
use App\Cat_Gallery;
use App\Gallery_Image;
use App\Post;
use Auth;

class GalleryController extends Controller
{
    public function index_gallery()
    {
    	$cat_gallery = Cat_Gallery::all();
    	$gallery = Gallery::all();
    	return view('admin.gallery.index_gallery',compact('gallery','cat_gallery'));
    }
    public function get_create_gallery()
    {
    	$cat_gallery = Cat_Gallery::all();
    	$gallery = Gallery::all();
    	$page = Post::where('post_type','=','page')->get();
    	return view('admin.gallery.create_gallery',compact('gallery','page','cat_gallery'));
    }
    public function post_create_gallery(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required'
    	]);

    	$gallery = [
            'name' => $request->name,
            'language' => $request->language,
    		'status' => $request->status,
    		'category_galleries_id' => $request->category_galleries,
            'user_id' => Auth::user()->id,
    		'created_at' => date('Y-m-d'),
    	       ];
        $gallery_id = Gallery::insertGetId($gallery);

        if($gallery_id != 0 )
        {
            $post_galleries =[
                'gallerie_id' => $gallery_id,
                'post_id' => $request->post_id,
                    ];

            DB::table('post_galleries')->insert($post_galleries);
        }

        if($gallery_id != 0){
            if($request->hasFile('images')){
                $image = $request->file('images');
                foreach ($request->images as $key => $value) {
                    $destinationPath ="Galleries/";
                    $fileName = $image[$key]->getClientOriginalName();                  
                    $updload = $image[$key]->move($destinationPath,$fileName);
                     $im_gallery = [
                        'gallerie_id' => $gallery_id,
                        'image' => $fileName,
                     ];

                     DB::table('galleries_image')->insert($im_gallery);
                }
            }else{
                foreach ($request->link2 as $key => $value) {
                    
                     $im_gallery = [
                        'gallerie_id' => $gallery_id,
                        'link' => $request->link2[$key],
                     ];

                     DB::table('galleries_image')->insert($im_gallery);
                }
            }
        }
    	return redirect()->to('create_galleries')->with('success','Create Successful');
    }
    public function get_edit_gallery($id)
    {	
    	$cat_gallery = Cat_Gallery::all();
        $gallery = Gallery::all();
        $page = Post::where('post_type','=','page')->get();
        $gallery_id = Gallery::find($id);
        return view('admin.gallery.edit_gallery',compact('gallery','page','cat_gallery','gallery_id'));
    }
    public function post_edit_gallery(Request $request,$id)
    {
    	$this->validate($request,[
            'name' => 'required',
           
        ]);

        $gallery = [
            'name' => $request->name,
            'language' => $request->language,
            'status' => $request->status,
            'category_galleries_id' => $request->category_galleries,
            'user_id' => Auth::user()->id,
            'created_at' => date('Y-m-d'),
               ];
        $gallery_id = Gallery::where('id','=',$id)->update($gallery);

        // if($gallery_id)
        // {
        //     $post_galleries =[
        //         'gallerie_id' => $gallery_id,
        //         'post_id' => $request->post_id,
        //             ];

        //     DB::table('post_galleries')->insert($post_galleries);
        // }
          

            if($request->hasFile('images')){
                  DB::table('galleries_image')->where('gallerie_id','=',$id)->delete();
                $image = $request->file('images');

                foreach ($request->images as $key => $value) {
                    $image = $request->file('images');
                    $destinationPath ="Galleries/";
                   // echo $request->file('images')[$key] ."<br/>";
                    $fileName = $request->file('images')[$key]->getClientOriginalName();                
                    $updload = $request->file('images')[$key]->move($destinationPath,$fileName);
                   
                     $im_gallery = [
                        'gallerie_id' => $id,
                        'image' => $fileName,
                     ];
                   
                   DB::table('galleries_image')->insert($im_gallery);
                }
              
            }else{
              if($request->mult_image_hidden == 0){
                //   dd("else");
                  DB::table('galleries_image')->where('gallerie_id','=',$id)->delete();
              }
            }

        return redirect()->to('gallery')->with('success','Updated Successful');
    }

    public function deleted_images($id){
        DB::table('galleries_image')->where('id','=',$id)->delete();
        return redirect()->back();
    }
    public function get_delete_gallery($id)
    {
    	$gallery_id = Gallery::find($id);
        DB::table('galleries_image')->where('gallerie_id','=',$id)->delete();
        DB::table('post_galleries')->where('gallerie_id','=',$id)->delete();
    	$gallery_id->delete();
    	return redirect()->to('gallery')->with('success','Deleted Successful');
    }
    
}
