<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {

        $user = Socialite::driver('google')->user();

        if (User::where('email', $user->getEmail())->exists()) {

            $auth_status = Auth::attempt([
                'email' => $user->getEmail(),
                'password' => 'abc@123'
            ]);

            if ($auth_status == 1) {
                return redirect('home');
            } else {
                echo "error";
            }
        } else {
            User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt('abc@123')
            ]);

            $auth_status = Auth::attempt([
                'email' => $user->getEmail(),
                'password' => 'abc@123'
            ]);

            if ($auth_status == 1) {
                return redirect('home');
            } else {
                echo "error";
            }
        }
    }
}
