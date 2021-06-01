<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleBack()
    {
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        return redirect('/');
    }


    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubBack()
    {
        $user = Socialite::driver('github')->user();
        $this->_registerOrLoginUser($user);
        return redirect('/');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->profile_photo_path = $data->avatar;
            $user->email_verified_at = now();
            $user->save();
        }
        Auth::login($user);
    }
}
