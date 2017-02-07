<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog1 = new Blog();
        $blog1->title = 'I Love Rabia';
        $blog1->body = 'I Love Rabia, I Love RabiaI Love RabiaI Love Rabia';
        $blog1->save();

        $blog2 = new Blog();
		$blog2->title = 'I am good Looking $ she likes me';
        $blog2->body = 'I am good Looking $ she likes meI am good Looking $ she likes me';
        $blog2->save();
    }
}
