<?php

use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suplier')->insert(array(
            array(
                'id_suplier'   => 'Sup-001',
                'nama_suplier'  => 'PT. Tirta',
                'no_telp'       => '02100013',
                'alamat'    => 'Bogor',
            ),
            array(
                'id_suplier'   => 'Sup-002',
                'nama_suplier'  => 'PT. Sukses Bersama',
                'no_telp'       => '02298698',
                'alamat'    => 'Padalarang',
            ),
        ));
    }
}
