<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Mail;

class userfront extends Controller
{
    public function showprofile() {
          $user_id=Auth::user()->id;
          $user=User::findOrFail($user_id);
        return view ('profile',compact('user')); 
            }
}
