<?php

use App\Models\Libro;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use\Illuminate\Support\Testing\Fakes;


class TablaLibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     //   DB::table('libro')->insert([
//            'titulo'=>'biblioteca de babilonia',
//
//            'autor' => 'borges',
//            'cantidad'=>'1',
//            'editorial'=>'cortaza',




       // ]);

        factory(Libro::class)->times(50)->create();
    }
}
