<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_page;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Friend;
use Illuminate\Support\Arr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class my_pageController extends Controller
{
    public function view_page($id)
    { 
        $approvedFriend=Friend::select('friend_id')->where('status',1)->get()->toArray();
        $approvedFriend=Arr::flatten($approvedFriend);

        $myfriends = user::whereIn('id',$approvedFriend)->get();

        $requestcount = Friend::where('user_request', Auth::user()->id)
                         ->where('status',0)
                         ->where('cancel_request',0)
                          ->where('delete_friend',0)
                         ->where('request_sent',1)
                         ->count();
  
        $my_page = DB::select("SELECT h.* from create_pages h
                        left join users i on i.id = h.user_id
                         where h.id = '$id'");
                
        return View('frontend.page.my_pages.my_pages',compact('my_page','myfriends','requestcount'));
    }

    
}
