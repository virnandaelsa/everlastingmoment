    <div class="penawaran my-4">
        @auth @if (auth()->user()->role==1)
        <h4 class="bold-text">Tambah Katalog Anda Sekarang!</h4>
        <a href="/tambah_katalog" class="btn btn-primary">TAMBAH KATALOG</a>
        @endif @endauth
    </div>

    @auth @if (auth()->user()->role==1)
    <div class="recommendations my-4">
        <h4 class="bold-text">KATALOG SAYA</h4>
        <div class="d-flex flex-wrap">
            <div class="card">
                <a href="{{ asset('images/mua.jpg') }}">
                    <img src="{{ asset('images/mua.jpg') }}" class="card-img-top" alt="MUA">
                </a>
                    {{-- <div class="card-body">
                    <h5 class="card-title">Wedding Make Up Paket</h5>
                    <p class="card-text">Rp. 5.000.000,00</p>
                    <div class="move-right">
                        <a href="/lihatjasa" class="">Lihat detail</a>
                    </div>
                </div> --}}
            </div>
            <div class="card">
                <a href="{{ asset('images/mua.jpg') }}">
                    <img src="{{ asset('images/mua.jpg') }}" class="card-img-top" alt="MUA">
                </a>
            </div>
            <div class="card">
                <a href="{{ asset('images/mua.jpg') }}">
                    <img src="{{ asset('images/mua.jpg') }}" class="card-img-top" alt="MUA">
                </a>
            </div>
            <div class="card">
                <a href="{{ asset('images/mua.jpg') }}">
                    <img src="{{ asset('images/mua.jpg') }}" class="card-img-top" alt="MUA">
                </a>
            </div>
            <div class="card">
                <a href="{{ asset('images/mua.jpg') }}">
                    <img src="{{ asset('images/mua.jpg') }}" class="card-img-top" alt="MUA">
                </a>
            </div>
        </div>
    </div>
    <div class="recommendations my-4">
        <h4 class="bold-text">REVIEW</h4>
        <div class="d-flex flex-wrap">
            <div class="card">
                <img src="{{ asset('images/mua.jpg') }}" class="card-img-top" alt="MUA">
                <div class="card-body">
                    <h5 class="card-title">Wedding Make Up Paket</h5>
                    <p class="card-text">Rp. 5.000.000,00</p>
                    <div class="move-right">
                        <a href="/lihatjasa" class="">Lihat detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif @endauth
