<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
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

        .data-table {
            
            padding: 10px;
            border-radius: 8px;
            margin-top: 70px;
        }

        .data-table h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .data-table table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .data-table th, .data-table td {
            padding: 10px;
            text-align: left;
        }

        .data-table th {
            background-color: #6E9FC1;
            color: black;
        }

        .data-table td {
            background-color: rgba(110, 159, 193, 0.7); /* Warna latar belakang 70% opacity */
            border-bottom: 1px solid #ddd; /* Garis bawah setiap baris */
        }

        .data-table td:last-child {
            text-align: center;
        }
        /* Style untuk input pencarian */
        .search-container {
            margin-bottom: 10px;
            text-align: right;
        }
    </style>
</head>
<body>

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
    <div class="data-table">
        <h1>DATA PESANAN</h1>
         <!-- Container untuk input pencarian -->
         <div class="search-container">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari...">
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Paket Pesanan</th>
                <th>Waktu</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Paket A</td>
                <td>2024-06-16 10:00</td>
                <td>On Process</td>
                <td><a href="#"><img src="{{ asset('icon/actoin.png') }}" alt="Detail Pesanan" style="width: 30px;"></a></td>
            </tr>
            
        </table>
    </div>
</div>

</body>
</html>
