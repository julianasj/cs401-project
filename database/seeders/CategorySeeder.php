<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'News',
                'slug' => 'news',
                'description' => 'Articles and reports of important events..',
            ],
            [
                'category_name' => 'Review',
                'slug' => 'review',
                'description' => 'Critical appraisal of a text.',
            ],
            [
                'category_name' => 'Podcast',
                'slug' => 'podcast',
                'description' => 'Media of episodes on specific theme.',
            ],
            [
                'category_name' => 'Opinion',
                'slug' => 'opinion',
                'description' => 'Views, standpoints, and the argument behind them.',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['category_name' => $category['category_name']],
                [
                    'slug' => $category['slug'],
                    'description' => $category['description'],
                ]
            );
        }
    }
}
