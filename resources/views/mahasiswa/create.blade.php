@extends('template.main')
@section('content')

<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>

            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Mahasiswa</h3>
                        </div>

                        <!-- /.card-header -->
                        <form action="{{ url('mahasiswa') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">
                            <form action="tambahaksimahasiswa.php" method="POST">
                                <div class="card-group">
                                    <label for="nim">Nim</label>
                                    <input type="text" name="nim" id="nim" class="form-control" required>
                                </div>
                                <div class="card-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required>
                                </div>
                                <div class="card-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <div class="card-group">
                                    <label for="tanggal_lahir">Tanggal lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                                </div>
                                <div class="card-group">
                                    <label for="no_telpn">No Telp</label>
                                    <input type="text" name="no_telpn" id="no_telpn" class="form-control" required>
                                </div>
                                <div class="card-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="card-group">
                                    <label for="id_prodi">Prodi</label>
                                    <select class="form-select" name="id_prodi" id="id_prodi">
                                       @foreach ($prodi as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }} </option>
                                       @endforeach
                                    </select>
                                    <div class="card-group">
                                        <label for="foto">Upload Foto</label>
                                        <input type="file" name="foto" id="image" class="form-control" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="index.php" class="btn btn-danger float-start">Kembali</a>
                                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection()
