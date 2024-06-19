@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="top-bar">
            <div class="search-bar">
                <input type="text" placeholder="Jasa Make Up Pengantin">
                <a href="/registrasi" class="btn-signup">SIGN UP</a>
                <a href="/login" class="btn-signin">SIGN IN</a>
                {{-- <button class="btn-signup">SIGN UP</button>
                <button class="btn-signin">SIGN IN</button> --}}
            </div>
        </div>
        <div class="penawaran my-4">
            <h4 class="bold-text">Penawaran hari Ini!!!</h4>
            <p>Diskon 50%</p>
        </div>
        <div class="category my-4">
            <h4 class="bold-text">Kategori</h4>
            <div class="d-flex flex-wrap justify-content-start">
            @foreach ([
                    ['name' => 'MUA', 'image' => 'Beautician.png'],
                    ['name' => 'Dekorasi', 'image' => 'Beautiful Wedding Ribbon.png'],
                    ['name' => 'Sound Systems', 'image' => 'Subwoofer.png'],
                    ['name' => 'Cathering', 'image' => 'Buffet Breakfast.png'],
                    ['name' => 'Wedding Organizer', 'image' => 'Tasklist.png'],
                    ['name' => 'Photography', 'image' => 'SLR Camera.png'],
                    ['name' => 'Undangan', 'image' => 'Letter.png'],
                    ['name' => 'Souvenir', 'image' => 'Favorite Package.png']
                ] as $category)
                <div class="category-item p-2">
                        <div class="text-center">
                            <img class="category-icon" src="{{ asset('images/categories/' . $category['image']) }}" alt="{{ $category['name'] }}">
                        </div>
                        <p>{{ $category['name'] }}</p>
                    </div>
            @endforeach
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
                        <div class="move-right">
                            <a href="#" class="">Lihat detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
