<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.pages.auth.login');
    }

    public function loginPost(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $user = $this->userService->checkLogin($request->email, $request->password);
        if ($user) {
            auth()->login($user);
            return redirect()->route('admin.categories.index');
        } elseif ($user == false) {
            return redirect()->route('admin.auth.login')->with('error', 'Email or password is incorrect');
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }

    public function register()
    {
        return view('admin.pages.auth.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = $this->userService->register($request);
        if ($user) {
            //set auth user
            auth()->login($user);
            return redirect()->route('admin.auth.login')->with('success', 'Register success');

        } else {
            return redirect()->route('admin.auth.register')->with('error', 'Register failed');
        }
    }

}
