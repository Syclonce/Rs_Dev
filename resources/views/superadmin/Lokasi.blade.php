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
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table id='example2' class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>kode</th>
                                        <th>Nama Provinsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($provinsi as $prov)
                                    <tr>
                                        <td>{{ $prov->kode }}</td>
                                        <td>{{ $prov->name }}</td>
                                        <!-- Add more table cells for other columns as needed -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table id='example3' class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>kode</th>
                                        <th>Nama Kabupaten</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kabupaten as $kab)
                                    <tr>
                                        <td>{{ $kab->provinsi->name }}</td>
                                        <td>{{ $kab->name }}</td>
                                        <!-- Add more table cells for other columns as needed -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table id='example4' class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>kode</th>
                                        <th>Wilayah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($wilayah as $wil)
                                    <tr>
                                        <td>{{ $wil->kabupaten->name }}</td>
                                        <td>{{ $wil->name }}</td>
                                        <!-- Add more table cells for other columns as needed -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <table id='example5' class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>kode</th>
                                        <th>Desa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($desa as $des)
                                    <tr>
                                        <td>{{ $des->wilayah->name }}</td>
                                        <td>{{ $des->name }}</td>
                                        <!-- Add more table cells for other columns as needed -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Bank</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('superadmin.bahasa') }}" method="POST">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama .">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ket">Keterangan</label>
                                    <input type="text" class="form-control" id="ket" name="ket" placeholder="Masukan Nama .">
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
</div> --}}
@endsection


