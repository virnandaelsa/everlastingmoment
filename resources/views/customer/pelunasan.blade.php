@extends('layouts.app')

@section('content')
<div class="main-content">
    <form action="/pelunasan" method="POST" enctype="multipart/form-data">
        @csrf
        @php
        foreach ($errors->all() as $message) {
            $messages[] = $message;
        }
        @endphp
        {{-- @if($errors->has('tanggal')) --}}
        {{-- {{dd($dataLengkap)}} --}}
        {{-- {{dd($dataLengkap->dt_katalog->katalog->detailPJ->pengguna->id_user)}} --}}
        <input type="text" style="visibility:hidden" name="id_user" value="{{auth()->user()->id_user}}">
        <input type="text" style="visibility:hidden" name="id_katalog" value="{{$dataLengkap->dt_katalog->katalog->id_katalog}}">
        <input type="text" style="visibility:hidden" name="id_dt_katalog" value="{{$dataLengkap->dt_katalog->id_dt_katalog}}">
        <input type="text" style="visibility:hidden" name="id_transaksi" value="{{$dataLengkap->id_transaksi}}">
        <input type="text" style="visibility:hidden" name="id_dt_transaksi" value="{{$dataLengkap->dt_transaksi->id_dt_transaksi}}">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
              </button>
            </div>
        @endif
            <div class="header">
                <h1>Detail Pesanan</h1>
                @php
                    $pp=$dataLengkap->dt_katalog->katalog->detailPJ->pengguna->foto;
                    $gpaket=$dataLengkap->dt_katalog->gambar;
                @endphp
                <img src='{{asset("/images/avatar/$pp")}}' alt="User Profile" class="profile-pic">
            </div>
            <div class="order-detail">
                <div class="order-header">
                    <img src='{{asset("/images/catalogs/$gpaket")}}' alt="Paket Make Up Arabian Look" class="package-img">
                    <div class="package-info">
                    <div class="vendor-info">{{$dataLengkap->dt_katalog->katalog->detailPJ->nama_toko}}</div>
                        <h2>{{$dataLengkap->dt_katalog->katalog->judul}}</h2>
                        <span>{{$dataLengkap->dt_katalog->judul_variasi." | Biaya : Rp ".$dataLengkap->dt_katalog->harga}},-</span>
                        <br><span>{{"PEMBAYARAN DP 50% -> Biaya : Rp ".$dataLengkap->dt_katalog->harga/2}},-</span>
                    </div>
                </div>

                    <div class="order-details">
                        <div class="order-item">
                            <span class="label">Tanggal pelaksanaan acara: {{$dataLengkap->tanggal}}
                            <input style="visibility: hidden; width: 0%;" type="date" class="" name="tanggal" value="{{$dataLengkap->tanggal}}" readonly>
                            </span>
                            @if($errors->has('tanggal')) <p style="color: red">{{($messages[0])}}</p> @endif
                        </div>
                        <hr>
                        <div class="order-item">
                            <span class="label">Keterangan: {{$dt_transaksi->dt_transaksi->ket}}
                                <input type="text" placeholder="Detail Pemesananan" name="keterangan" style="width:10%; visibility:hidden;" value="{{$dt_transaksi->dt_transaksi->ket}}" readonly>
                            </span>
                            @if($errors->has('tanggal')) <p style="color: red">{{($messages[1])}}</p> @endif
                        </div>
                        <hr>
                        <div class="order-item">
                            <span class="label">Metode Pembayaran</span>
                            <br><span class="value">DP sebesar 50% ( Rp {{$dataLengkap->dt_katalog->harga/2}},-)</span>
                            <span class="">No. Rekening : {{$dataLengkap->dt_katalog->katalog->detailPJ->no_rek}}
                                <select name="bank" id="bank" style="visibility: hidden; width: 0%;">
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
                                <p>{{$dataLengkap->dt_katalog->katalog->deskripsi}}</p>
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
                        <hr>
                        @if ($dt_transaksi->status==2 && $dt_transaksi->dt_transaksi->status_pembayaran==1)
                        <div class="upload-section">
                            <label for="upload-bukti">Upload bukti DP:
                                <br> <input class="mt-2" type="file" id="upload-bukti" name="upload-bukti_dp"> </label>
                                @if($errors->has('upload-bukti_dp')) <p style="color: red">{{($messages[0])}}</p> @endif
                            </div> 
                        <hr>
                        @endif
                        {{-- @if (isset($messages))
                        @dd($messages)
                        @endif --}}
                        @if ($dt_transaksi->dt_transaksi->status_pembayaran==2)
                        <div class="upload-section">
                            <label for="upload-bukti">Upload bukti Pelunasan: 
                                <br> <input class="mt-2" type="file" id="upload-bukti" name="upload-bukti_pelunasan"> </label>
                                @if($errors->has('upload-bukti_pelunasan')) <p style="color: red">{{($messages[0])}}</p> @endif
                            </div> 
                        @endif
                    </div>
            </div>
            @if ($dt_transaksi->status==2||$dt_transaksi->dt_transaksi->status_pembayaran==2)
            <button class="order-button" type="submit">Upload</button>
            @endif
        </div>
    </form>
@endsection
