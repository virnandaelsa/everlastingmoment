@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .header h2 {
        margin: 0;
    }
    .header img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    .order-section {
        margin-bottom: 20px;
    }
    .order-section h3 {
        margin-bottom: 10px;
        padding-bottom: 5px;
    }
    .order-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .order-item img {
        width: 80px;
        height: 80px;
        border-radius: 5px;
        margin-right: 20px;
    }
    .order-details {
        flex-grow: 1;
        border-top : none;
    }
    .order-details p {
        margin: 5px 0;
    }
    .order-button {
        padding: 5px 10px;
        background-color: #365B80;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        max-width: 100px;
        text-align: center; /* Center text in button */
    }
</style>
<div class="container">
    <div class="header">
        <h2>Pesanan Saya</h2>
        <img src="{{ asset('images/avatar/3.jpg') }}" alt="User Profile">
    </div>
    {{-- {{dd(session())}} --}}
    @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
              </button>
            </div>
        @endif
@foreach ($data1 as $data)
    @php
        $gpaket=$data->dt_katalog->gambar
    @endphp
    @if($data->status==1)
    <div class="order-section">
        {{-- @dd($data) --}}
        @php
            // dd($data)
        @endphp
        <h3>PENGAJUAN</h3>
        {{-- {{dd($data)}} --}}
        <div class="order-item">
            <img src="{{filter_var(asset("images/catalogs/$gpaket"), FILTER_VALIDATE_URL)}}" onerror="this.onerror=null; this.src='{{ $gpaket }}';">
            <div class="order-details">
                <p><strong>{{$data->dt_katalog->katalog->judul}}</strong></p>
                <p>{{$data->dt_katalog->harga}}</p>
                <p>{{($data->dt_katalog->katalog->detailPJ->nama_toko)}}</p>
            </div>
                <button class="order-button">PROSES KONFIRMASI</button>
        </div>
    </div>
    @endif
    @if($data->status==2)
    <div class="order-section">
        <h3>Dikonfirmasi</h3>
        <div class="order-item">
            <img src="{{filter_var(asset("images/catalogs/$gpaket"), FILTER_VALIDATE_URL)}}" onerror="this.onerror=null; this.src='{{ $gpaket }}';">
            <div class="order-details">
                <p><strong>{{$data->dt_katalog->katalog->judul}}</strong></p>
                <p>{{$data->dt_katalog->harga}}</p>
                <p>{{($data->dt_katalog->katalog->id_detailPJ)}}</p>
            </div>
            {{-- {{dd($data)}} --}}
            @if ($data->dt_transaksi->status_pembayaran==1)
            <a href="/pelunasan/{{$data->id_transaksi}}" class="order-button-link">
                <button class="order-button">BAYAR DP</button>
                </a>
            @endif
            @if ($data->dt_transaksi->status_pembayaran==2)
            <a href="/pelunasan/{{$data->id_transaksi}}" class="order-button-link">
                <button class="order-button">PELUNASAN</button>
                </a>
            @endif
        </div>
    </div>
    @endif
    @if($data->status==4)
    <div class="order-section">
        <h3>Selesai</h3>
        <div class="order-item">
            <img src="{{filter_var(asset("images/catalogs/$gpaket"), FILTER_VALIDATE_URL)}}" onerror="this.onerror=null; this.src='{{ $gpaket }}';">
            <div class="order-details">
                <p><strong>{{$data->dt_katalog->katalog->judul}}</strong></p>
                <p>{{$data->dt_katalog->harga}}</p>
                <p>{{($data->dt_katalog->katalog->id_detailPJ)}}</p>
            </div>
                {{-- <button class="order-button">Selesai</button> --}}
        </div>
    </div>
    @endif
    @if($data->status==3)
    <div class="order-section">
        <h3>Dibatalkan</h3>
        <div class="order-item">
            <img src="{{filter_var(asset("images/catalogs/$gpaket"), FILTER_VALIDATE_URL)}}" onerror="this.onerror=null; this.src='{{ $gpaket }}';">
            <div class="order-details">
                <p><strong>{{$data->dt_katalog->katalog->judul}}</strong></p>
                <p>{{$data->dt_katalog->harga}}</p>
                <p>{{($data->dt_katalog->katalog->id_detailPJ)}}</p>
            </div>
                <button class="order-button">DIBATALKAN</button>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
