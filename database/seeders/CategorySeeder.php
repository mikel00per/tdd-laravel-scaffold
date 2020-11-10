<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Admin\Posts\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
           ['name' => 'Frontend'],
           ['name' => 'Backend'],
           ['name' => 'Laravel'],
           ['name' => 'Flutter'],
           ['name' => 'Tips'],
           ['name' => 'Tutorial'],
           ['name' => 'Info']
        ];

        foreach ($categories as $category){
            Category::create($category);
        }
    }
}
