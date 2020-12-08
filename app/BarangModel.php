<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang','harga_satuan','stok','keterangan','is_active',
    ];

    public function haveSuplier(){
        return $this->belongsTo(SuplierModel::class, 'id_suplier', 'id_suplier');
    }
}
