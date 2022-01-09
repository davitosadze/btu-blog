<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => 1,
            'author' => "Davit Osadze",
            'comment' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'author' => "Other",
            'comment' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        ]);

        DB::table('comments')->insert([
            'post_id' => 2,
            'author' => "Laravel Developer",
            'comment' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        ]);

        DB::table('comments')->insert([
            'post_id' => 3,
            'author' => "React Developer",
            'comment' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        ]);

    
    }
}
