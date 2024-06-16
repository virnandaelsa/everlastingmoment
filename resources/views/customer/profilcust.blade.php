
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #F3F5F9;
    }

    .sidebar {
        width: 200px;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        background-color: #F3F5F9; /* Warna sidebar */
        padding-top: 20px;
    }

    .sidebar a {
        display: block;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        color: black;
        transition: background-color 0.3s, color 0.3s;
    }

    .sidebar a:hover {
        background-color: #ddd;
        color: black;
    }

    .sidebar img {
        margin-bottom: 10px;
    }

    .text-center {
        text-align: center;
    }

    .content {
        margin-left: 220px; /* Lebar sidebar + margin */
        padding: 20px;
        background-color: #F3F5F9; /* Warna latar belakang halaman */
    }

    .profile-info {
    background-color: #F3F5F9;
    padding: 20px;
    border-radius: 8px;
    margin-top: 70px; /* Adjust the margin top value as needed */
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

<div class="sidebar">
    <div class="text-center">
        <img src="{{ asset('images/logoevmo.png') }}" alt="Logo" style="width: 150px;">
    </div>
    <a href="#"><img src="{{ asset('icon/bxs_home.png') }}" alt="home" style="width: 30px;"></a>
    <a href="#"><img src="{{ asset('icon/icon-park-solid_transaction.png') }}" alt="Detail Pesanan" style="width: 30px;"></a>
    <a href="#"><img src="{{ asset('icon/iconamoon_notification-fill.png') }}" alt="Notification" style="width: 30px;"></a>
    <a href="#"><img src="{{ asset('icon/iconamoon_profile-fill.png') }}" alt="Profil" style="width: 30px;"></a>
    <a href="#"><img src="{{ asset('icon/ri_whatsapp-fill.png') }}" alt="Detail Pesanan" style="width: 30px;"></a>
    <a href="#"><img src="{{ asset('icon/ic_baseline-help.png') }}" alt="Detail Pesanan" style="width: 30px;"></a>
</div>

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
