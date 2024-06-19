<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        body {
            background-image: url('{{ asset('images/backgroundlogin.png') }}');
            background-size: cover; /* Ensure the image covers the entire background */
            background-position: center; /* Center the image */
        }
    </style>
</head>
<body>
<div class="container">
        <div class="left-panel">
            <div class="logo">
                <img src="{{ asset('images/logoevmo.png') }}" alt="Logo">
                <h1>everlasting<br>moments</h1>
            </div>
        </div>
        <div class="right-panel">
            <h2>Welcome!</h2>
            <form>
                <div class="input-group">
                    <input type="nama" placeholder="nama" required>
                </div>
                <div class="input-group">
                    <input type="no_tlp" placeholder="no. telepon" required>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="email" required>
                </div>
                <div class="input-group">
                    <input type="username" placeholder="username" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="password" required>
                </div>
                <div class="input-group">
                    <input type="konfirmasi_password" placeholder="konfirmasi password" required>
                </div>
                {{-- <button type="submit">SIGN IN</button> --}}
                <p>Belum punya akun? <a href="#">buat sekarang</a></p>
            </form>
        </div>
    </div>
</body>
</html>
