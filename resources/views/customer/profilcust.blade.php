@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    
    .text-center {
        text-align: center;
    }

    .profile-info {
    /* background-color: #F3F5F9; */
    padding: 10px;
    border-radius: 8px;
    margin-top: 140px; /* Adjust the margin top value as needed */
    }


    .profile-info ul {
        list-style: none;
        padding: 0;
    }

    .profile-info li {
        margin-bottom: 10px;
        border-bottom: 1px solid #ddd; /* Garis bawah setiap item dalam profile-info */
        padding-bottom: 15px; /* Ruang antara garis bawah dan teks */
    }

    .profile-info a {
    text-decoration: none;
    color: #000; /* Default link color (blue) */
    }

    .profile-info a:hover {
        color: #666; /* Gray color on hover */
    }
</style>

<div class="content">
    <div class="profile-info">
        <ul>
            <li><a href="#">Informasi Akun</a></li>
            <li><a href="#">Pesanan Saya</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Daftar Sebagai Penyedia Jasa</a></li>
            <li><a href="#">Keluar</a></li>
        </ul>
    </div>
</div>
@endsection