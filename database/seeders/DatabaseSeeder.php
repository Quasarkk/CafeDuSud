<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ArticleSeeder::class,
            TagSeeder::class,
            ArticleTagSeeder::class,
            CommentSeeder::class,
            NewsletterSeeder::class,
            MessageSeeder::class,
            UserSeeder::class,
        ]);

    }
}
