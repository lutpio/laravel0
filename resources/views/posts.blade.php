@extends('layouts.main') {{-- mengambil tamplate yg ada di layout/main --}}

@section('container') {{-- mengambil  @yield('container') pada layout/main --}}
    <h1 class="text-center mb-3">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="cari" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">search</button>
                </div>
            </form>
        </div>
    </div>


    {{-- menghitung berapa jumlah postingannya  --}}
    @if($posts->count())
    <div class="card mb-3">
        @if($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'. $posts[0]->image) }}" class="img-fluid " alt="...">
            </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        @endif
        
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
          <p>
            <small class="text-muted">
                By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p>{{-- \app\Models\Post.php --}}
          <p class="card-text">{{ $posts[0]->excerpt }}</p>          

          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>

        </div>
    </div>
   

    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card h-100 " >
                    @if($post->image)                        
                        <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid " alt="...">                        
                    @else
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>{{ $post->created_at->diffForHumans() }}
                            </small>
                          </p>{{-- \app\Models\Post.php --}}
                        <p class="card-text">{{ $post->excerpt }}</p>                        
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    @else
    <p class="fs-4">no post foungd</p>
    @endif
{{-- eps 12 --}}    
    {{ $posts->links() }}
@endsection
   