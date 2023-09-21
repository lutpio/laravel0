<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create(); //generate user random, buka CONFIG/APP.PHP, BUKA 

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'lutfi',
        //     'email' => 'lutfi@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        
        // User::create([
        //     'name' => 'udin',
        //     'email' => 'udin@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        
        Category::create([
            'name' => 'Program',
            'slug' => 'program'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create(); //generate user random, buka CONFIG/APP.PHP, BUKA 

        // Post::create([
        //     'title' => 'Post pertama',
        //     'slug' => 'post-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam doloremque esse illo, temporibus accusantium? Dolores facilis voluptatum totam nihil accusamus? Aut non atque fugiat magnam, nostrum, pariatur quo fugit est illo assumenda nesciunt incidunt magni ea, repellendus iusto perspiciatis recusandae ipsum nisi aliquid? Perferendis voluptatem, velit omnis sunt, assumenda, fuga harum officia iusto error vitae repudiandae corporis ab. Quae veniam delectus voluptatibus nam aperiam, illum architecto dolores praesentium laborum reiciendis aspernatur magnam recusandae consequatur officiis animi autem. Beatae pariatur nihil qui, officiis nobis, cupiditate asperiores aperiam quos voluptates tempora explicabo ullam assumenda, eius dolorem consequuntur corrupti odit modi numquam culpa commodi ratione.'
        // ]);

        // Post::create([
        //     'title' => 'Post kedua',
        //     'slug' => 'post-kedua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'excerpt'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam doloremque esse illo, temporibus accusantium? Dolores facilis voluptatum totam nihil accusamus? Aut non atque fugiat magnam, nostrum, pariatur quo fugit est illo assumenda nesciunt incidunt magni ea, repellendus iusto perspiciatis recusandae ipsum nisi aliquid? Perferendis voluptatem, velit omnis sunt, assumenda, fuga harum officia iusto error vitae repudiandae corporis ab. Quae veniam delectus voluptatibus nam aperiam, illum architecto dolores praesentium laborum reiciendis aspernatur magnam recusandae consequatur officiis animi autem. Beatae pariatur nihil qui, officiis nobis, cupiditate asperiores aperiam quos voluptates tempora explicabo ullam assumenda, eius dolorem consequuntur corrupti odit modi numquam culpa commodi ratione.'
        // ]);

        // Post::create([
        //     'title' => 'Post ketiga',
        //     'slug' => 'post-ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam doloremque esse illo, temporibus accusantium? Dolores facilis voluptatum totam nihil accusamus? Aut non atque fugiat magnam, nostrum, pariatur quo fugit est illo assumenda nesciunt incidunt magni ea, repellendus iusto perspiciatis recusandae ipsum nisi aliquid? Perferendis voluptatem, velit omnis sunt, assumenda, fuga harum officia iusto error vitae repudiandae corporis ab. Quae veniam delectus voluptatibus nam aperiam, illum architecto dolores praesentium laborum reiciendis aspernatur magnam recusandae consequatur officiis animi autem. Beatae pariatur nihil qui, officiis nobis, cupiditate asperiores aperiam quos voluptates tempora explicabo ullam assumenda, eius dolorem consequuntur corrupti odit modi numquam culpa commodi ratione.'
        // ]);

    }
}
