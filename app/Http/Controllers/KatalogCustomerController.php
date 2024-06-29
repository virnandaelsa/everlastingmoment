<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\User;
use App\Models\katalog;
use App\Models\detailPJ;
use App\Models\kategori;
use App\Models\dt_katalog;
use Illuminate\Support\Facades\Auth;



class KatalogCustomerController extends Controller
{
    public function index()
    {
        $data = kategori::all();
        $data1=[];
        if (auth()->check()) {
            $a=auth()->user()->role; $b=auth()->user()->id_user;
            // dd(auth()->user());
            if($a==1){
                $pj=DB::table('detailPJ')->where('id_user',$b)->first()->id_detailPJ;
                $data1 = katalog::with("dt_katalog")->get()->where('id_detailPJ','==',$pj);
            }
            }
            $data2 = katalog::with("dt_katalog")->get();
            return view('customer.beranda', [
                'data' => $data,
                'data1' => $data1,
                'data2' => $data2,
                ] );
    }
    public function lihatjasa($id)
    {
        $data1 = katalog::with('dt_katalog')->find($id);
        $data2 = katalog::with('detailPJ.pengguna')->find($id);
        // dd($data2);
        return view('customer.lihatjasa',
            [
            'data1' => $data1,
            'data2' => $data2,
            ]
        );
    }
    public function pesan($id)
    {
        $data1 = katalog::with('dt_katalog')->find($id);
        $data2 = katalog::with('detailPJ.pengguna')->find($id);
        // dd($data2);
        return view('customer.pesan',
            [
            'data1' => $data1,
            'data2' => $data2,
            ]
        );
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
        $hehe = auth()->user()->id_user;
        $data = DB::table('detailPJ')->where('id_user','=',$hehe)->get();
        $user = DB::table('pengguna')->where('id_user','=',$hehe)->get();
        // dd($data);

        return view('penyedia_jasa.tambah_katalog',[
            'data' => $data,
            'user' => $user
        ]);
    }

    public function store_catalogs(Request $request)
    {
        $request->validate([
            'judul_jasa' => 'required|string|max:255',
            'deskripsi_jasa' => 'required|string',
            'kategori_jasa' => 'required|string',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string',
            // 'gambar_katalog' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'metode_pembayaran' => 'required|string',
            'nomor_rekening' => 'required|string',
        ]);

        $user = auth()->user()->id_user;
        $id_pj = DB::select("select * from detailPJ where id_user = $user");
        $user = DB::table('detailPJ')->where('id_user',$user)->get();
        $user = $user[0]->id_detailPJ;

        $catalog = new Catalog();
        $catalog->id_detailPJ = $id_pj[0]->id_detailPJ;
        $catalog->judul = $request->judul_jasa;
        $catalog->deskripsi = $request->deskripsi_jasa;
        $catalog->save();

        $dt_katalog = new dt_katalog();
        $id_dt_katalog = DB::select("select id_katalog from katalog where id_detailPJ = $user order by created_at desc limit 1");
        // dd($id_dt_katalog[0]);

        // $catalog->kategori_jasa = $request->kategori_jasa;
        // $catalog->alamat = $request->alamat;
        // $catalog->nomor_telepon = $request->nomor_telepon;

        if ($request->hasFile('gambar_jasa')) {
            // $image = $request->file('gambar_katalog');
            // $name = time().'.'.$image->getClientOriginalExtension();
            // $destinationPath = public_path('/images/catalogs');
            // $image->move($destinationPath, $name);

            $image = $request->file('gambar_jasa')[0];
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/catalogs');
            $image->move($destinationPath, $name);


            $dt_katalog->gambar = $name;
            $dt_katalog->judul_variasi = $request->judul_jasa_tawaran[0];
            $dt_katalog->harga = $request->biaya[0];
            $dt_katalog->id_katalog = $id_dt_katalog[0]->id_katalog;

            $dt_katalog->save();
        }

        // $catalog->metode_pembayaran = $request->metode_pembayaran;
        // $catalog->nomor_rekening = $request->nomor_rekening;

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
        $administrasi->no_rek = $request->no_rek;
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

        $id = auth()->user()->id_user;
        DB::update("update pengguna set role = 1 where id_user = $id");

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

    public function info_akun()
    {
        $user = Auth::user();
        return view('penyedia_jasa.profile', compact('user'));
    }
}

