<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = DB::table('roles')->where('name','=','User Administrator')->first();
        $mod = DB::table('roles')->where('name','=','Moderator')->first();
        $themeMan = DB::table('roles')->where('name','=','Theme Manager')->first();


        $jane = DB::table('users')->where('name','=','Jane UserAdmin')->first();
        $bob = DB::table('users')->where('name','=','Bob Moderator')->first();
        $susan = DB::table('users')->where('name','=','Susan ThemeAdmin')->first();

        DB::table('role_user')->insert([
            'user_id'=>$jane->id,
            'role_id'=>$userAdmin->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id'=>$bob->id,
            'role_id'=>$mod->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('role_user')->insert([
            'user_id'=>$susan->id,
            'role_id'=>$themeMan->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

    }
}
