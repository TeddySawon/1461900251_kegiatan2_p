<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new mahasiswa();
        $mhs1->nbi = 1461900555;
        $mhs1->nama = "Aji Purnomo";
        $mhs1->save();

        $mhs2 = new mahasiswa();
        $mhs2->nbi = 1461900111;
        $mhs2->nama = "Bambang sungagung";
        $mhs2->save();

        $mhs3 = new mahasiswa();
        $mhs3->nbi = 1461900012;
        $mhs3->nama = "Agung pratama";
        $mhs3->save();

    }
}
