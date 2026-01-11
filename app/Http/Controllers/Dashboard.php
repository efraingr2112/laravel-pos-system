<?php

namespace App\Http\Controllers;


class Dashboard extends Controller
{
    public function index(){
        return view('modules.Dashboard.home');
    }
}
