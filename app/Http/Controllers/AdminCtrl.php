<?php

namespace Mylar\Http\Controllers;

use Illuminate\Http\Request;

class AdminCtrl extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index()
    {
        return view('manage.admin');
    }
}