<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;


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

    public function store_catalogs(Request $request)
    {
        $request->validate([
            'judul_jasa' => 'required|string|max:255',
            'deskripsi_jasa' => 'required|string',
            'kategori_jasa' => 'required|string',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string',
            'gambar_katalog' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'metode_pembayaran' => 'required|string',
            'nomor_rekening' => 'required|string',
        ]);

        $catalog = new Catalog();
        $catalog->judul_jasa = $request->judul_jasa;
        $catalog->deskripsi_jasa = $request->deskripsi_jasa;
        $catalog->kategori_jasa = $request->kategori_jasa;
        $catalog->alamat = $request->alamat;
        $catalog->nomor_telepon = $request->nomor_telepon;
        
        if ($request->hasFile('gambar_katalog')) {
            $image = $request->file('gambar_katalog');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/catalogs');
            $image->move($destinationPath, $name);
            $catalog->gambar_katalog = $name;
        }
        
        $catalog->metode_pembayaran = $request->metode_pembayaran;
        $catalog->nomor_rekening = $request->nomor_rekening;
        $catalog->save();

        return redirect()->route('catalog.create')->with('success', 'Catalog added successfully.');
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

    public function review_customer()
    {
        return view('penyedia_jasa.review_customer');
    }

    public function lihatjasa_pj()
    {
        return view('penyedia_jasa.lihatjasa');
    }
    public function dashboard()
    {
        return view('penyedia_jasa.dashboard');
    }
}

