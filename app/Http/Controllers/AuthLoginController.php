<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required||max:14',
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ], [
            'nama.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'alamat.required' => 'Alamat bekerja harus diisi',
            'no_tlp.required' => 'No_tlp harus diisi',
            'username.required' => 'Username harus diisi',
            'password.min' => 'Password minimal 8',
        ]);


        // Hash password
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = new User();
        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];
        $user->alamat = $validatedData['alamat'];
        $user->no_hp = $validatedData['no_hp'];
        $user->username = $validatedData['username'];
        $user->password = $validatedData['password'];
        $succ = $user->save();

        // Redirect kembali ke halaman kelola karyawan dengan pesan sukses
        if ($succ){
            return redirect('/login')->with('success', 'Berhasil Melakukan pendaftaran');
        } else {
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function auth(Request $request)
    {
        $credential = $request->validate([
            'nik'=>'required',
            'password'=>'required'
        ]);

        if(Auth::Attempt($credential)){
            if (Auth::user()->role == 1){
                $request->session()->regenerate();
                return redirect("/dashboard");
            }
            elseif (Auth::user()->role == 2 ){
                $request->session()->regenerate();
                return redirect("/dashboard");
            }
            elseif (Auth::user()->role == 3 ){
                $request->session()->regenerate();
                return redirect("/karyawan");
            }
        }

        return back()->with('loginError', 'Belum Berhasil, nih!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}