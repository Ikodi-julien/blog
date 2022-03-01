<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['javascript', 'php', 'methodologie', 'devops', 'css-scss',];

        foreach ($categories as $category) {
            DB::table('categories')->insert(['name' => $category]);
        }
    }
}
