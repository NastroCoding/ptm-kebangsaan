@extends('layouts.admin')
@section('container')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Aktifitas</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="/admin/dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Aktifitas
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Aktifitas
            </button>
            <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($activities as $act)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ Storage::url($act->images) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5>{{ $act->title }}</h5>
                                    <p class="card-text">{{ $act->description }}</p>
                                    <small class="text-muted">{{ $act->date }}</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-info"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
    <!-- Modal -->
    <form action="/admin/activity/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Aktifitas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" id="formFile" accept="image/*" name="image">
                            <div id="imageContainer"></div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                name="title">
                            <label for="floatingInput">Judul</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="description"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Deskripsi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput" name="date"
                                placeholder="name@example.com">
                            <label for="floatingInput">Tanggal</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambahkan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        formFile.onchange = evt => {
            const files = formFile.files;
            const imageContainer = document.getElementById('imageContainer');
            imageContainer.innerHTML = ''; // Clear previous images

            Array.from(files).forEach(file => {
                if (file) {
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(file);
                    img.classList.add('img-fluid', 'img-thumbnail');
                    imageContainer.appendChild(img);
                }
            });
        }
    </script>
@endsection
