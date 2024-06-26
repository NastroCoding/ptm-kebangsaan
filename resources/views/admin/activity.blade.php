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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal">
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
                                    <button class="btn btn-outline-info" data-bs-toggle="modal"
                                        data-bs-target="#edit-modal{{ $act->id }}"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal{{ $act->id }}"><i
                                            class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
    <!-- Add Modal -->
    <form action="/admin/activity/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="add-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="add-modalLabel">Tambah Aktifitas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formFile1" class="form-label">Masukkan Gambar</label>
                            <input class="form-control file-input" type="file" id="formFile1" accept="image/*"
                                name="image">
                            <div class="image-container" id="imageContainer1"></div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput1" placeholder="name@example.com"
                                name="title">
                            <label for="floatingInput1">Judul</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="description"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Deskripsi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput2" name="date"
                                placeholder="name@example.com">
                            <label for="floatingInput2">Tanggal</label>
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
    {{-- Edit Modal --}}
    @foreach ($activities as $act)
        <form action="/admin/activity/edit/{{ $act->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="edit-modal{{ $act->id }}" tabindex="-1" aria-labelledby="edit-modalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="edit-modalLabel">Edit Aktifitas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="formFile2" class="form-label">Masukkan Gambar</label>
                                <input class="form-control file-input" type="file" id="formFile2" accept="image/*"
                                    name="image" multiple>
                                <div class="image-container" id="imageContainer2"><img
                                        src="{{ Storage::url($act->images) }}" class="img-fluid img-thumbnail"></div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput3"
                                    placeholder="name@example.com" name="title" value="{{ $act->title }}">
                                <label for="floatingInput3">Judul</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea4" name="description"
                                    style="height: 100px">{{ $act->description }}</textarea>
                                <label for="floatingTextarea4">Deskripsi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput4" name="date"
                                    placeholder="name@example.com" value="{{ $act->date }}">
                                <label for="floatingInput4">Tanggal</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="/admin/activity/delete/{{ $act->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="delete-modal{{ $act->id }}" tabindex="-1"
                aria-labelledby="add-modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="add-modalLabel">Hapus Akifitas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin untuk menghapus aktifitas ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
    <script>
        document.querySelectorAll('.file-input').forEach(input => {
            input.addEventListener('change', (evt) => {
                const files = evt.target.files;
                const imageContainer = evt.target.closest('.modal-body').querySelector('.image-container');
                imageContainer.innerHTML = ''; // Clear previous images

                Array.from(files).forEach(file => {
                    if (file) {
                        const img = document.createElement('img');
                        img.src = URL.createObjectURL(file);
                        img.classList.add('img-fluid',
                            'img-thumbnail'); // Added margin for better spacing
                        imageContainer.appendChild(img);
                    }
                });
            });
        });
    </script>
@endsection
