@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="top-bar">
        <div class="user-search">
            <span>Username</span>
            <input type="text" placeholder="Cari">
        </div>
    </div>
    <div class="penawaran my-4">
        <h4 class="bold-text">Penawaran hari Ini!!!</h4>
        <p>Diskon 50%</p>
    </div>
    <div class="category my-4">
        <h4 class="bold-text">Kategori</h4>
        <div class="d-flex flex-wrap">
            <div class="category-item p-2">
                <div class="text-center">
                    <i class="category-icon fas fa-user-tie"></i>
                </div>
                <p>MUA</p>
            </div>
            <div class="category-item p-2">
                <div class="text-center">
                    <i class="category-icon fas fa-gem"></i>
                </div>
                <p>Dekorasi</p>
            </div>
            <div class="category-item p-2">
                <div class="text-center">
                    <i class="category-icon fas fa-music"></i>
                </div>
                <p>Sound Systems</p>
            </div>
            <div class="category-item p-2">
                <div class="text-center">
                    <i class="category-icon fas fa-utensils"></i>
                </div>
                <p>Cathering</p>
            </div>
            <div class="category-item p-2">
                <div class="text-center">
                    <i class="category-icon fas fa-clipboard-list"></i>
                </div>
                <p>Wedding Organizer</p>
            </div>
            <div class="category-item p-2">
                <div class="text-center">
                    <i class="category-icon fas fa-camera"></i>
                </div>
                <p>Photography</p>
            </div>
            <div class="category-item p-2">
                <div class="text-center">
                    <i class="category-icon fas fa-envelope"></i>
                </div>
                <p>Undangan</p>
            </div>
            <div class="category-item p-2">
                <div class="text-center">
                    <i class="category-icon fas fa-gift"></i>
                </div>
                <p>Souvenir</p>
            </div>
        </div>
    </div>
    <div class="recommendations my-4">
        <h4 class="bold-text">Rekomendasi</h4>
        <div class="d-flex flex-wrap">
            <div class="card">
                <img src="{{ asset('images/mua.jpg') }}" class="card-img-top" alt="MUA">
                <div class="card-body">
                    <h5 class="card-title">Wedding Make Up Paket</h5>
                    <p class="card-text">Rp. 5.000.000,00</p>
                    <a href="#" class="float-right">Lihat detail</a>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/dekorasi.jpg') }}" class="card-img-top" alt="Dekorasi">
                <div class="card-body">
                    <h5 class="card-title">Paket Dekorasi</h5>
                    <p class="card-text">Rp. 17.000.000,00</p>
                    <a href="#" class="float-right">Lihat detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
