<?php

use Illuminate\Database\Seeder;
use App\category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = new category();
        $cat1->slug = 'laravel';
        $cat1->name = 'Laravel';
        $cat1->save();

        $cat2 = new category();
        $cat2->slug = 'rabiakhan';
        $cat2->name = 'Rabia Khan';
        $cat2->save();
    }
}
