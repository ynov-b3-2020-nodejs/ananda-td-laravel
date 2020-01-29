<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite;

class LoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite\Facades\Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite\Facades\Socialite::driver('github')->user();
    }
}
