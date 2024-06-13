@extends('layouts.app')

@section('content')
<div class="container">
        <div class="header">
            <div class="back-button">←</div>
            <div class="contact-icons">
                <div class="whatsapp">WhatsApp</div>
                <div class="email">Email</div>
            </div>
        </div>
        <div class="order-details">
            <div class="order-info">
                <img src="placeholder.png" alt="Product Image" class="product-image">
                <div class="product-details">
                    <h2>Paket Make Up Arabian Look</h2>
                    <p>Tanggal Acara: 19/02/2024</p>
                    <p>Rp. 6.000.000,00</p>
                </div>
            </div>
            <hr>
            <div class="message">
                <p>Pesan: Acara dilaksanakan pukul 10.00 WIB</p>
            </div>
            <hr>
            <div class="payment-method">
                <p>Metode Pembayaran</p>
                <select>
                    <option>BANK BRI</option>
                    <option>BANK BNI</option>
                    <option>BANK MANDIRI</option>
                    <option>BANK BCA</option>
                </select>
                <p>Segera lakukan DP apabila pesanan telah di validasi</p>
            </div>
            <hr>
            <div class="order-summary">
                <p>Rincian Pesanan</p>
                <div class="summary-details">
                    <p>Paket lengkap pengantin</p>
                    <p>Rp. 6.000.000,00</p>
                </div>
                <div class="summary-details">
                    <p>Biaya Jasa</p>
                    <p>Rp. 0,00</p>
                </div>
                <div class="summary-details">
                    <p>Diskon</p>
                    <p>Rp. 250.000,00</p>
                </div>
                <div class="summary-details total">
                    <p>Total Pembayaran</p>
                    <p>Rp. 5.750.000,00</p>
                </div>
            </div>
            <hr>
            <div class="address">
                <p>Alamat</p>
                <p>Cila Anastasya | (+62) 851-2345-6789</p>
                <p>Desa Tales, Dusun Karanglo, Kecamatan Ngadiluwih, Kabupaten Kediri</p>
                <p>Jalan Kenanga Nomor 256</p>
            </div>
        </div>
        <button class="order-button col-6">Buat Pesanan</button>
    </div>
@endsection
