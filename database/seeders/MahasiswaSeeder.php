<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->INSERT([
            'nama' => 'Bagus Untoro',
            'jenisKelamin' => 'laki',
            'noTelepon' => '081907150504',
        ]);
    }
}
