<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        User::factory()->count(5)->create();
        News::factory()->count(50)->create();
        Category::factory()->create(
            [
                'name' => "Healthy"
            ]
        );
        Category::factory()->create(
            [
                'name' => "Entertainment"
            ]
        );
        Category::factory()->create(
            [
                'name' => "Sport"
            ]
        );
        Category::factory()->create(
            [
                'name' => "Beauty"
            ]
        );
        Category::factory()->create(
            [
                'name' => "Technology"
            ]
        );
        Category::factory()->create(
            [
                'name' => "Other"
            ]
        );
    }
}
