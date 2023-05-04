<?php

namespace Database\Seeders;

use App\Models\TypeArticle;
use Database\Factories\RoleFactory;
use Database\Factories\UserFactory;
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
        //$this->call(TypeArticleTableSeeder::class);
        //\App\Models\Article::factory(200)->create();
        //$this->call(RoleTableSeeder::class);
        \App\Models\User::factory(12)->create();
    }
}
