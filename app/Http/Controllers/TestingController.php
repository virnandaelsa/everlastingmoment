<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function t1()
    {
        return view('testing.t1');
    }
    public function t2()
    {
        return view('testing.t2');
    }
    public function t3()
    {
        return view('testing.t3');
    }
}
