<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post{
    private static $blog_posts = [
        [
            "title" => "judul post pertaama",
            "author" => "bugdi",
            "slug" => "judul-post-pertaama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quod, iste rerum, aut quos nihil voluptas consectetur cupiditate, atque voluptatem culpa! Aliquid nisi vero corporis illum aperiam quisquam repellat iure minus, numquam ratione ipsam maxime, fugiat animi placeat. Distinctio, rem rerum. Sit obcaecati nostrum id ratione minus laudantium illo, sunt autem porro, illum voluptatum quibusdam in consectetur recusandae dicta a consequatur sint quas repudiandae molestias ab! Consequatur illo quidem nulla, laboriosam dolorem ab quo modi optio ratione explicabo ipsa alias repellendus laborum cumque fuga maiores minima. Possimus, eum autem magni libero, hic saepe ex, sapiente quod velit deserunt id esse."
        ],
        [
            "title" => "judul post keduan",
            "author" => "bugdasi",
            "slug" => "judul-post-keduan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam doloremque esse illo, temporibus accusantium? Dolores facilis voluptatum totam nihil accusamus? Aut non atque fugiat magnam, nostrum, pariatur quo fugit est illo assumenda nesciunt incidunt magni ea, repellendus iusto perspiciatis recusandae ipsum nisi aliquid? Perferendis voluptatem, velit omnis sunt, assumenda, fuga harum officia iusto error vitae repudiandae corporis ab. Quae veniam delectus voluptatibus nam aperiam, illum architecto dolores praesentium laborum reiciendis aspernatur magnam recusandae consequatur officiis animi autem. Beatae pariatur nihil qui, officiis nobis, cupiditate asperiores aperiam quos voluptates tempora explicabo ullam assumenda, eius dolorem consequuntur corrupti odit modi numquam culpa commodi ratione."
        ]
    ];

    // public static function all(){
    //     return self::$blog_posts; //butuh keyword self karena blog_post itu static
    // }

    public static function all(){
        return collect(self::$blog_posts); //butuh keyword self karena blog_post itu static
    }

    // public static function find($slug){
    //     $posts = self::$blog_posts; //mengambil $blog_posts

    //     $post=[]; //pencarian post berdasarkan slug
    //     foreach($posts as $p){
    //         if($p["slug"]=== $slug ){
    //             $post = $p;
    //         }
    //     }

    //     return $post;

    // }
    public static function find($slug){
        $posts = static::all(); //mengambil $blog_posts    

        return $posts->firstWhere('slug', $slug);//cari dimana slug(di array) sama dengan slug(parameter)

    }
}
