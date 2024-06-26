<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Administrasi</title>
    <link rel="stylesheet" href="{{ asset('css/data.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="header">
        <img src="{{ asset('images/logoevmo.png') }}" alt="Logo">
</div>
    <div class="container">
        <div class="d-">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <h1>FORM ADMINISTRASI</h1>
        <form method="POST" enctype="multipart/form-data" action="{{ route('sfa') }}">
            @csrf
            <label for="namaToko">Nama Toko:</label>
            <input type="text" id="namaToko" name="namaToko" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="2" required></textarea>

            <label for="provinsi">Provinsi:</label>
            <select id="provinsi" name="provinsi" required>
                <option value="">Pilih Provinsi</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jabodetabek">Jabodetabek</option>
            </select>

            <label for="kota">Kota / Kabupaten:</label>
            <select id="kota" name="kota" required>
                <option value="">Pilih Kota / Kabupaten</option>
                <option value="Kediri">Kediri</option>
                <option value="Tulungagung">Tulungagung</option>
                <option value="Surabaya">Surabaya</option>
            </select>

            <label>Kategori:</label>
            <div class="kategori" req>
                <div>
                    <input type="radio" id="makeUpArtist" name="kategori" value="Make Up Artist" required>
                    <label for="makeUpArtist">Make Up Artist</label>
                </div>
                <div>
                    <input type="radio" id="fotografi" name="kategori" value="Fotografi & Vidografi" required>
                    <label for="fotografi">Fotografi & Vidografi</label>
                </div>
                <div>
                    <input type="radio" id="dekorasi" name="kategori" value="Dekorasi" required>
                    <label for="dekorasi">Dekorasi</label>
                </div>
                <div>
                    <input type="radio" id="percetakan" name="kategori" value="Percetakan Undangan" required>
                    <label for="percetakan">Percetakan Undangan</label>
                </div>
                <div>
                    <input type="radio" id="soundSystem" name="kategori" value="Sound System" required>
                    <label for="soundSystem">Sound System</label>
                </div>
                <div>
                    <input type="radio" id="sovenir" name="kategori" value="Sovenir" required>
                    <label for="sovenir">Sovenir</label>
                </div>
                <div>
                    <input type="radio" id="catering" name="kategori" value="Catering" required>
                    <label for="catering">Catering</label>
                </div>
                <div>
                    <input type="radio" id="weddingOrganizer" name="kategori" value="Wedding Organizer" required>
                    <label for="weddingOrganizer">Wedding Organizer</label>
                </div>
            </div>

            <label for="namaBank">Nama Bank:</label>
            <select id="namaBank" name="namaBank" required>
                <option value="">Pilih Nama Bank</option>
                <option value="BRI">BANK BRI</option>
                <option value="Mandiri">BANK Mandiri</option>
                <option value="BCA">BANK BCA</option>
                <option value="BNI">BANK BNI</option>
            </select>

            <label for="noRekening">No Rekening:</label>
            <input type="text" id="noRekening" name="no_rek" required>

            <label for="fotoProfil">Upload Foto Profil Toko:</label>
            <div class="file-upload">
                <input type="file" id="fotoProfil" name="fotoProfil" accept="image/*" required>
                <label for="fotoProfil">Choose file</label>
            </div>

            <label for="fotoProfil">Upload Foto Sampul Toko:</label>
            <div class="file-upload">
                <input type="file" id="fotoSampul" name="fotoSampul" accept="image/*" required>
                <label for="fotoSampul">Choose file</label>
            </div>

            <button type="submit">SUBMIT</button>
            <button type="button" onclick="goBack()">KEMBALI</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
