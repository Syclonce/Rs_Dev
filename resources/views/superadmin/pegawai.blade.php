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
                        <th>No Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Departemen</th>
                        <th>Bidang</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($rspasiens as $rspasien)
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
                        @endforeach --}}
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Departemen</th>
                        <th>Bidang</th>
                        <th>Status</th>
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
                <h5 class="modal-title" id="exampleModalLabel">Daftar Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                      <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Data Profile</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Profile</a>
                        </li>
                      </ul>
                    </div>
                    <form action="{{ route('superadmin.pegawai') }}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nip">Kode Pegawai(NIP)</label>
                                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan Nomor Pegawai">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pegawai">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="lahir" name="lahir" placeholder="Masukan Tempat Lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="tgllahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="tgllahir" name="tgllahir" placeholder="Masukan Tanggal Lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="kelamin">Jensi Kelamin</label>
                                                    <select class="custom-select" id="kelamin" name="kelamin">
                                                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat Lengkap</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap, termasuk nama jalan, nomor rumah, RT/RW, kelurahan, kecamatan, dan kota/kabupaten"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="kota">Kota</label>
                                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nip">Kode Pegawai(NIP)</label>
                                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan Nomor Pegawai">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pegawai">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nip">Kode Pegawai(NIP)</label>
                                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan Nomor Pegawai">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pegawai">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nip">Kode Pegawai(NIP)</label>
                                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan Nomor Pegawai">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pegawai">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nip">Kode Pegawai(NIP)</label>
                                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan Nomor Pegawai">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pegawai">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kelamin">Jensi Kelamin</label>
                                                    <select class="custom-select" id="kelamin" name="kelamin">
                                                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                            <input type="date" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kelamin">Jensi Kelamin</label>
                                                    <select class="custom-select" id="kelamin" name="kelamin">
                                                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                            <input type="date" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nip">Kode Pegawai(NIP)</label>
                                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan Nomor Pegawai">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pegawai">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <div class="input-group">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="file" name="file">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="noktp">No KTP</label>
                                                    <input type="number" class="form-control" id="noktp" name="noktp" placeholder="Masukan No Ktp Pegawai">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="kelamin">Jensi Kelamin</label>
                                                    <select class="custom-select" id="kelamin" name="kelamin">
                                                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kelamin">Jensi Kelamin</label>
                                                    <select class="custom-select" id="kelamin" name="kelamin">
                                                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                            <input type="date" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card -->
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
@endsection


