<?php

namespace App\Http\Controllers;

use App\Models\UserStats;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
        $user = UserStats::where(['email' => $request->email])->first();

        if(!$user) {
            $user = UserStats::create([
                'name' => $request->name,
                'email' => $request->email,
                'datetime' => $request->datetime,
                'location' => $request->location
            ]);

            return response(['status' => true, 'message' => 'Record saved successfully.', 'id' => $user->id]);
        }

        $updated = $user->update([
            'datetime' => $request->datetime,
            'location' => $request->location
        ]);

        if($updated) {
            return response(['status' => true, 'message' => 'Record saved successfully.', 'id' => $user->id]);
        }

        return response(['status' => false, 'message' => 'Record could not be saved.']);

    }
}
