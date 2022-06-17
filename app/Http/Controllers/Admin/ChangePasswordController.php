<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ChangePasswordController extends Controller
{
    //
    public function update(ChangePasswordRequest $request) {
        if(Hash::check($request->password, Auth::user()->password)) {
            $user = Auth::user()->update([
                'password' => Hash::make($request->new_password)
            ]);

            Session::flush();
            return redirect('admin/login');
        }

        Session::flash('error', 'Wrong password.');

        return redirect('admin/profile');

    }
}
