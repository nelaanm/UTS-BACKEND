@extends('crud.master')
@section('edit')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <form action="{{ url('update',$dataPenduduk->id_penduduk) }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" value="{{ $dataPenduduk->nik }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $dataPenduduk->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Jenis Kelamin</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="Laki-laki" @if($dataPenduduk->gender=="Laki-laki") selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($dataPenduduk->gender=="Perempuan") selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{ $dataPenduduk->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Status Perkawinan</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="Belum Kawin" @if($dataPenduduk->status=="Belum Kawin") selected @endif>Belum Kawin</option>
                                        <option value="Kawin" @if($dataPenduduk->status=="Kawin") selected @endif>Kawin</option>
                                        <option value="Cerai Hidup" @if($dataPenduduk->status=="Cerai Hidup") selected @endif>Cerai Hidup</option>
                                        <option value="Cerai Mati" @if($dataPenduduk->status=="Cerai Mati") selected @endif>Cerai Mati</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" value="{{ $dataPenduduk->pekerjaan }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Kewarganegaraan</label>
                                    <select class="form-control" name="warga" id="warga">
                                        <option value="WNI" @if($dataPenduduk->warga=="WNI") selected @endif>WNI</option>
                                        <option value="WNA" @if($dataPenduduk->warga=="WNA") selected @endif>WNA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="asal" name="asal" placeholder="Masukkan Tempat Lahir" value="{{ $dataPenduduk->asal }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $dataPenduduk->tanggal }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Golongan Darah</label>
                                    <select class="form-control" name="darah" id="darah">
                                        <option value="A" @if($dataPenduduk->darah=="A") selected @endif>A</option>
                                        <option value="B" @if($dataPenduduk->darah=="B") selected @endif>B</option>
                                        <option value="AB" @if($dataPenduduk->darah=="AB") selected @endif>AB</option>
                                        <option value="O" @if($dataPenduduk->darah=="O") selected @endif>O</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="submit" type="submit" class="btn btn-block1 btn-outline-info">Submit Tambah</button>
                            </div>
                        </form>
                        <!-- /.card-header -->
                        <!-- form start -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</body>

</html>
@endsection