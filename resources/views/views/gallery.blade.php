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

                <div class="text-center">
                    <img src="{{ URL::asset('dist/assets/img/Vertical-slide.jpg') }}" width="30%" class="rounded float-left m-1" alt="...">
                    <img src="{{ URL::asset('dist/assets/img/slide1.jpeg') }}" width="30%" class="rounded m-1" alt="...">
                    <img src="{{ URL::asset('dist/assets/img/slide3.jpeg') }}" width="30%" class="rounded float-right m-1" alt="...">
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
