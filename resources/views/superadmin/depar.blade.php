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
                <div class="row">
                    <div class="card-body">
                    <table  class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID Poli</th>
                            <th>Nama Departemen</th>
                            <th>Jenis Departemen</th>
                            <th>Nama Departemen</th>
                            <th>Maping BPJS</th>
                            <th>Kode IHS</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($departemenas as $departemens)
                            <tr>
                                <td> {{ $departemens->inisial_poli }} </td>
                                <td> {{ $departemens->nama }} </td>
                                <td> {{ $departemens->jenis_departemen }} </td>
                                <td> {{ $departemens->nama_bidang }} </td>
                                <td> {{ $departemens->bpjs_maping }} </td>
                                <td> {{ $departemens->kode_ihs }} </td>
                                <td>
                                    <a href="{{ route('superadmin.bank', ['id' => $departemens->id]) }}" class="btn btn-primary" method="POST">
                                        Delete
                                    </a>
                                </td>
                                <!-- Add more table cells for other columns as needed -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Departemen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('superadmin.departemen') }}" method="POST">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Departemen / Poli</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Kode">Kode Departemen / Poli</label>
                                    <input type="text" class="form-control" id="Kode" name="Kode" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bidang">Grup Departemen</label>
                            <select class="custom-select" id="bidang" name="bidang">
                                <option selected disabled value="">Pilih Jenis Kelamin</option>
                                @foreach ($bidangs as $bidangs)
                                    <option value="{{ $bidangs->id }}">{{ $bidangs->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="jenis">Jensi Departemen</label>
                                    <select class="custom-select" id="jenis" name="jenis">
                                        <option selected disabled value="">Pilih Jenis Departemen</option>
                                        <option value="Revenue Center">Revenue Center</option>
                                        <option value="Cost Center">Cost Center</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="display">Text Display Layar</label>
                                    <input type="text" class="form-control" id="display" name="display" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Kodeindex">Kode Index Touchscreen</label>
                                    <input type="number" class="form-control" id="Kodeindex" name="Kodeindex" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coa">Coa Biaya</label>
                                    <input type="numeber" class="form-control" id="coa" name="coa" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coaper">Coa Persediaan</label>
                                    <input type="number" class="form-control" id="coaper" name="coaper" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coahhp">Coa HPP</label>
                                    <input type="numeber" class="form-control" id="coahhp" name="coahhp" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coaunit">Coa Unit</label>
                                    <input type="number" class="form-control" id="coaunit" name="coaunit" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coapi">Coa Piutang</label>
                                    <input type="numeber" class="form-control" id="coapi" name="coapi" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coapen">Coa Pendapatan</label>
                                    <input type="number" class="form-control" id="coapen" name="coapen" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bpjs">BPJS Maping</label>
                                    <input type="text" class="form-control" id="bpjs" name="bpjs" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="casemix">Casemix Group</label>
                                    <input type="text" class="form-control" id="casemix" name="casemix" placeholder="Masukan Kode Departemen">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ihs">Kode IHS</label>
                                    <input type="text" class="form-control" id="ihs" name="ihs" placeholder="Masukan Kode Departemen">
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


