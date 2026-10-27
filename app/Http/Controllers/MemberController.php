<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests;
use DateTime;
use DateTimeZone;
use App\Post;
use Mail;
use Auth;
use DB;
use App\Category;
use App\Member;
use Hash;

class MemberController extends Controller
{
    
    public function index(){
        $title = "Member";
        $data = Post::where('post_type','=','member')->get();
        return view('admin.member.index', compact('title','data'));
    }
    public function getCreate(){
        $title = "Create Member";
        $data = Post::where('post_type','=','member')->get();
        $category = Category::where('category_type','=','cat_member')->get();
        return view('admin.member.create', compact('title','data','category'));
    }
    public function postCreate(Request $request){
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
            'link' => $link,
            'language' => $request->language,
            'position' => $request->position,
            // 'link_download' =>$request->link_download,
            'translation' => $request->translation,
            'job_type' => $request->job_type,
            'location_job' => $request->location_job,
            'description' => $request->description,
            'status' => $request->status,
            'post_type' => 'member',
            'image' => $fileName,
            'user_id' => Auth::user()->id,
            'publish_date' => date('Y-m-d',strtotime($request->publish_date)),
            'unpublish_date' => date('Y-m-d',strtotime($request->unpublish_date)),
            'event_start_date' => date('Y-m-d h:m',strtotime($request->event_start_date)),
            'event_end_date' => date('Y-m-d h:m',strtotime($request->event_end_date)),
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
            if($request->hasFile('image_multi')){
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
    
        }
        return redirect()->to('member/create')->with('success','Created Successful');
    }
    public function getEdit($id){
        $category = Category::where('category_type','=','cat_member')->get();
        $posts = Post::all();
        $post = Post::where('post_type','=','member')->where('id','=',$id)->first();
        return view('admin.member.edit',compact('category','post','posts'));
    }
    public function postEdit(Request $request, $id){
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
      
          $post = [
              'title' => $request->title,
              'link' => $link,
              'language' => $request->language,
              'position' => $request->position,
            //   'link_download' =>$request->link_download,
              'translation' => $request->translation,
              'job_type' => $request->job_type,
              'location_job' => $request->location_job,
              'description' => $request->description,
              'status' => $request->status,
              'post_type' => 'member',
              'image' => $fileName,
              'user_id' => Auth::user()->id,
              'publish_date' => date('Y-m-d',strtotime($request->publish_date)),
              'unpublish_date' => date('Y-m-d',strtotime($request->unpublish_date)),
              'event_start_date' => date('Y-m-d h:m',strtotime($request->event_start_date)),
              'event_end_date' => date('Y-m-d h:m',strtotime($request->event_end_date)),
              'created_at' => date('Y-m-d'),
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
      
        return redirect()->to('member')->with('success','Updated Successful');
    }
    public function deleteMember(Request $request, $id){
        $cat = Post::where('post_type','=','member')->where('id','=',$id)->delete();
        return redirect('member')->with('success', 'Deleted Successful');
    }
    public function index_member_category()
    {
        $category = Category::where('category_type','=','cat_member')->get();
        return view('admin.member.index_category',compact('category'));
    }
    public function get_create_member_category()
    {
        $category = Category::all();
        return view('admin.member.create_category',compact('category'));
    }
    public function post_create_member_category(Request $request)
    {
        $this->validate($request,[
        'name' => 'required|unique:category'
        ]);

        $category = [
            'name' => $request->name,
            'language' => $request->language,
            'description' => $request->description,
            'block' => 'member',
            'status' => $request->status,
            'category_type' => 'cat_member',
            'user_id' => Auth::user()->id,
            'publish_date' => date('Y-m-d',strtotime($request->publish_date)),
            'unpublish_date' => date('Y-m-d',strtotime($request->unpublish_date)),
            'created_at' => date('Y-m-d'),
        ];

        Category::insert($category);

        return redirect()->to('member_category/create')->with('success','Successful Create');
    }
    public function get_edit_member_category($id)
    {
        $cat = Category::find($id);
        $category = Category::all();
        return view('admin.member.edit_category',compact('category','cat'));
    }

    public function post_edit_member_category(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required'
            ]);

        $category = [
            'name' => $request->name,
            'language' => $request->language,
            'description' => $request->description,
            'block' => 'member',
            'category_type' => 'cat_member',
            'status' => $request->status,
            'user_id' => Auth::user()->id,
            'publish_date' => date('Y-m-d',strtotime($request->publish_date)),
            'unpublish_date' => date('Y-m-d',strtotime($request->unpublish_date)),
            'updated_at' => date('Y-m-d'),
            ];

        $cat = Category::where('id','=',$id)->update($category);

        return redirect()->to('member_category')->with('success','Updated Successful');
    }

    public function get_delete_member_category($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect('member_category')->with('success', 'Deleted Successful');
    }
    public function memberLogin(Request $request){
        if($member_id = Member::where('email',$request->email)->first()){
            if(Hash::check($request->password, $member_id->password)){
                $request->session()->put('member_id', $member_id->id);
            }else{
                $request->session()->put('member_id', 0);
            }
        }
        
        return redirect()->to($request->segment(1).'/member-profile');
        // dd($request->session()->all());
    }
    public function memberLogout(Request $request){
        $request->session()->put('member_id', 0);
        return redirect()->back();
    }
    public function memberRegister(Request $request){
        $dataAll = $request->except('_token','password');
        $fileArr = ['photo','cv','moc','patent','company_logo'];
        for($i=0;$i < count($fileArr);$i++){
            if($request->hasFile($fileArr[$i])){
                $images = $request->file($fileArr[$i]);
                $destinationPath = "imagess/";
                $fileNames = $images->getClientOriginalName();
                $fileName = str_replace(" ","-",$fileNames);
                $fileupload = $images->move($destinationPath,$fileName);
                unset($dataAll[$fileArr[$i]]);
                $dataAll = array_add($dataAll,$fileArr[$i],$fileName);
            }  
        }
        $enc = json_encode($dataAll);
        $datetime = new DateTime;
        $asia = new DateTimeZone('Asia/Phnom_Penh');
        $datetime->setTimezone($asia);
        $date = $datetime->format('Y-m-d H:i:s');
        $post = [
            'title' => $request->fam_name." ".$request->give_name,
            'link' => str_slug($request->fam_name." ".$request->give_name,'-'),
            'description' => $enc,
            'publish_date' => $date,
            'post_type' => 'register_member',
            'user_id' => 0,
            'unpublish_date' => $date,
            'created_at' => $date,
            'updated_at' => $date,
        ];
        $id_post = Post::insertGetId($post);
        
        // if($request->email != null){
        //     Member::insert([
        //                     'id' => $id_post,
        //                     'name' => $request->fam_name." ".$request->give_name,
        //                     'username' => $request->email,
        //                     'email' => $request->email,
        //                     'phone' => $request->per_phone,
        //                     'image' => array_key_exists("photo",$dataAll)?$dataAll['photo']:'',
        //                     'address' => $request->home_address,
        //                     'status' => 1,
        //                     // 'password' => bcrypt($request->password),
        //                     'created_at' => date("Y-m-d"),
        //                     'updated_at' => date("Y-m-d"),
        //                 ]);
        // }
        $dataMail = Post::find($id_post);
        $dataMails = ['descript'=>$dataMail->description];
        Mail::send('email.email', $dataMails, function ($m) use($request){
            $m->to('secretary.general@cjbi.asia', 'CJBI')->subject($request->fam_name." ".$request->give_name);// secretary.general@cjbi.asia
        });
        $request->session()->flash('success', 'successful');
        return redirect()->to($request->language_url.'/become-a-member');
    }
  	public function test_mail(){
    	Mail::send('email.email', ['descript'=>'test'], function ($m) {
            $m->to('socheatchanlev@gmail.com', 'CJBI')->subject('Testing');
        });
      
      return response('Success');
    }
    public function getMemberAccount(){
        $member = Member::get();
        return view('admin.member.member_account', compact('member'));
    }
    public function getMemberAccountCreate(){
        return view('admin.member.member_account_create');
    }
    public function postMemberAccountCreate(Request $request){
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_post' => 0,
            'password' => bcrypt($request->password),
        ];
        Member::insert($data);
        return redirect()->to('member/account');
    }
    public function getMemberAccountEdit(Request $request, $id){
        $member = Member::where('id',$id)->first();
        return view('admin.member.member_account_edit', compact('member'));
    }
    public function postMemberAccountEdit(Request $request, $id){
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ];
        Member::where('id',$id)->update($data);
        if($request->password == ''){
            Member::where('id',$id)->update(['password'=>bcrypt($request->password)]);
        }
        return redirect()->to('member/account');
    }
    public function get_delete_member_account($id) {
    	$gallery_id = Member::find($id);
    	$gallery_id->delete();
    	return redirect()->to('member/account')->with('success','Deleted Successful');
    }
    public function get_member_register(){
        $member_data = Post::where('post_type','=','register_member')->get();
        return view('admin.member.member_regis', compact('member_data'));
    }
    public function show_member_html_form($id){
        $member_datas = Post::find($id);
        $member_data = json_decode($member_datas->description);
        return view('member_app_form', compact('member_data'));
    }
}