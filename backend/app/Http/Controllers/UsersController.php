<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => '1', 'name' => 'Abid', 'password' => '123',],
            ['id' => '2', 'name' => 'Connor', 'password' => '123',],
            ['id' => '3', 'name' => 'Eren', 'password' => '123',]
        ];

        return view('Users', [
            'Users' => $users,
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
