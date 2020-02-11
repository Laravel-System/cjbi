<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use Mail;
use DB;
use App\Gallery;
use App\Menu;
use App\Post;
use App\Category;
use App\Menu_type;
use App\Cat_Gallery;
use App\Social;
use App\Gallery_Image;
use App\Slide_Type;
use App\Silde;
use App\Ads;
use App\Setting;
use Session;
use Input;
class FrontendController extends Controller
{
    // Add new language
    public function home_index_local(Request $request ,$locale)
    {
        if($request->segment(1) == 'en') {
            $title = 'home';
            $local = "1";
            $block = "index";
            $link = '';
        }elseif($request->segment(1) == 'kh') {
            $title = 'home';
            $local = "2";
            $block = "index";
            $link = '';
        }elseif($request->segment(1) == 'cn') {
            $title = 'home';
            $local = "3";
            $block = "index";
            $link = '';
        }else {
            $title = $locale;
            $local = 1;
            $block = "index";
            $link = $locale;
        }
        $linkd = Menu::where('link','=',$title)->where('language','=',$local)->first();

        if(count($linkd) > 0){
          $page = Post::where('id','=',$linkd->pages->first()->id)->where('post_type','=','page')->first();
        }else{
          $page = [];
        }
        
        $posts = Post::where('post_type','=','post')->where('language','=',$local)->get();
        return view('template.'.$block ,compact('local','locale','title','link','posts','page'));

    }
    public function home_index_link(Request $request , $name )
    { 
        $title = $name;
       
        $linkd = Menu::where('link','=',$name)->first();
        
        if(count($linkd) > 0){
          $page = Post::where('id','=',$linkd->pages->first()->id)->where('post_type','=','page')->first();
        }else{
          $page = [];
        }

       $link = $name;
        $posts = Post::where('post_type','=','post')->where('language','=',1)->get();
       
        return view('template.index',compact('title','link','page','name','posts'));

    }
    public function home_index_link_local(Request $request ,$locale, $name )
    { 
       if($request->segment(1) == 'en') {
            $local = "1";
        }elseif($request->segment(1) == 'kh') {
            $local = "2";
        }elseif($request->segment(1) == 'cn') {
            $local = "3";
        }else {
            $local = "1";
        }
        $title = $name;
       
        $linkd = Menu::where('link','=',$name)->where('language','=',$local)->first();
        $linkd1 = Menu::where('link','=',$name)->where('language','=',1)->first();
        // dd();
        if(count($linkd) > 0){

          $page1 = Post::where('id','=',$linkd->pages->first()->id)->where('post_type','=','page')->first(); 
           //if($page1->description){

             $page = $page1;
             
           // }else{
           //    $page =  Post::where('id','=',$linkd1->pages->first()->id)->where('post_type','=','page')->first(); 
           // }
        }else{
          $page =  Post::where('id','=',$linkd1->pages->first()->id)->where('post_type','=','page')->first(); 
             
        }
        $link = $name;

        $posts = Post::where('post_type','=','post')->get();
       
        return view('template.index',compact('title','page','link','local','name','posts'));
    }
    public function get_single($link){
      $title = $link;
        $data = Post::where('link','=',$link)->first();
        return view('frontend.post_detail',compact('data','title'));
    }
    public function get_post_detail(Request $request,$link ,$id){
        if($request->segment(1) == 'kh') {
            $local = 2;
        }elseif($request->segment(1) == 'en') {
            $local = 1;
        }elseif($request->segment(1) == 'cn') {
            $local = 3;
        }else {
            $local = 1;
        }
        $data1 = Post::find($id);
        if(count($data1) > 0){
           $data = $data1;
           $link = $link."/".$id."/detail";
        }else{
        //   $link = $link."/".$id."/detail";
        //   $data1 = Post::find($id);
        //   $data = $data1;
            return Redirect()->back();
        }
        return view('template.post_detail',compact('data' ,'link','local'));
   }
   public function get_post_detail_local(Request $request,$local,$link,$id){
        if($request->segment(1) == 'kh') {
            $local = 2;
            $locale = "kh";
        }elseif($request->segment(1) == 'en') {
            $local = 1;
            $locale = "en";
        }elseif($request->segment(1) == 'cn') {
            $local = 3;
        }else {
            $local = 1;
            $locale="en";
        }
        $data1 = Post::where('language','=',$local)->where('link','=',$link)->first();
        if(count($data1) > 0){
          $link = $link."/".$id."/detail";
          $data = $data1;
        }else{
        //   $link = $link."/".$id."/detail";
        //   $data1 = Post::where('language','=',1)->where('link','=',$link)->first();
        //   $data = $data1;
            return Redirect()->back();
        }
        return view('template.post_detail',compact('data' ,'link','local','locale'));
    }
   public function sendEmail(Request $request)
    {
        $setting = Setting::where('language',1)->first();
        $set = $setting->email;
        $data = array(
              'fname'=>Input::get('fname'),
              'lname'=>Input::get('lname'),
              'subject'=>Input::get('subject'),
              'email' => Input::get('email'),
              'message' => Input::get('message')
            );
            Mail::send('email.email', ['data' => $data], function ($m) use ($data) {
                    $m->from($data['email'], 'Your Application');
      
                $m->to('seanghorngva@gmail.com', $data['fname'])->subject('From CFA');
            });
          return Redirect::back()->with('message', 'Thanks for your email!');
    }
}
