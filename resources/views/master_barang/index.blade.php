<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif
    <a href="{{ route('create_barang') }}"> Tambah Data </a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
            <th>Stok</th>
            <th>Keterangan</th>
            <th>Supplier</th>
            <th>Aksi</th>
        </tr>
        @php
         $i = 1;
        @endphp
        @foreach($data as $row)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $row->nama_barang }}</td>
            <td>{{ $row->harga_satuan }}</td>
            <td>{{ $row->stok }}</td>
            <td>{{ $row->keterangan }}</td>
            <td>{{ $row->id_suplier }}</td>
            <td>
                <a href="{{route('edit_data', $row->kode_barang)}}">Edit</a> &nbsp <a href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>