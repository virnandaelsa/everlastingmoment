@extends('layouts.app')

@section('content')
<div class="main-content">
            <div class="header">
                <h1>Detail Pesanan</h1>
                @php
                    $pp=$data2->detailPJ->pengguna->foto;
                    $gpaket=$data1->dt_katalog[0]->gambar;
                @endphp
                <img src='{{asset("/images/avatar/$pp")}}' alt="User Profile" class="profile-pic">
            </div>
            <div class="order-detail">
                <div class="order-header">
                    <img src='{{asset("/images/avatar/$gpaket")}}' alt="Paket Make Up Arabian Look" class="package-img">
                    <div class="package-info">
                    <div class="vendor-info">{{$data2->detailPJ->nama_toko}}</div>
                        <h2>{{$data2->judul}}</h2>
                        <p>{{$data1->dt_katalog[0]->harga}}</p>
                        <div class="rating">
                            <span>⭐ 4.7 / 5</span>
                            <span>45 terpakai</span>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-item">
                        <span class="label">Tanggal pelaksanaan acara:</span>
                        <input type="datetime-local" class="value datetime">
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Keterangan:</span>
                        <input type="text" class="value" placeholder="Tolong segera dikonfirmasi">
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Metode Pembayaran</span>
                        <span class="value">Segera lakukan DP apabila pesanan telah di validasi</span>
                        <span class="value">No. Rekening : </span>
                        <span class="value bank">
                            <select name="bank" id="bank">
                                <option value="BRI">BANK BRI</option>
                                <option value="Mandiri">BANK Mandiri</option>
                                <option value="BCA">BANK BCA</option>
                                <option value="BNI">BANK BNI</option>
                            </select>
                        </span>
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Rincian Pesanan</span>
                        <div class="value">
                            <p>{{$data2->deskripsi}}</p>
                            {{-- <p>Biaya lengkap pengantin</p>
                            <p>Biaya Jasa</p>
                            <p>Down Payment</p>
                            <p>Total Pembayaran</p> --}}
                        </div>
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Alamat Pemesan</span>
                        <span class="value">{{auth()->user()->nama}} | {{auth()->user()->no_telp}}<br>{{auth()->user()->alamat}}</span>
                        {{-- {{dd(auth()->user())}} --}}
                    </div>
                </div>
            </div>
            <button class="order-button">Buat Pesanan</button>
        </div>
@endsection