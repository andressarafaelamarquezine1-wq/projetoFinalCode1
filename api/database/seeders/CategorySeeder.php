<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'cubo 2x2', 'slug' => 'cubo-2x2'],
            ['name' => 'cubo 3x3', 'slug' => 'cubo-3x3'],
            ['name' => 'cubo 4x4', 'slug' => 'cubo-4x4'],
            ['name' => 'Megaminx', 'slug' => 'megaminx'],
            ['name' => 'Pyraminx', 'slug' => 'pyraminx'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category +[
                'slug' => $category['slug'],
                'name' => $category['name']
            ]);
        }
    }
}
