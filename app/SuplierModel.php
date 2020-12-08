<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuplierModel extends Model
{
    protected $table = 'suplier';

    public function hasManyProduct(){
        return $this->hasMany(BarangModel::class, 'id_suplier', 'id_suplier');
    }
}
