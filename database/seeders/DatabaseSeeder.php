<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Pegawai;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Pegawai::create([
            'id_pegawai' => 'PG100',
            'nama' => 'rahmatdani',
            'jenis_kelamin' => 'Pria',
            'no_hp' => '081354821720',
            'alamat' => 'jalan kacong dg lalang'

        ]);

        Pegawai::create([
            'id_pegawai' => 'PG101',
            'nama' => 'Aprilia Berliana',
            'jenis_kelamin' => 'Wanita',
            'no_hp' => '081354821720',
            'alamat' => 'jalan kacong dg lalang'

        ]);
    }
}
