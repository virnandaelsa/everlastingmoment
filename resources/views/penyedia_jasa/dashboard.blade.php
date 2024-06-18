@extends('layouts.app')

@section('content')
<style>
    .search-bar {
        margin: 20px 0;
        text-align: center;
        position: relative;
    }

    .search-bar input[type="text"] {
        width: 50%;
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #ccc;
    }

    .btn-signup, .btn-signin {
        padding: 10px 20px;
        background-color: #4682B4;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 10px;
    }

    .container {
        width: 90%;
        margin: auto;
    }

    .add-catalog {
        text-align: left;
        margin: 20px 0;
    }

    .add-catalog button {
        padding: 10px 20px;
        background-color: #4682B4;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .catalog-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .catalog {
        display: flex;
        overflow: hidden;
        width: 70%;
    }

    .catalog img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        margin: 10px;
        transition: transform 0.3s ease;
    }

    .prev-btn, .next-btn {
        background-color: #4682B4;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        margin: 10px;
    }
    .reviews {
    display: flex; /* Mengubah tata letak reviews menjadi flex */
    flex-wrap: wrap; /* Mengatur agar item-item di dalam flex container dapat wrap (jika perlu) */
}

.review-card {
    flex: 1 0 45%; /* Mengatur flex untuk memanfaatkan ruang dan memberi jarak antar kartu */
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px;
    margin: 10px; /* Memberi jarak antar kartu */
    box-sizing: border-box; /* Memastikan padding tidak menambah lebar total */
    display: flex; /* Mengubah tata letak review-card menjadi flex */
}

.review-card img {
    width: 100px; /* Mengatur lebar gambar */
    height: 100px; /* Mengatur tinggi gambar */
    object-fit: cover;
    border-radius: 10px;
    margin-right: 10px; /* Memberi jarak antara gambar dan teks */
}

.review-card > div {
    flex: 1; /* Memanfaatkan ruang tersedia di dalam flex container */
}

</style>

<div class="content">
    <div class="top-bar">
        <div class="search-bar">
            <input type="text" placeholder="Jasa Make Up Pengantin">
            <img src="user-profile.jpg" alt="User Profile" class="profile-pic">
        </div>
    </div>

    <div class="add-catalog">
        <h4><strong>Tambah Katalog Anda Sekarang!</strong></h4>
        <button>Tambah Katalog</button>
    </div>

    <div class="catalog-container">
        <div class="catalog">
            <img src="catalog1.jpg" alt="Make Up 1">
            <img src="catalog2.jpg" alt="Make Up 2">
            <img src="catalog3.jpg" alt="Make Up 3">
            <img src="catalog4.jpg" alt="Make Up 4">
        </div>
        <div class="button-group">
            <button class="prev-btn">←</button>
            <button class="next-btn">→</button>
        </div>
    </div>

    <h2>Review Customer</h2>
    <div class="reviews">
        <div class="review-card">
            <img src="review1.jpg" alt="Review 1">
            <p>@pengguna_1</p>
            <p>Pelayanannya memuaskan. Hasil Make UP nya juga rapi. Pokoknya seneng banget dan puas banget pilih SerbaMUA. Alat Make Up nya juga bersih semua. Luv banget sama SerbaMUA...</p>
        </div>
        <div class="review-card">
            <img src="review2.jpg" alt="Review 2">
            <p>@pengguna_2</p>
            <p>Puas sama hasil make up nya. Cocok di muka aku. Cuman ngecrack lama-lama. Selebihnya oke banget.</p>
        </div>
    </div>
</div>

<script>
    const catalog = document.querySelector('.catalog');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    nextBtn.addEventListener('click', () => {
        catalog.scrollBy({ 
            left: 160, // 150px width + 10px margin
            behavior: 'smooth' 
        });
    });

    prevBtn.addEventListener('click', () => {
        catalog.scrollBy({ 
            left: -160, 
            behavior: 'smooth' 
        });
    });
</script>

@endsection
