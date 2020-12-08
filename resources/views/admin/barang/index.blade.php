@extends('admin.layouts.master')
@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Simple Table</h4>
            <a href="{{route('create_barang')}}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga Satuan</th>
                            <th>Stok</th>
                            <th>Keterangan</th>
                            <th>Suplier</th>
                            <th>Action</th>
                        </tr>
                    @php
                      $i=1;
                    @endphp
                    @foreach($data as $row)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$row->nama_barang}}</td>
                            <td>{{$row->harga_satuan}}</td>
                            <td>{{$row->stok}}</td>
                            <td>{{$row->keterangan}}</td>
                            <td>{{$row->haveSuplier->nama_suplier}}</td>
                            <td>
                              <a href="{{route('edit_data', $row->kode_barang)}}" class="btn btn-primary">Edit</a>
                              <a href="{{route('delete_data', $row->kode_barang)}}" class="btn btn-secondary">Hapus</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
