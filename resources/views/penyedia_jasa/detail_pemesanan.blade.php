<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('css/pemesanan.css') }}">
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/logoevmo.png') }}" alt="Logo">
        <h2>DETAIL PEMESANAN</h2>
    </div>
    <div class="container">
        <div class="detail"><span>Nama Customer:</span> Virnanda</div>
        <div class="detail"><span>Alamat:</span> Banaran, Pesantren, Kota Kediri</div>
        <div class="detail"><span>Tanggal:</span> 25 Mei 2025</div>
        <div class="detail"><span>Jam:</span> 10.00 am</div>
        <div class="detail"><span>Paket Pemesanan:</span> Paket Wedding Siger Sunda</div>
        <div class="detail"><span>Keterangan:</span> Akad, Resepsi</div>
        <div class="detail"><span>Deskripsi:</span> Paket Lengkap orang tua dan pager ayu</div>
        <div class="detail"><span>Total Biaya:</span> Rp 20.000.000</div>
        <div class="detail"><span>Uang DP:</span> Rp 10.000.000</div>
        <div class="detail transfer-proof">
            <span>Bukti Transfer:</span> 
            <img src="path_to_transfer_proof_image" alt="Bukti Transfer">
            <a href="#">Lihat Bukti Transfer</a>
        </div>
        <div class="actions">
            <button class="accept">TERIMA</button>
            <button class="reject">TOLAK</button>
        </div>
        <div class="back">
            <a href="#">Kembali</a>
        </div>
    </div>
</body>
</html>
