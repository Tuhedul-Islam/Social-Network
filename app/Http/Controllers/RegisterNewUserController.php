<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterNewUserController extends Controller
{
    public function RegisterNewUser(Request $request)
    {   

       // dd($request);
        
        $input = new User();
        $input->first_name = $request->input('first_name');
        $input->last_name = $request->input('last_name');
        $input->password  = Hash::make($request->password);
        
        $input->gender = $request->input('gender');
        $input->email = $request->input('email');
        $input->username = $request->input('first_name');

        $input->status_id = $request->input('status_id');


         
        $input->save();
       return redirect()->route('frontend.index');

    }
}
