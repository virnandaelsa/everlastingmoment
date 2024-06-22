<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\detailPJ;
use App\Models\katalog;
use App\Models\dt_katalog;
use App\Models\transaksi;
use App\Models\dt_transaksi;
use App\Models\review;

class TestingController extends Controller
{
    public function t1()
    {
        $user = User::with('detailPJ');
        return view('testing.t1', compact('user'));
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
