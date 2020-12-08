@extends('admin.layouts.master')
@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Edit Data</h4>
        </div>
        <form action="{{ route('update_data',$data->kode_barang) }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="{{ $data->nama_barang }}">
            </div>
            <div class="form-group">
                <label>Harga Satuan</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Rp.
                        </div>
                    </div>
                    <input type="text" class="form-control currency" name="harga_satuan" id="harga_satuan" value="{{ $data->harga_satuan}}">
                </div>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="stok_barang" id="stok_barang" value="{{ $data->stok }}">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{$data->keterangan}}">
            </div>
            <button class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
</div>
@endsection
