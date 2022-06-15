<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(LoginRequest $request) {
        $authenticated = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'type' => 'admin']);

        if($authenticated) {
            return redirect()->intended('admin/dashboard');
        }

        Session::flash('error', 'Username/password do not match.');

        return redirect()->back();
    }

    public function logout() {
        Session::flush();

        return redirect('admin/login');
    }
}
