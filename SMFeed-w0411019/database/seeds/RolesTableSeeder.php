<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'=>'User Administrator',
            'description'=>'Administrator of users',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name'=>'Moderator',
            'description'=>'Moderator of users',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name'=>'Theme Manager',
            'description'=>'Manager of themes',
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
