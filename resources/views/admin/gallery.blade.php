@extends('layouts.admin')
@section('container')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <p>{{ $error }}</p>
                    </div>
                @endforeach
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Galeri</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="/admin/dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Galeri
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Foto
            </button>
            <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($images as $image)
                        <div class="col">
                            <div class="card h-100">
                                <a href="{{ Storage::url($image->image) }}">
                                    <img src="{{ Storage::url($image->image) }}"
                                        class="card-img-top {{ $image->isPortrait ? 'vertical' : '' }}" alt="">
                                </a>
                                <div class="card-body">
                                    <h5>{{ $image->title }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
    <!-- Modal -->
    <form action="/admin/gallery/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Galeri</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                name="title">
                            <label for="floatingInput">Judul</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" name="images[]" type="file" id="formFile" accept="image/*"
                                multiple>
                            <div id="imageContainer"></div>
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
                    img.classList.add('img-fluid', 'img-thumbnail', 'm-2');
                    img.style.maxWidth = '150px'; // Adjust as needed
                    imageContainer.appendChild(img);
                }
            });
        }
    </script>
@endsection
