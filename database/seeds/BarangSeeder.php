<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert(array(
            array(
                'nama_barang'   => 'Handuk',
                'harga_satuan'  => 30000,
                'stok'          => 10,
                'keterangan'    => 'Produk Terbaik',
                'id_suplier'   => 'Sup-001',
                'is_active'     => 1,
                'created_at'    => now(),
            ),
            array(
                'nama_barang'   => 'Sabun Mandi',
                'harga_satuan'  => 30000,
                'stok'          => 15,
                'keterangan'    => 'Produk Terlaris',
                'id_suplier'   => 'Sup-002',
                'is_active'     => 1,
                'created_at'    => now(),
            ),
        ));
    }
}
