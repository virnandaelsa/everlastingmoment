<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\katalog;
use App\Models\detailPJ;
use App\Models\kategori;


class KatalogCustomerController extends Controller
{
    public function index()
    {
        $data = kategori::all();
        $data2 = katalog::with("dt_katalog")->get();
        return view('customer.beranda', [
            'data' => $data,
            'data2' => $data2,
            ] );
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

    public function store_administrasi(Request $request)
    {

        $request->validate([
            'namaToko' => 'required|string|max:255',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kategori' => 'required',
            'namaBank' => 'required',
            'fotoProfil' => 'required',
            'fotoSampul' => 'required',
            'no_rek' => 'required|string|unique:detailPJ',
        ],[
            'namaToko.required' => 'Nama harus diisi',
            'provinsi.required' => 'Email harus diisi',
            'alamat.required' => 'Alamat bekerja harus diisi',
            'kota.required' => 'No_tlp harus diisi',
            'namaBank.required' => 'Nama Bank harus diisi',
            'fotoProfil.required' => 'Foto Profil harus diisi',
            'fotoSampul.required' => 'Foto Sampul harus diisi',
            'no_rek.unique' => 'No Rekening sudah pernah di tambahkan',
            'kategori.required' => 'kategori harus diisi',
        ]);


        $administrasi = new detailPJ();
        $administrasi->id_user = auth()->user()->id_user;
        $administrasi->nama_toko = $request->namaToko;
        $administrasi->alamat = $request->alamat . " " . $request->kota . ", " . $request->provinsi;
        $administrasi->kategori = $request->kategori;
        $administrasi->bank = $request->namaBank;
        $administrasi->no_rek = $request->noRekening;
        $administrasi->profil_tk = $request->fotoProfil;
        $administrasi->sampul_tk = $request->fotoSampul;

        if ($request->hasFile("fotoProfil") || $request->hasFile("fotoSampul")) {
            $image = $request->file("fotoProfil");
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/penyedia_jasa/profil');
            $image->move($destinationPath, $name);
            $administrasi->profil_tk = $name;

            $image = $request->file("fotoSampul");
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/penyedia_jasa/sampult');
            $image->move($destinationPath, $name);
            $administrasi->sampul_tk = $name;

        }

        $administrasi->save();

        return redirect("/dashboard")->with('success', 'Berhasil Menambah Penyedia Jasa.');
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

