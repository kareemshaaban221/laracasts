<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;

class UsersController {

    public function index() {

        $users = App::get('database')->selectAll('users');

        return view('users/index', compact('users', $users));

    }

    public function create() {
        return view('users/add');
    }

    public function store(Request $request) {

        $db = App::get('database');

        if ( isset($request->vip) )
            $request->vip = 1;
        
        $db->insert('users', $request);

        return $this->index();

    }

    // public function delete()

}