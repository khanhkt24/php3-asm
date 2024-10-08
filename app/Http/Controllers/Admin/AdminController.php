<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showFormLogin()
    {
        return view('fontends.layouts.login');

    }
    public function handeleLogin()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            /**
             * @var User $user
             */
            $user = Auth::user();
            if($user->isAdmin()){
                return redirect()->route('admin.home');
            }
            return redirect()->route('member.home');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function showFormRegister()
    {
        return view('fontends.layouts.register');
    }
    public function handeleRegister()
    {
        $data = request()->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|confirmed',
        ]);


        $user = User::query()->create($data);

        Auth::login($user);

        request()->session()->regenerate();

        return redirect()->route('member.home');

    }
    public function showFormlogout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}
