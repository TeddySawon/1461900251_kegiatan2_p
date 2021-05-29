<?php

namespace Database\Seeders;

use App\Models\matkul;
use Illuminate\Database\Seeder;

class matkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mat1 = new matkul();
        $mat1->matkul = "Ukur Tanah";
        $mat1->nbi = 1461900111;
        $mat1->save();

        $mat2 = new matkul();
        $mat2->matkul = "Mekanika Teknik";
        $mat2->nbi = 1461900012;
        $mat2->save();

        $mat3 = new matkul();
        $mat3->matkul = "Gambar Teknik";
        $mat3->nbi = 1461900555;
        $mat3->save();

    }
}
