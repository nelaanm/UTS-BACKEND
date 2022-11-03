@extends('crud.master70')
@section('data70')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tabel Detail Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Home</li>
                    <li class="breadcrumb-item active">Detail Data</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <!--TABEL DATA-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Umur</th>
                                            <th>Tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data70 as $kode)
                                        <tr>
                                            <td>{{ $kode->nik }}</td>
                                            <td>{{ $kode->nama }}</td>
                                            <td>{{ $kode->gender }}</td>
                                            <td>{{ $kode->alamat }}</td>
                                            <td>{{ $kode->status }}</td>
                                            <td>{{ $kode->pekerjaan }}</td>
                                            <td>{{ $kode->warga }}</td>
                                            <td>{{ $kode->asal }}</td>
                                            <td>{{ $kode->tanggal }}</td>
                                            <td>{{ $kode->darah }}</td>
                                            <td><a href="{{ url('delete', $kode->id_penduduk) }}">Hapus</a>
                                            </td>
                                            <td><a href="{{ url('edit', $kode->id_penduduk) }}">Edit</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection