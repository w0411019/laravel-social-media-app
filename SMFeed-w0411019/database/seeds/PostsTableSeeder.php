<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jane = DB::table('users')->where('name','=','Jane UserAdmin')->first();

        DB::table('posts')->insert([
            'title'=>'Test post',
            'content'=>'Test content',
            'image'=>'https://images.unsplash.com/photo-1637912727107-c0b42b8440c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'created_by'=>$jane->id
        ]);

        DB::table('posts')->insert([
            'title'=>'Test post2',
            'content'=>'Test content2',
            'image'=>'https://images.unsplash.com/photo-1637864661032-4c622252aff9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'created_by'=>$jane->id
        ]);
    }
}
