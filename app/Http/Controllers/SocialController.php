<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class SocialController extends Controller
{
    public function redirect($provider)
    {
     return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        $user = Socialite::driver($provider)->user();

        if($user->getEmail()){
            $userEmail=User::where('email',$user->getEmail())->first();
            if($userEmail){
                $userEmail->update([
                    'name'=>$user->getName(),
                    'provider'=> $provider,
                    'provider_id'=> $user->getId(),
                    'image'=> $user->getAvatar(),
                ]);               
            }
            else{
                $userEmail=User::create([
                    'name'=>$user->getName(),
                    'email'=>$user->getEmail(),
                    'provider'=> $provider,
                    'provider_id'=> $user->getId(),
                    'image'=> $user->getAvatar(),
                ]);
            }
            Auth::login($userEmail);
            return redirect('/customer');
        }
        else{
            return back()->with('error','message');
        }
    }
}
