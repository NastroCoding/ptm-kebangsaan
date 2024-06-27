@extends('layouts.index')
@section('container')
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="d-inline">Aktifitas</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-danger fw-bolder mb-0">Event</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                    </div>
                    <!-- Experience Card 1-->
                    @foreach ($activities as $act)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <img src="{{ Storage::url($act->images) }}" class="img-fluid rounded"
                                            alt="...">
                                    </div>
                                    <h5 class="mt-5"><b>{{ $act->title }}</b></h5>
                                    <h6 class="mb-2 text-body-secondary">
                                        {{ $act->description }}
                                    </h6>
                                    <small>{{ date('D, d M Y', strtotime($act->date)); }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
@endsection
