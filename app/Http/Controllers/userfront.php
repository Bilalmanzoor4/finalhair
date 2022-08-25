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

    public function editprofile() {
          $user_id=Auth::user()->id;
          $user=User::findOrFail($user_id);
        return view ('editprofile',compact('user')); 
            }

     public function updateprofile(Request $request) {

           
                $name=$request->input('name');
                $address1=$request->input('address1');
                $address2=$request->input('address2');
                $city=$request->input('city');
                $state=$request->input('state');
                $pincode=$request->input('pincode');
                $mobile=$request->input('mobile');   
                $country=$request->input('country');
       
                $user_id=Auth::user()->id;
                $user=User::findOrFail($user_id);
                
                $user->name=$name;
                $user->address1=$address1;
                $user->address2=$address2;
                $user->city=$city;
                $user->state=$state;
                $user->pincode=$pincode;
                $user->mobile=$mobile; 
                $user->state=$state;   
                $user->country=$country;
                
        
                if($request->hasfile('image'))
                {
                    $destination='Upload/profile'.$user->image;
                    if(File::exists($destination))
                    {
                        File::delete($destination);
                    }
                    $file=$request->file('image');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time() .'.'.$extension;
                    $file->move('Upload/profile',$filename);
                    $user->image=$filename;
        
        
                }  
        
                 $user->update();
                  return redirect()->back()->with('successstatus', 'Your Profile Data is Updated Succesfully');
    
            }
}
