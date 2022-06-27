<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{

    public function reface(){
     return Socialite::driver('facebook')->redirect();
    }
    public function callface(){
    try {
     $user = Socialite::driver('facebook')->user();
     $userExisted = User::where('oauth_id' , $user->id)->first();
     if($userExisted){
        Auth::login($userExisted);
        return redirect()->route('/');
     }else{
        $newUser = User::create([
           'name' => $user->name,
           'email' => $user->email,
           'oauth_id' => $user->id,
           'oath_type' => 'facebook',
           'password' => Hash::make($user->id)
        ]);
        Auth::login($newUser);
        return redirect()->route('/');
     }
    } catch (Exception $e) {
        dd($e);
    }
    }
}
