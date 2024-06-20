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
                    <input type="nama" placeholder="Nama" required>
                </div>
                <div class="input-group">
                    <input type="no_tlp" placeholder="No Telepon" required>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input type="konfirmasi_password" placeholder="Konfirmasi Password" required>
                </div>
                <button type="submit">SIGN UP</button>
                <p>Sudah punya akun? <a href="/login">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
