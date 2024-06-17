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
    public function login()
    {
        return view('auth.login');
    }
    public function registrasi()
    {
        return view('auth.registrasi');
    }
    public function tambah_katalog()
    {
        return view('penyedia_jasa.tambah_katalog');
    }
    public function lengkapi_administrasi()
    {
        return view('penyedia_jasa.lengkapi_administrasi');
    }
    public function pemesanan()
    {
        return view('penyedia_jasa.detail_pemesanan');
    }


    public function profilcust()
    {
        return view('customer.profilcust');
    }

    public function datapesanan()
    {
        return view('penyedia_jasa.data_pesanan');
    }

    public function review()
    {
        return view('customer.review');
    }

    public function helpcenter()
    {
        return view('auth.HelpCenter');
    }
}

