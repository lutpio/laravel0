<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
class PostController extends Controller
{
    public function index(){

        $posts = Post::latest();

        // if(request('search')){//eps 13
        //     $posts->where('title','like','%' . request('search') . '%')
        //     ->orWhere('body','like','%' . request('search') . '%');
        // }

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' in ' . $author->name;
        }

        return view('posts',[
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // "posts" => Post::all() // menampilkan semua post
            // "posts" => Post::latest()->get()//yg terakhir dimasukin akan diatas 
            // "posts" => Post::with(['author','category'])->latest()->get()//n+1
            // "posts" => Post::latest()->get()//n+1
            // "posts" => Post::latest()->filter()->get()//eps 13,eos
            // "posts" => Post::latest()->filter(request(['search']))->get()//eps 13,eos
            // "posts" => Post::latest()->filter(request(['search','category','author']))->get()//eps 13,eos
            // "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)//eps 13,pagination
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()//eps 13,pagination
        ]);
    }
    // public function show($slug){
    //     return view('post',[
    //         "title" => "post",
    //         "post" => Post::find($slug) //titik 2 itu artinya method static
    //     ]);   
    // }
    public function show(Post $post){//mengirimkan post, ada di route
        return view('post',[
            "title" => "post",
            "active" => 'posts',
            "post" => $post
        ]);   
    }
}
