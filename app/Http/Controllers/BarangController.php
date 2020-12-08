<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangModel;

class BarangController extends Controller
{
    public function index(){
        $data = BarangModel::all()
                ->where('is_active','1');
        return view('admin.barang.index', compact('data'));
    }

    public function createData(){
        return view('admin.barang.tambah');
    }

    public function postData(Request $request, BarangModel $barangModel){

        $simpan = $barangModel->create([
            'nama_barang' => $request->nama_barang,
            'harga_satuan'=> $request->harga_satuan,
            'stok'          => $request->stok_barang,
            'keterangan'    => $request->keterangan,
            'is_active'     => 1,
        ]);

        if(!$simpan->exists){
            return redirect()->route('tampil_barang')->with('error','data gagal disimpan');
        }

        return redirect()->route('tampil_barang')->with('success','data berhasil disimpan');
    }

    public function editData($id){
        $data = BarangModel::where('kode_barang',$id)->first();
        return view('admin.barang.edit', compact('data'));
    }

    public function updateData($id,BarangModel $barangModel, Request $request){
        
        $simpan = $barangModel->where('kode_barang',$id)->update([
            'nama_barang' => $request->nama_barang,
            'harga_satuan'=> $request->harga_satuan,
            'stok'          => $request->stok_barang,
            'keterangan'    => $request->keterangan,
        ]);
        if(!$simpan){
            return redirect()->route('tampil_barang')->with('error','data gagal di update');
        }

        return redirect()->route('tampil_barang')->with('success','data berhasil di update');
    }

    public function softDelete($id, BarangModel $barangModel){

        $simpan = $barangModel->where('kode_barang',$id)->update([
            'is_active' => '0',
        ]);

        if(!$simpan){
            return redirect()->route('tampil_barang')->with('error','data gagal di dihapus');
        }

        return redirect()->route('tampil_barang')->with('success','data berhasil di hapus');
    }
}
