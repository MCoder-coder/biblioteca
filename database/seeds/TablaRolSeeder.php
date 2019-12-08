<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
//use App\Models\Admin\Rol;
class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
