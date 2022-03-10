<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'=>'Jane UserAdmin',
            'email'=>'jane@example.com',
            'password'=> Hash::make('Password123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Bob Moderator',
            'email'=>'bob@example.com',
            'password'=> Hash::make('Password123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('users')->insert([
            'name'=>'Susan ThemeAdmin',
            'email'=>'susan@example.com',
            'password'=> Hash::make('Password123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
