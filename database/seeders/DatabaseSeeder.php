<?php

namespace Database\Seeders;

use App\Models\TypeArticle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeArticleTableSeeder::class);
        \App\Models\Article::factory(1000)->create();
    }
}