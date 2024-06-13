<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogCustomerController extends Controller
{
    public function index()
    {
        return view('customer.beranda');
    }
    public function lihatjasa()
    {
        return view('customer.lihatjasa');
    }
    public function pesan()
    {
        return view('customer.pesan');
    }
}
