<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = [
            'id' => $id,
            'name' => $id . 'user',
            'email' => 'user' . $id . '@gamil.com'
        ];

        return view('UserProfile', compact('user'));
    }
}
