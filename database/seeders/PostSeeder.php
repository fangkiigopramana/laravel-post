<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'category_id'=> 12345,
            'title'=>'Judul 1',
            'slug'=>'judul-satu',
            'excerp'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae ad perferendis ducimus maiores veniam vero ut dignissimos itaque! Eius dolorem ipsa sint deleniti eum iure harum quidem inventore fuga ad!',
            'body'=>'Loremijaijaijaijaijaijaijiaj',
        ]);        
    }
}
