@extends('layouts.index')
@section('container')
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="d-inline">Galeri</span></h1>
            </div>
            <div class="container py-5">
                <section class="carousel-section">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ URL::asset('dist/assets/img/slide1.jpeg') }}" class="d-block w-100 rounded"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ URL::asset('dist/assets/img/slide2.jpeg') }}" class="d-block w-100 rounded"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ URL::asset('dist/assets/img/slide3.jpeg') }}" class="d-block w-100 rounded"
                                    alt="Third slide">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>

                <div class="row">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($images as $image)
                        @if ($image->isPortrait == false)
                        <div class="col">
                            <div class="card h-100">
                                <a href="{{ Storage::url($image->image) }}">
                                    <img src="{{ Storage::url($image->image) }}"
                                        class="card-img-top" alt="">
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($images as $image)
                        @if ($image->isPortrait == true)
                        <div class="col">
                            <div class="card h-100">
                                <a href="{{ Storage::url($image->image) }}">
                                    <img src="{{ Storage::url($image->image) }}"
                                        class="card-img-top" alt="">
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>

            </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-danger btn-lg px-5 py-3 fs-6 fw-bolder" href="/kontak">Kontak Kami</a>
            </div>
        </div>
    </section>
@endsection
