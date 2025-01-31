<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 6; $i++) {
                    DB::table("articles")->insert([
            'title'=> Str::random(10),
            'author'=>Str::random(10),
            'description'=>Str::random(100),
            'content'=> Str::random(1000),
            'pdf'=> Str::random(100).".pdf",
            'image'=> Str::random(100).".png",
            'pages'=> 100,
            'genre_id'=> 1,
            'clasification_id'=> 1,
        ]);
        }

        //
    }
}
