<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\LoginController;
use App\Models\Post; //menghubungkan models
use App\Models\User; //menghubungkan models
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
use App\Models\Category; //menghubungkan models

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ini terhubung dengan resource/views,

    // Route::get('/', function () {
    //     return view('welcome'); 
    // });
    
// jadi welcome itu nama file dari welcome.blade.php

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => 'home'
        
    ]);
});

Route::get('/about', function () {
    return view('about', [ //mengirimkan data ke view
        "title" => "About",
        "active" => 'about',
        "name" => "oasis",
        "email" => "tst@gmail.com",
        "image" => "oasis.jpg"
    ]);
});


// 5. MODEL COLLECTION CONTROLER
// Route::get('/blog', function () {
//     $blog_posts = [
//         [
//             "title" => "judul post pertaama",
//             "author" => "bugdi",
//             "slug" => "judul-post-pertaama",
//             "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
//             Labore quod, iste rerum, aut quos nihil voluptas consectetur cupiditate, 
//             atque voluptatem culpa! Aliquid nisi vero corporis illum aperiam quisquam 
//             repellat iure minus, numquam ratione ipsam maxime, fugiat animi placeat. 
//             Distinctio, rem rerum. Sit obcaecati nostrum id ratione minus laudantium illo, 
//             sunt autem porro, illum voluptatum quibusdam in consectetur recusandae dicta a 
//             consequatur sint quas repudiandae molestias ab! Consequatur illo quidem nulla, 
//             laboriosam dolorem ab quo modi optio ratione explicabo ipsa alias repellendus laborum 
//             cumque fuga maiores minima. Possimus, eum autem magni libero, hic saepe ex, sapiente 
//             quod velit deserunt id esse."
//         ],
//         [
//             "title" => "judul post keduan",
//             "author" => "bugdasi",
//             "slug" => "judul-post-keduan",
//             "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, 
//             inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus 
//             nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam 
//             doloremque esse illo, temporibus accusantium? Dolores facilis voluptatum totam nihil 
//             accusamus? Aut non atque fugiat magnam, nostrum, pariatur quo fugit est illo assumenda 
//             nesciunt incidunt magni ea, repellendus iusto perspiciatis recusandae ipsum nisi aliquid? 
//             Perferendis voluptatem, velit omnis sunt, assumenda, fuga harum officia iusto error vitae 
//             repudiandae corporis ab. Quae veniam delectus voluptatibus nam aperiam, illum architecto 
//             dolores praesentium laborum reiciendis aspernatur magnam recusandae consequatur officiis 
//             animi autem. Beatae pariatur nihil qui, officiis nobis, cupiditate asperiores aperiam quos 
//             voluptates tempora explicabo ullam assumenda, eius dolorem consequuntur corrupti odit modi 
//             numquam culpa commodi ratione."
//         ]
//     ];
//     return view('posts',[
//         "title" => "Posts",
//         "posts" => $blog_posts
//     ]); 
    
// });

// Route::get('/blog', function () {
//    return view('posts',[
//        "title" => "Posts",
//        "posts" => Post::all() //mengambil method all yang ada pada app/Models/Post.php. cara hubungkan post ada diatas
//    ]);
// });

Route::get('/posts', [PostController::class, 'index'] ); //dia ngambil di App/Htp/Controllers/PostController method index

//halaman single post 
//posts/{slug} namanya wildcard
// Route::get('posts/{slug}', function ($slug) {
//     $blog_posts = [
//         [
//             "title" => "judul post pertaama",
//             "author" => "bugdi",
//             "slug" => "judul-post-pertaama",
//             "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
//             Labore quod, iste rerum, aut quos nihil voluptas consectetur cupiditate, 
//             atque voluptatem culpa! Aliquid nisi vero corporis illum aperiam quisquam 
//             repellat iure minus, numquam ratione ipsam maxime, fugiat animi placeat. 
//             Distinctio, rem rerum. Sit obcaecati nostrum id ratione minus laudantium illo, 
//             sunt autem porro, illum voluptatum quibusdam in consectetur recusandae dicta a 
//             consequatur sint quas repudiandae molestias ab! Consequatur illo quidem nulla, 
//             laboriosam dolorem ab quo modi optio ratione explicabo ipsa alias repellendus laborum 
//             cumque fuga maiores minima. Possimus, eum autem magni libero, hic saepe ex, sapiente 
//             quod velit deserunt id esse."
//         ],
//         [
//             "title" => "judul post keduan",
//             "author" => "bugdasi",
//             "slug" => "judul-post-keduan",
//             "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa tempora hic, 
//             inventore exercitationem at ullam voluptate expedita error ea, fuga, dicta doloribus 
//             nostrum quidem possimus? Numquam recusandae dolore architecto quam voluptates aliquam 
//             doloremque esse illo, temporibus accusantium? Dolores facilis voluptatum totam nihil 
//             accusamus? Aut non atque fugiat magnam, nostrum, pariatur quo fugit est illo assumenda 
//             nesciunt incidunt magni ea, repellendus iusto perspiciatis recusandae ipsum nisi aliquid? 
//             Perferendis voluptatem, velit omnis sunt, assumenda, fuga harum officia iusto error vitae 
//             repudiandae corporis ab. Quae veniam delectus voluptatibus nam aperiam, illum architecto 
//             dolores praesentium laborum reiciendis aspernatur magnam recusandae consequatur officiis 
//             animi autem. Beatae pariatur nihil qui, officiis nobis, cupiditate asperiores aperiam quos 
//             voluptates tempora explicabo ullam assumenda, eius dolorem consequuntur corrupti odit modi 
//             numquam culpa commodi ratione."
//         ]
//     ];

//     $new_post=[];
//     foreach($blog_posts as $post){
//         if($post["slug"]=== $slug ){
//             $new_post = $post;
//         }
//     }

//     return view('post',[
//         "title" => "post",
//         "post" => $new_post
//     ]);    
// });

// Route::get('posts/{slug}', function ($slug) {

//     return view('post',[
//         "title" => "post",
//         "post" => Post::find($slug) //titik 2 itu artinya method static
//     ]);    
// });
Route::get('posts/{post:slug}', [PostController::class, 'show']);//mencari post dengan slug. mecari post berdasarkan slug

Route::get('/categories', function(){
    return view('categories',[
        'title'=> 'POST CAKEGOTI',
        "active" => 'categories',
        'categories'=> Category::all()
    ]);
});

// Route::get('categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title'=> "Post by Category : $category->name ",
//         "active" => 'categories',
//         'posts'=> $category->posts->load('category','author')//n+1
//         // 'posts'=> $category->posts//$category->posts harus sama dengan yg ada di \app\Models\Category.php
//         // 'category'=> $category->name
//     ]);
// });

// Route::get('/author/{author:username}', function(User $author){
//     return view('posts',[
//         'title'=> "Post by Author : $author->name",
//         "active" => 'posts',        
//         'posts'=> $author->posts->load('category','author'),

//     ]);
// });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

