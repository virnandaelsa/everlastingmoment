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
    public function dp()
    {
        return view('customer.bukti_dp');
    }
    public function pelunasan()
    {
        return view('customer.pelunasan');
    }
    public function status_pesanan()
    {
        return view('customer.status_pesanan');
    }
    public function wishlist()
    {
        return view('customer.wishlist');
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

    public function notifikasi()
    {
        return view('auth.notifikasi');
    }
    public function dashboard()
    {
        return view('penyedia_jasa.dashboard');
    }
}

