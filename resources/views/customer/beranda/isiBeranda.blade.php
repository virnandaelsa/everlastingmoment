<div class="penawaran my-4">
    {{-- <h4 class="bold-text">Penawaran hari Ini!!!</h4>
    <p>Diskon 50%</p> --}}
    {{-- <div class="d-flex flex-wrap">
        <div class="card">
            <img style="width:50px" src="{{ asset('images/categories/Beautician.png') }}" class="card-img-top" alt="MUA">
            <div class="card-body">
                <h5 class="card-title">Wedding Make Up Paket</h5>
                <p class="card-text">Rp. 5.000.000,00</p>
                <div class="move-right">
                    <a href="/lihatjasa" class="">Lihat detail</a>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="category my-4">
    <h4 class="bold-text">Kategori</h4>
    <div class="d-flex flex-wrap justify-content-start">
    {{-- @foreach ([
            ['name' => 'MUA', 'image' => 'Beautician.png'],
            ['name' => 'Dekorasi', 'image' => 'Beautiful Wedding Ribbon.png'],
            ['name' => 'Sound Systems', 'image' => 'Subwoofer.png'],
            ['name' => 'Cathering', 'image' => 'Buffet Breakfast.png'],
            ['name' => 'Wedding Organizer', 'image' => 'Tasklist.png'],
            ['name' => 'Photography', 'image' => 'SLR Camera.png'],
            ['name' => 'Undangan', 'image' => 'Letter.png'],
            ['name' => 'Souvenir', 'image' => 'Favorite Package.png']
        ] as $category) --}}
        @foreach ($data as $category)
        <div class="category-item p-2">
            <a href="/{{$category['judul_kategori']}}" style="color: #385a7f">
                <div class="text-center">
                    <img class="category-icon" src="{{ asset('images/categories/' . $category['gambar_kategori']) }}" alt="{{ $category['judul_kategori'] }}">
                    {{-- <!-- <img class="category-icon" src="{{ asset('images/categories/' . $category['image']) }}" alt="{{ $category['name'] }}"> --> --}}
                </div>
                <p>{{ $category['judul_kategori'] }}</p>
                {{-- <!-- <p>{{ $category['name'] }}</p> --> --}}
            </a>    
        </div>
        @endforeach
    {{-- @endforeach --}}
    </div>
</div>
<div class="recommendations my-4">
    <h4 class="bold-text">Rekomendasi</h4>
    <div class="d-flex flex-wrap">
        @if (isset($isi))
            @if (!is_null($isi))
            @foreach ($results as $hasilbos)                
            <div class="card" style="background: #c4d8e6;">
                <?php
                ?>
                <img src="{{filter_var(asset("images/catalogs/$hasilbos->gambar"), FILTER_VALIDATE_URL)}}" onerror="this.onerror=null; this.src='{{ $hasilbos->gambar }}';"
                    class="card-img-top mt-2" alt="{{$hasilbos->gambar}}" style="width: 200px; height:100px ;align-self: center;">
                <div class="card-body">
                    <h5 class="m-0 card-title" style="align-self: center"> {{$hasilbos->judul}}</h5><hr>
                    <p class="m-0 card-text">Variasi : {{$hasilbos->judul_variasi}}</p>
                    <p class="m-0 card-text">Penyedia : {{$hasilbos->nama_toko}}</p>
                    <p class="m-0 card-text">Kategori : {{$hasilbos->kategori}}</p>
                    <p class="m-0 card-text">Harga : {{$hasilbos->harga}}</p>
                    <p class="m-0 card-text"><br> Deskripsi : <br> {{$hasilbos->deskripsi}}<br></p>
                    <p class="m-0 card-text"><br> Alamat : <br> {{$hasilbos->alamat}} <br></p>
                    <div class="move-right">
                        <a href="/lihatjasa/{{$hasilbos->id_katalog}}" class="">Lihat detail</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif    
        @else            
        {{-- <div class="card">
            <img style="width: 300px; height:150px" src="{{ asset('images/categories/Beautician.png') }}" class="card-img-top" alt="MUA">
            <div class="card-body">
                <h5 class="card-title">Wedding Make Up Paket</h5>
                <p class="card-text">Rp. 5.000.000,00</p>
                <div class="move-right">
                    <a href="/lihatjasa" class="">Lihat detail</a>
                </div>
            </div>
        </div> --}}
        @if ($data2->isEmpty())
            <p>Belum Ada nihh...</p>
        @endif
        @foreach($data2 as $katalog)
        <div class="card">

            <?php
                if (isset($katalog->dt_katalog[0]->gambar)) {
                    # code...
                    $gambar = $katalog->dt_katalog[0]->gambar;
                }
                else {
                    $gambar=asset("images/logoevmo.png");
                }
                if (isset($katalog->dt_katalog[0]->harga)) {
                    # code...
                    $harga = $katalog->dt_katalog[0]->harga;
                }
                else {
                    # code...
                    $harga='';
                }
            ?>
            <img src="{{filter_var(asset("images/catalogs/$gambar"), FILTER_VALIDATE_URL)}}" onerror="this.onerror=null; this.src='{{ $gambar }}';"
                class="card-img-top" alt="{{$gambar}}" style="width: 300px; height:150px">
            <div class="card-body">
                <h5 class="card-title">{{$katalog['judul']}}</h5>
                <p class="card-text">{{$harga}}</p>
                <div class="move-right">
                    <a href="/lihatjasa/{{$katalog->id_katalog}}" class="">Lihat detail</a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
