@extends('layout.main')

@section('content')

    <section id="hero">
        <h4>Penawaran Terbaru</h4>
        <h2>Dapatkan produk terbaru</h2>
        <h1>Di bulan Juni</h1>
        <p>Segera beli sebelum kehabisan!</p>
        <button onclick="location.href='http://127.0.0.1:8000/shop'" type="button">Belanja Sekarang</button>
    </section>
    
    <br>
    <!-- <h2 class="categories">Kategori</h2>
    <section id="feature" class="section-p1">
        @foreach($kategori as $hasil)
            <div class="fe-box">
                <a href="/shop/{{ $hasil->id }}/">
                <img src="{{ asset('global/kategori') }}/{{ $hasil->category_image }}" width="100px" alt="">
                <h6>{{ $hasil->category_name }}</h6>
                </a>
            </div>
        @endforeach
    </section> -->

    <section id="product1" class="section-p1">
        <h2>Produk Terkait</h2>
        <p>Segera miliki koleksi terbaru dari Maura Clothing</p>
        <div class="pro-container">
            @include('site.produk')
        </div>
    </section>
    

    <section id="banner" class="section-1">
        <!-- <h4>Repair Service</h4>
        <h2>Up to <span>30% Off</span> - All items</h2>
        <button class="normal">Explore More</button> -->
    </section>

    <section id="product1" class="section-p1">
        <h2>Produk Terbaru</h2>
        <p>Cari tahu produk terbaru kami yang akan membuat Anda selalu terdepan dalam tren terkini. Dapatkan pengalaman terbaik dengan produk-produk terbaru yang selalu memenuhi selera Anda</p>
        @include('site.produk')
    </section>

@endsection
