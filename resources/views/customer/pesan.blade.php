@extends('layouts.app')

@section('content')
<div class="main-content">
            <div class="header">
                <h1>Detail Pesanan</h1>
                <img src="user-profile.jpg" alt="User Profile" class="profile-pic">
            </div>
            <div class="order-detail">
                <div class="order-header">
                    <img src="makeup-package.jpg" alt="Paket Make Up Arabian Look" class="package-img">
                    <div class="package-info">
                    <div class="vendor-info">SeMUA Evelyn</div>
                        <h2>Paket Make Up Arabian Look (paket 1)</h2>
                        <p>Rp. 6.000.000.00</p>
                        <div class="rating">
                            <span>⭐ 4.7 / 5</span>
                            <span>45 terpakai</span>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-item">
                        <span class="label">Tanggal/Jam:</span>
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
                            <p>Biaya lengkap pengantin</p>
                            <p>Biaya Jasa</p>
                            <p>Down Payment</p>
                            <p>Total Pembayaran</p>
                        </div>
                    </div>
                    <hr>
                    <div class="order-item">
                        <span class="label">Alamat</span>
                        <span class="value">Cila Anastasya | (+62) 851-2345-6789<br>Desa Tales, Dusun Karanglo, Kecamatan Ngadiluwih, Kabupaten Kediri<br>Jalan Kenanga Nomor 256</span>
                    </div>
                </div>
            </div>
            <button class="order-button">Buat Pesanan</button>
        </div>
@endsection