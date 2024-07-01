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
    {{-- @dd($data) --}}
    <div class="container">
        <div class="detail"><span>Nama Customer:</span> {{ $data[0]->transaksi->pengguna->nama }}</div>
        <div class="detail"><span>Alamat:</span> {{ $data[0]->transaksi->pengguna->alamat }}</div>
        <div class="detail"><span>Tanggal:</span> {{ $data[0]->transaksi->tanggal }}</div>
        {{-- <div class="detail"><span>Jam:</span> --:--</div> --}}
        <div class="detail"><span>Paket Pemesanan:</span> {{ $data[0]->transaksi->dt_katalog->katalog->judul }}</div>
        <div class="detail"><span>Deskripsi:</span> {{ $data[0]->transaksi->dt_katalog->katalog->deskripsi }}</div>
        <div class="detail"><span>Keterangan:</span> {{ $data[0]->ket }}</div>
        <div class="detail"><span>Total Biaya:</span> Rp {{ $data[0]->transaksi->dt_katalog->harga }} (Rp 100.000 Admin)</div>
        <div class="detail"><span>Uang DP:</span> Rp {{ $data[0]->transaksi->dt_katalog->harga / 2 }}</div>
        {{-- {{var_dump($data[0]->bukti_tfDP)}} --}}
        @if (!($data[0]->bukti_tfDP==""))            
        @php
            $gambar=$data[0]->bukti_tfDP;
        @endphp    
        <div class="detail transfer-proof">
            <span>Bukti Transfer DP:</span>
            <img src='{{ asset("images/pembayaran/$gambar") }}' alt="">
            <a href="{{ asset("images/pembayaran/$gambar") }}">Lihat Bukti Transfer</a>
        </div>
        @endif
        @if (!($data[0]->bukti_tfPelunasan==""))            
        @php
            $gambar2=$data[0]->bukti_tfPelunasan;
        @endphp    
        <div class="detail transfer-proof">
            <span>Bukti Transfer Pelunasan:</span>
            <img src='{{ asset("images/pembayaran/$gambar2") }}' alt="">
            <a href="{{ asset("images/pembayaran/$gambar2") }}">Lihat Bukti Transfer</a>
        </div>
        @endif

    </div>
    <div class="actions">
        <a href="/datapesanan" class="back">Kembali</a>
        <div class="center-buttons">
            <button class="accept"><a href="/pemesanan/{{ $data[0]->id_transaksi }}/2" style="text-decoration: none;color:white">TERIMA</a></button>
            <button class="reject"><a href="/pemesanan/{{ $data[0]->id_transaksi }}/3" style="text-decoration: none;color:white">BATALKAN </a></button>
        </div>
    </div>
    {{-- @dd($data) --}}
</body>
</html>
