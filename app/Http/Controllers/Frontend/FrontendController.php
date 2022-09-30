<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Arr;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use App\Models\create_page;

use App\Models\User;

use App\Models\Friend;

use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $postview = DB::table('posts')
                         ->leftJoin('users','users.id','posts.user_id')
                         ->select('posts.*','users.profile_image')
                          
                         ->get();

        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();
      
        return view('frontmaster',compact('user','postview','myfriends','requestcount'));

     }


    public function timeline()
    {
        $image = User::where('id',Auth::user()->id)->first();
        // dd($image);
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();

       
        

        $timelineview = DB::table('posts')
                         ->leftJoin('users','users.id','posts.user_id')
                         ->select('posts.*','users.profile_image')
                            ->where('posts.user_id',Auth::user()->id)
                         ->get();

       // dd($timelineview);

        return view('frontend.page.timeline',compact('timelineview','myfriends','requestcount','image'));
    }

    public function photo_page()
    {
        $image = User::where('id',Auth::user()->id)->first();
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();

        return view('frontend.page.photospage',compact('myfriends','requestcount','image'));
    }

    public function videos_page()
    {
        $image = User::where('id',Auth::user()->id)->first();
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();

        return view('frontend.page.videospage',compact('myfriends','requestcount','image'));
    }


    public function friends_page()
     {
         $image = User::where('id',Auth::user()->id)->first();

        $pendingFriend=Friend::select('user_request')->where('request_sent',1)->get()->toArray();

        $pendingFriend=Arr::flatten($pendingFriend);
        
        $approvedFriend=Friend::select('user_request ')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);


        $allfriends = user::whereNotIn('id',$pendingFriend)->whereNotIn('id',$approvedFriend)->get();
         // dd($allfriends);

        $myfriends = user::whereIn('id',$approvedFriend)->get();
        // dd($myfriends);





        $count = DB::table('users')->count();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();

        $myfriendcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',1)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();
        // dd($requestcount);

         $friendRequest = DB::table('friends')
                         ->leftJoin('users','users.id','friends.user_request')
                         ->select('friends.*','users.full_name')
                         ->where('friends.user_request',Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->get();
                          // dd($friendRequest);

       
        return view('frontend.page.friendspage',
            compact('allfriends','count','friendRequest','requestcount','myfriends','myfriendcount','image'));
     }


    public function groups_page()
    {
        $image = User::where('id',Auth::user()->id)->first();
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();

        return view('frontend.page.groupspage',compact('myfriends','requestcount','image'));
    }


    public function about_page()
    {
         $image = User::where('id',Auth::user()->id)->first();
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();

        return view('frontend.page.aboutpage',compact('myfriends','requestcount','image'));
    }

    public function create_page()
    {
        return view('frontend.page.create_page');
    }

    public function edit_password()
    {
        return view('frontend.page.edit_password');
    }

    public function massage_box()
    {
        return view('frontend.page.massage_box');
    }


    public function notification_page()
    {
        return view('frontend.page.notification_page');
    }

    public function my_page()
    {
        //dd(Auth::user()->id);
         $image = User::where('id',Auth::user()->id)->first();
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();
        $my_page = create_page::where('user_id', Auth::user()->id)->get();

       
        return view('frontend.page.my_page',compact('my_page','myfriends','requestcount','image'));
    }


}
