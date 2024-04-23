@extends('template.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No RM</th>
                        <th>Nama .</th>
                        <th>Tgl lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Gol Darah</th>
                        <th>alamat</th>
                        <th>No Telp</th>
                        <th>Tgl daftar</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($rspasiens as $rspasien)
                            <tr>
                                <td>{{ $rspasien->norm }}</td>
                                <td>{{ $rspasien->nama }}</td>
                                <td>{{ $rspasien->tgllhr }}</td>
                                <td>{{ $rspasien->sex }}</td>
                                <td>{{ $rspasien->goldar }}</td>
                                <td>{{ $rspasien->Alamat }}</td>
                                <td>{{ $rspasien->tpl }}</td>
                                <td>{{ $rspasien->tgldaf }}</td>
                                <td>{{ $rspasien->email }}</td>
                                <!-- Add more table cells for other columns as needed -->
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No RM</th>
                        <th>Nama .</th>
                        <th>Tgl lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Gol Darah</th>
                        <th>alamat</th>
                        <th>No Telp</th>
                        <th>Tgl daftar</th>
                        <th>Email</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Daftar . Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('superadmin.add') }}" method="POST">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="norm">NO RM</label>
                                            <input type="number" class="form-control" id="norm" name="norm" placeholder="Masukan No RM .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="tgldftar">Tgl Daftar</label>
                                            <input type="date" class="form-control" id="tgldftar" name="tgldftar" placeholder="Masukan Tanggal Daftar ." value="<?php echo date('Y-m-d'); ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama .">
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="norm">Jensi Kelamin</label>
                                            <select class="custom-select" id="sex" name="sex">
                                                <option selected disabled value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="tgldftar">Tgl Lahir</label>
                                            <input type="date" class="form-control" id="tgllahir" name="tgllahir" placeholder="Masukan Tanggal Lahir .">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="norm">Status Menikah</label>
                                            <select class="custom-select" id="menikah" name="menikah">
                                                <option selected disabled value="">Pilih Status Menikah</option>
                                                <option value="belummenikah">Belum Menikah</option>
                                                <option value="menikah">Menikah</option>
                                                <option value="menikahanak1">Menikah anak 1</option>
                                                <option value="menikahanak2">Menikah anak 2</option>
                                                <option value="menikahanak3">Menikah anak 3</option>
                                                <option value="duda">Duda</option>
                                                <option value="janda">Janda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="norm">Agama</label>
                                            <select class="custom-select" id="agama" name="agama">
                                                <option selected disabled value="">Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="ibukdg">Nama Ibu Kandung</label>
                                            <input type="text" class="form-control" id="ibukdg" name="ibukdg" placeholder="Masukan Nama Ibu Kandung .">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="goldar">Golongan Darah</label>
                                            <select class="custom-select" id="goldar" name="goldar">
                                                <option selected disabled value="">Pilih Golongan Darah</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="pkj">Pekerjaan</label>
                                            <input type="text" class="form-control" id="pkj" name="pkj" placeholder="Masukan Pekerjaan .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="pendidikan">Pendidikan Terakhir</label>
                                            <select class="custom-select" id="pendidikan" name="pendidikan">
                                                <option selected disabled value="">Pilih Pendidikan Terakhir</option>
                                                <option value="sd">SD</option>
                                                <option value="smp">SMP</option>
                                                <option value="sma">SMA</option>
                                                <option value="s1">S1</option>
                                                <option value="s2">S2</option>
                                                <option value="s3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="penjamin">Penjamin</label>
                                            <select class="custom-select" id="penjamin" name="penjamin">
                                                <option selected disabled value="">Pilih Jenis Penjamin</option>
                                                <option value="bpjs">BPJS Kesehatan</option>
                                                <option value="umum">Umum</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="nomorkartu">Nomor Kartu</label>
                                            <input type="nubmer" class="form-control" id="nomorkartu" name="nomorkartu" placeholder="Masukan Nomor Kartu .">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="kgr">Keluarga</label>
                                            <select class="custom-select" id="kgr" name="kgr"">
                                                <option selected disabled value="">Pilih Keluarga</option>
                                                <option value=" ayah">Ayah</option>
                                                <option value="ibu">Ibu</option>
                                                <option value="suami">Suami</option>
                                                <option value="istri">Istri</option>
                                                <option value="anak ke 1">anak ke 1</option>
                                                <option value="anak ke 2">anak ke 2</option>
                                                <option value="anak ke 3">anak ke 3</option>
                                                <option value="saudara">Saudara</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="namakgr">Nama</label>
                                            <input type="text" class="form-control" id="namakgr" name="namakgr" placeholder="Masukan Nama Keluarga .">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="noktp">No Ktp</label>
                                    <input type="number" class="form-control" id="noktp" name="noktp" placeholder="Masukan No Ktp .">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat .">
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="provinsi">Provinsi</label>
                                            <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukan Provinsi .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="kota">Kota</label>
                                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota .">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukan Kecamatan .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="desa">Desa</label>
                                            <input type="text" class="form-control" id="desa" name="desa" placeholder="Masukan Desa .">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="notpl">Telepon</label>
                                            <input type="number" class="form-control" id="notpl" name="notpl" placeholder="Masukan Nomor Telepon .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="Email" class="form-control" id="email" name="email" placeholder="Masukan Email .">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nowp">No Whatsapp</label>
                                    <input type="number" class="form-control" id="nowp" name="nowp" placeholder="Masukan Nomor Telepon .">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


