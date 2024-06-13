@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header">
        <img src="back_icon.png" alt="Back">
        <img src="wedding_day_logo.png" alt="Wedding Day">
    </div>
    <div class="image-placeholder"></div>
    <div class="title">Paket Make Up Arabian Look</div>
    <div class="price">Rp. 6.000.000,00</div>
    <div class="rating">⭐ 4.7 / 5</div>
    <div class="description">
        <h3>Deskripsi</h3>
        <p>Arabian look identik dengan riasan di bagian mata dengan ciri penggunaan bulu mata yang tebal dan menggunakan model smokey eyes. Arabian makeup menggunakan eyeshadow yang lebih dari satu warna karena memanfaatkan style bold make up.</p>
    </div>
    <div class="specification">
        <h3>Spesifikasi</h3>
        <p>Wedding ala timur tengah</p>
    </div>
    <div class="reviews">
        <h3>Review</h3>
        <div class="review">
            <span>Customer_1</span>
            <p>Pelayanannya memuaskan. Hasil Make UP nya juga rapi. Pokoknya seneng banget dan puas banget pilih SerbaMUA. Alat Make Up nya juga bersih semua. Luv banget sama SerbaMUA....</p>
        </div>
        <div class="review">
            <span>Customer_2</span>
            <p>Bagus banget Make Up nya. Tapi sayang banget bagian bibirnya crack. Tapi overall oke sih.</p>
        </div>
    </div>
    <div class="button-container">
        <button class="chat-btn">Chat</button>
        <button class="order-btn">Pesan</button>
    </div>
</div>
@endsection