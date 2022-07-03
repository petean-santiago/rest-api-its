<?php

namespace App\Http\Controllers\Auth;


use Laravel\Socialite\Facades\Socialite;

class GoogleLoginCallbackController
{
    public function index()
    {
        $user = Socialite::driver('google')->user();
        return view('google_login_callback', [
            'user' => $user
        ]);
    }
}
