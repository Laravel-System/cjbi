<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Menu_type;
use App\Menu;
use App\Category;
use App\Page_Cat;
use Auth;
use DB;
use App\Post;

class PageController extends Controller
{
    public function index_page()
    {
        $menu = Menu::all();
    	$post = Post::where('post_type','=','page')->get();
        $category = Category::where('parent_id','=',0)->get();
    	return view('admin.page.index_page',compact('post','menu','category'));
    }
    public function get_create_page()
    {
        $post = Post::all();
        $menu = Menu::all();
        $category = Category::where('parent_id','=',0)->get();
    	return view('admin.page.create_page',compact('menu','post','category'));
    }
    public function post_create_page(Request $request)
    {

    	$this->validate($request,[
    		'title' => 'required'
    	]);

    	if($request->hasFile('image')){
            $images = $request->file('image');
            $destinationPath = "images/";
            $fileName = $images->getClientOriginalName();
            $fileupload = $images->move($destinationPath,$fileName);
        }else{
             $fileName ="";
        }

        $post = [
            'title' => $request->title,
            'link' => $request->link,
            'language' => $request->language,
            'description' => $request->description,
            'status' => $request->status,
            'publish_date' => $request->publish_date,
            'post_type' => 'page',
            'template' => $request->template,
            'image' => $fileName,
            'user_id' => Auth::user()->id,
            'unpublish_date' => $request->unpublish_date,
            'created_at' => date('Y-m-d'),
                ];

       $post_id = Post::insertGetId($post);

        if ($post_id != 0) {

            $menu_post = [
                'menu_id' => $request->menu_id,
                'post_id' => $post_id,
            ];
            DB::table('menu_posts')->insert($menu_post);
            if ($request->has('categorie_id')) {
                foreach ($request->categorie_id as $key => $cat) {
                    $post_category = [
                    'post_id' => $post_id,
                    'categorie_id' => $request->categorie_id[$key],
                    'position' => $request->position[$key]
                    ];

                    DB::table('post_categories')->insert($post_category);
                }
            }

        }

    	return redirect()->to('create_page')->with('success','Successful Create');
    }
    public function get_edit_page($id)
    {
        $page = Post::find($id);
        $pages = Post::all();
        $menu = Menu::all();
        $category = Category::get();
        return view('admin.page.edit_page',compact('page_cat','menu','pages','category','page'));
    }

    public function post_edit_page(Request $request,$id)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        $post = Post::find($id);

        if($request->hasFile('image')){
            $images = $request->file('image');
            $destinationPath = "images/";
            $fileName = $images->getClientOriginalName();
            $fileupload = $images->move($destinationPath,$fileName);
        }else{
             $fileName =$post->image;
        }

        $post = [
            'title' => $request->title,
            'link' => $request->link,
            'language' => $request->language,
            'description' => $request->description,
            'status' => $request->status,
            'publish_date' => $request->publish_date,
            'post_type' => 'page',
            'template' => $request->template,
            'image' => $fileName,
            'user_id' => Auth::user()->id,
            'unpublish_date' => $request->unpublish_date,
            'created_at' => date('Y-m-d'),
                ];

        $post_id = Post::where('id','=',$id)->update($post);
         DB::table('menu_posts')->where('post_id','=',$id)->delete();
            $menu_post = [
                'menu_id' => $request->menu_id,
                'post_id' => $id,
            ];
            DB::table('menu_posts')->insert($menu_post);
            if ($request->categorie_id) {
                DB::table('post_categories')->where('post_id','=',$id)->delete();
                foreach ($request->categorie_id as $key => $cat) {
                    $post_category = [
                    'post_id' => $id,
                    'categorie_id' => $request->categorie_id[$key],
                    'position' => $request->position[$key]
                    ];

                    DB::table('post_categories')->insert($post_category);
                }

        }
        return redirect()->to('pages')->with('success','Successful Edit');
    }
    public function get_delete_page($id)
    {
        DB::table('menu_posts')->where('menu_id','=',$id)->delete();
        DB::table('post_categories')->where('categorie_id','=',$id)->delete();
        $post = Post::find($id);
        $post->delete();
        return redirect()->to('pages')->with('success','Deleted Successful');
    }
}
