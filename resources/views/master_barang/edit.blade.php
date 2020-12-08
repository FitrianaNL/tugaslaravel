<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
</head>
<body>
    <form action="{{ route('update_data',$data->kode_barang) }}" method="post">
        @csrf
        Nama Barang 
        <input type="text" name="nama_barang" id="nama_barang" value="{{ $data->nama_barang }}"> <br><br>
        Harga Satuan
        <input type="number" name="harga_satuan" id="harga_satuan" value="{{ $data->harga_satuan}}"><br><br>
        Stok
        <input type="number" name="stok_barang" id="stok_barang" value="{{ $data->stok }}"><br><br>
        Keterangan
        <input type="text" name="keterangan" id="keterangan" value="{{$data->keterangan}}"><br><br>

        <input type="button" value="Kembali">
        <input type="submit" value="Simpan">
    </form>
</body>
</html>