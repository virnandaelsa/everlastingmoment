@extends('layouts.app')

@section('content')

<style>
        /* Opsional: Tambahkan beberapa gaya pada tombol */
        /* .tombol-gambar {
            display: inline-block;
            border: none;
            cursor: pointer;
            text-decoration: none;
        } */

        .gambar img {
            display: block;
            width: 50px; /* Sesuaikan lebar sesuai kebutuhan */
            height: auto;
        }

        body {
            font-family: Arial, sans-serif;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: right;
            align-items: right;
        }
        .popup {
            background: #F3F5F9;
            padding: 20px;
            border-radius: 10px;
            width: 550px;
            max-width: 100%;
        }
        .popup h2 {
            margin-top: 0;
        }
        .filter-section {
            margin-bottom: 20px;
            background-color: #6E9FC1; /* Warna latar belakang */
            color: white; /* Warna teks */
            padding: 15px;
            border-radius: 5px;
        }
        .filter-section h3 {
            margin: 10px 0;
        }
        .filter-section .button-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .filter-section .button-group button {
            flex: 1;
            padding: 10px;
            background: #4d8fba;
            border: none;
            color: white;
            cursor: pointer;
        }
        .filter-section input {
            width: calc(50% - 10px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .filter-section input::placeholder {
            color: #ccc;
        }
        .filter-section .range-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            
        }
        .filter-section .range-buttons button {
            flex: 1;
        }
        .apply-button {
            text-align: center;
        }
        .apply-button button {
            padding: 10px 20px;
            background: #6E9FC1;
            border: none;
            color: white;
            cursor: pointer;
        }
    </style>

    <div class="content">
        <div class="top-bar">
            <div class="search-bar">
                <input type="text" placeholder="Jasa Make Up Pengantin">
                <a href="/registrasi" class="btn-signup">SIGN UP</a>
                <a href="/login" class="btn-signin">SIGN IN</a>
                <button onclick="showPopup()">
                    <img src="{{ asset('images/filter.png') }}" alt="Gambar Tombol">
                </button>
                <!-- <a href="showPopup()"class="gambar">
                    <img src="{{ asset('images/filter.png') }}" alt="Gambar Tombol">
                </a> -->
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

<div class="overlay" id="filterPopup">
    <div class="popup">
        <h2>Filter</h2>
        <div class="filter-section">
            <h3>Lokasi</h3>
            <button>Jabodetabek</button>
            <button>DKI Jakarta</button>
            <button>Jawa Barat</button>
            <button>Jawa Timur</button>
        </div>
        <div class="filter-section">
            <h3>Lain - Lain</h3>
            <input type="text" placeholder="Lain - Lain">
        </div>
        <div class="filter-section">
            <h3>Batas Harga (Rp)</h3>
            <input type="text" placeholder="MIN"> -
            <input type="text" placeholder="MAX">
            <div class="range-buttons">
                <button>0-75RB</button>
                <button>75RB-150RB</button>
                <button>150RB-200RB</button>
            </div>
        </div>
        <div class="filter-section">
            <h3>Bintang</h3>
            <button>Bintang 5</button>
            <button>Bintang 4</button>
            <button>Bintang 3</button>
            <button>Bintang 2</button>
            <button>Bintang 1</button>
        </div>
        <div class="apply-button">
            <button onclick="hidePopup()">Pakai</button>
        </div>
    </div>
</div>

<script>
    function showPopup() {
        document.getElementById('filterPopup').style.display = 'flex';
    }

    function hidePopup() {
        document.getElementById('filterPopup').style.display = 'none';
    }
</script>
@endsection
