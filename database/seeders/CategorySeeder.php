<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Affix Play']);
        Category::create(['name' => 'Redex']);
        Category::create(['name' => 'Deportes']);
        Category::create(['name' => 'En Vivo']);
        Category::create(['name' => 'Reportajes Especiales']);
        Category::create(['name' => 'Ecosistemas']);
        Category::create(['name' => 'Noticias']);
    }
}
