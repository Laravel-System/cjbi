<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;
use App\Setting;
use App\Language;
use App\Widget;
class SettingController extends Controller
{
    public function index_setting()
    {
        $lang = Language::where('status','=',1)->get();
        $setting = Setting::all();
        return view('admin.setting.index_setting',compact('setting','set_id','lang'));
    }
    public function get_create_setting()
    {
    	$setting = Setting::all();
        $setting = Setting::all();
        if (count($setting) == 1) {
            $set_id = Setting::first();
        }
        else{
            $setting = Setting::all();
        }
    	return view('admin.setting.create_setting',compact('setting','set_id'));
    }
    public function post_create_setting(Request $request)
    {
    	$this->validate($request,[
    		'website_name' => 'required'
    	]);

    	if($request->hasFile('logo_image'))
    	{
            $logo_image = $request->file('logo_image');
            $destinationPath = "images/";
            $fileNameLogo = $logo_image->getClientOriginalName();
            $fileupload = $logo_image->move($destinationPath,$fileNameLogo);
        }
        else
        {
             $fileNameLogo ="";
        }

        if($request->hasFile('favicon_image'))
        {
            $favicon_image = $request->file('favicon_image');
            $destinationPath = "images/";
            $fileFavicon = $favicon_image->getClientOriginalName();
            $fileupload = $favicon_image->move($destinationPath,$fileFavicon);
        }
        else
        {
             $fileFavicon ="";
        }
    	$setting = [
            'website_name' => $request->website_name,
    		'website_url' => $request->website_url,
            'phone' => $request->phone,
            'email' => $request->email,
            'work_time' => $request->work_time,
            'language' => $request->language,
    		'logo_image' => $fileNameLogo,
    		'favicon_image' => $fileFavicon,
    		'logo_text' => $request->logo_text,
    		'copyright' => $request->copyright,
            'address_site' => $request->address_site,
            'address' => $request->address,
            'link_fb' => $request->link_fb,
            'user_id' => Auth::user()->id,
    		'created_at' => date('Y-m-d'),
    	       ];

    	Setting::insert($setting);

    	return redirect()->to('create_setting')->with('success','Created Successful');
    }
    public function get_edit_setting($id)
    {
        $setting = Setting::all();
        $set_id = Setting::find($id);
        return view('admin.setting.create_setting',compact('setting','set_id'));
    }
    public function post_edit_setting(Request $request,$id)
    {
        $this->validate($request,[
            'website_name' => 'required'
        ]);
        $setting = Setting::find($id);
        if($request->hasFile('logo_image'))
        {
            $logo_image = $request->file('logo_image');
            $destinationPath = "images/";
            $fileNameLogo = $logo_image->getClientOriginalName();
            $fileupload = $logo_image->move($destinationPath,$fileNameLogo);
        }
        else
        {
             $fileNameLogo =$request->image_hidden;
        }

        if($request->hasFile('favicon_image'))
        {
            $favicon_image = $request->file('favicon_image');
            $destinationPath = "images/";
            $fileFavicon = $favicon_image->getClientOriginalName();
            $fileupload = $favicon_image->move($destinationPath,$fileFavicon);
        }
        else
        {
             $fileFavicon =$request->fav_image_hidden;
        }
        $setting = [
            'website_name' => $request->website_name,
            'website_url' => $request->website_url,
            'phone' => $request->phone,
            'email' => $request->email,
            'work_time' => $request->work_time,
            'language' => $request->language,
            'logo_image' => $fileNameLogo,
            'favicon_image' => $fileFavicon,
            'logo_text' => $request->logo_text,
            'copyright' => $request->copyright,
            'address_site' => $request->address_site,
            'address' => $request->address,
            'link_fb' => $request->link_fb,
            'user_id' => Auth::user()->id,
            'created_at' => date('Y-m-d'),
               ];

        Setting::where('id','=',$id)->update($setting);

        return redirect()->to('setting')->with('success','Updated Successful');
    }


    public function widget_jndex(){
      $widget = Widget::get();
      $lang = Language::where('status','=',1)->get();
       return view('admin.widget.widget_index',compact('widget','lang'));
    }
    public function widget_json(){
        $lang = Language::where('status','=',1)->get();
        return response()->json($lang);
    }

    public function post_widget_index(Request $request){

            $this->validate($request ,[
              'title' => 'required',
              'page_side' => 'required',
              'position' => 'required'
            ]);


            $widget = Widget::get();
            if(count($widget) > 0){
               DB::table('widget')->delete();
            }
        foreach ($request->page_side as $key => $value) {
            $data_re = [
                          'id' => $key+1,
                          'title' => $request->title[$key],
                          'page_side' => $request->page_side[$key],
                          'position' => $request->position[$key],
                          'language' => $request->language[$key]
                      ];
              Widget::insert($data_re);
        }
        return redirect()->to('widgets')->with('success','Create Successful');
    }
}
