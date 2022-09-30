<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Settings;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use App\Models\create_page;

use App\Models\User;

use App\Models\Friend;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        if (auth()->user()!=null && auth()->user()->group_id != null){

            Auth::logout();
        }

        $data['title']=Settings::select('site_title')->first();

        $data['user']=User::where('role_id',1)->count();


        return view('dashboard.index', $data);
    }


    public function UserIndex()
    {


        $data['title']=Settings::select('site_title')->first();

        $user = User::where('role_id',1)->get();

        return view('old_frontend.all_user',$data,compact('user'));
    }


    public function all_user_post($id)
    {


        $data['title']=Settings::select('site_title')->first();

        

        $post = DB::table('posts')
                         ->leftJoin('users','users.id','posts.user_id')
                         ->select('posts.*','users.profile_image')
                         ->where('user_id',$id)
                         ->get();
                         // dd($post);
        
        return view('old_frontend.all_user_post',$data,compact('post'));
    }



    public function all_user_friend($id)
    {


        $data['title']=Settings::select('site_title')->first();

        

        $friend = DB::table('friends')
                         ->leftJoin('users','users.id','friends.friend_id')
                         ->select('friends.*','users.profile_image','users.full_name')
                         ->where('user_request',$id)
                         
                         ->get();
                         // dd($friend);
        
        return view('old_frontend.all_user_friend',$data,compact('friend'));
    }


    public function homePage()
    {

        return view('old_frontend.home-page');
    }


    public function multiLang($val){
        if ($val == 'bn'){
            \Illuminate\Support\Facades\Session::put('localeVal', 'bn');
        }else{
            \Illuminate\Support\Facades\Session::put('localeVal', 'en');
        }

        return redirect()->back();
    }


    public function page01(Request $request)
    {
      return view('pages.pages01');
    }
    public function page02(Request $request)
    {
      return view('pages.pages02');
    }
    public function proceeding(Request $request)
    {
      return view('pages.pages03');
    }
    public function implementationProgress(Request $request)
    {
      return view('pages.pages04');
    }
    public function meetingRoomDetails(Request $request)
    {
      return view('pages.pages05');
    }

    public function calender(Request $request)
    {
      return view('pages.pages06');
    }

    public function page07(Request $request)
    {
      return view('pages.pages07');
    }

    public function page08(Request $request)
    {
      return view('pages.pages08');
    }

    public function page09(Request $request)
    {
      return view('pages.pages09');
    }

    public function page10(Request $request)
    {
      return view('pages.pages10');
    }

    public function login11(Request $request)
    {
        return view('login.login');
    }

}
