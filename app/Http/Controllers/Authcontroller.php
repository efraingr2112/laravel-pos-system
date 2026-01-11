<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function index() {
        return view("modules.auth.login");
    }
}
