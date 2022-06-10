<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $request) {
        $user = User::updateOrInsert([
            'name' => $request->name,
            'email' => $request->email,
            'datetime' => $request->datetime,
            'location' => $request->location
        ], [
            'datetime' => $request->datetime,
            'location' => $request->location
        ]);

        if($user) {
            return response(['status' => true, 'message' => 'Record saved successfully.', 'id' => $user->id]);
        }

        return response(['status' => false, 'message' => 'Record could not be saved.']);

    }
}
