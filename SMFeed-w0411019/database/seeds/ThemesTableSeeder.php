<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $susan = DB::table('users')->where('name','=','Susan ThemeAdmin')->first();

        DB::table('themes')->insert([
            'name' => 'Cerulean',
            'cdn_url'=>'https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css',
            'created_by'=>$susan->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('themes')->insert([
            'name' => 'Cosmo',
            'cdn_url'=>'https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css',
            'created_by'=>$susan->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('themes')->insert([
            'name' => 'Flatly',
            'cdn_url'=>'https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css',
            'created_by'=>$susan->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('themes')->insert([
            'name' => 'Minty',
            'cdn_url'=>'https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css',
            'created_by'=>$susan->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
