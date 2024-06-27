@extends('layouts.index')
@section('container')
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5 pb-5 text-images">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5" id="customBannerText">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-danger text-white mb-4">
                            <div class="text-uppercase">Tenis Meja &middot; Untuk &middot; Kebangsaan</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">Ping-pong</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="d-inline">Mempertemukan dan Menyatukan</span></h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-danger btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/aktifitas">Aktifitas</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="/galeri">Galeri</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7" id="customBannerImage">
                    <!-- Header profile picture-->
                    <div class="mt-5 mt-xxl-0">
                        <img class="profile-img mb-3" width="100%" src="{{ URL::asset('dist/assets/logo.png') }}"
                            alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- Recent Activity  --}}
    <section class="card-section py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="d-inline">Aktifitas</span></h1>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($activities as $act)
                <div class="col-md-4 my-2">
                    <div class="card">
                        <img src="{{ Storage::url($act->images) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $act->title }}</b></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $act->description }}</h6>
                            <small>{{ date('D, d M Y', strtotime($act->date)); }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Card Section --}}

    <section class="card-section py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="d-inline">Jajaran & Pengurus</span></h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2 m-auto">
                    <div class="card">
                        <img src="{{ URL::asset('dist/assets/pak-joko.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Joko Suranto</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Ketua PTM Kebangsaan</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section-->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center mt-5">
                        <h2 class="display-5 fw-bolder"><span class="d-inline">Tentang Kami</span></h2>
                        <p class="lead fw-light mb-4">Awal dari kebersamaan PTM Kebangsaan</p>
                        <p class="text-muted">Bermula dari hobby yang sama untuk bermain ping-pong yang awalnya hanya sebatas
                            warga <b>RT
                            11 RW 05 Kelurahan Ragunan</b>, semakin berjalannya waktu, semakin banyak juga yang bergabung, maka
                            berdasarkan
                            kesepakatan bersama dimulai lah pembangunan <b>PTM KBS</b> dengan cara sumbangan sukarela dan
                            kerja gotong
                            royong semua anggota yang pembangunan nya dimulai pada bulan Januari dan selesai bulan Februari
                            2023..
                            berdirilah <b>PTM KBS</b> yang beralamat di <b>Gang Pahala Bawah RT 11 RW 05 No. 92 Kel.
                                Ragunan...</b> </p>
                        
                    </div>
                    <div class="maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.718374504477!2d106.8176782!3d-6.3006877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69effcaf0dfc83%3A0x533e5f6bf9a59166!2sPTM%20KBS%20(%20KEBANGSAAN%20)!5e0!3m2!1sen!2sid!4v1712404245922!5m2!1sen!2sid"
                            style="border:0;" height="350" allowfullscreen="" loading="lazy" class="w-100 rounded"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p></p>
                    </div>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-danger" href="https://www.tiktok.com/@ptm.kebangsaan"><i
                            class="bi bi-tiktok"></i></a>
                        <a class="text-danger" href="https://www.google.com/search?q=ptm+kebangsaan"><i
                            class="bi bi-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
