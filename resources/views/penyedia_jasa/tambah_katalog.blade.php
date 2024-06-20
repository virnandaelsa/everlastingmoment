<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Katalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F3F5F9;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 50px auto;
        }
        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .form-group label {
            font-weight: bold;
        }
        .file-input-wrapper {
            display: flex;
            align-items: center;
        }
        .file-input-wrapper img {
            max-width: 50px;
            margin-right: 10px;
        }
        .add-service-btn {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-top: 10px;
            color: #007bff;
        }
        .add-service-btn img {
            max-width: 20px;
            margin-left: 10px;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
            margin-bottom: 20px;
        }
        .top-bar img {
            max-height: 50px;
        }
        .btn-block {
            background-color: #365B80;
            color: #ffff;
            padding: 10px 0;
        }
        .btn-back {
            background-color: #6c757d;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <img src="{{ asset('images/logoevmo.png') }}" alt="Logo" class="logo">
        <img src="path/to/profile-picture.jpg" alt="Profile Picture" class="profile-picture rounded-circle">
    </div>

    <div class="container">
        <a href="javascript:history.back()" class="btn-back mb-3">Kembali</a>
    </div>

    <h2 class="form-title">Tambah Katalog</h2>
    <div class="form-container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('catalog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul-jasa">Judul jasa</label>
                <input type="text" class="form-control" id="judul-jasa" name="judul_jasa" placeholder="Judul jasa">
            </div>
            <div class="form-group">
                <label for="deskripsi-jasa">Deskripsi jasa</label>
                <input type="text" class="form-control" id="deskripsi_jasa" name="deskripsi_jasa" placeholder="Deskripsi jasa">
            </div>
            <div class="form-group">
                <label for="kategori-jasa">Kategori jasa</label>
                <input type="text" class="form-control" id="kategori_jasa" name="kategori_jasa" placeholder="Kategori jasa">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
                <label for="nomor-telepon">Nomor telepon</label>
                <input type="text" class="form-control" id="nomor-telepon" name="nomor_telepon" placeholder="Nomor telepon">
            </div>
            <div class="form-group">
                <label for="gambar-katalog">Gambar katalog jasa</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="gambar-katalog" name="gambar_katalog">
                    <label class="custom-file-label" for="gambar-katalog">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label for="metode-pembayaran">Metode pembayaran</label>
                <input type="text" class="form-control" id="metode-pembayaran" name="metode_pembayaran" placeholder="Metode pembayaran">
            </div>
            <div class="form-group">
                <label for="nomor-rekening">Nomor rekening</label>
                <input type="text" class="form-control" id="nomor-rekening" name="nomor_rekening" placeholder="Nomor rekening">
            </div>
            <button type="submit" class="btn btn-block">KIRIM</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
</body>
</html>
