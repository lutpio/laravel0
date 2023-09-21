@extends('layouts.main') {{-- mengambil tamplate yg ada di layout/main --}}

@section('container') {{-- mengambil  @yield('container') pada layout/main --}}
    <article>
        <h2>{{ $post->title }}</h2>
        @if($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid " alt="...">
            </div>
        @else
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid " alt="...">
        @endif
        <p>By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>{{-- \app\Models\Post.php mengambil pada file post.php fungsi categoru()--}}
        {{-- <h2>{{ $post["title"] }}</h2> --}}
        {{-- <h5>{{ $post["author"] }}</h5> --}}
        {{-- <p>{{ $post["body"] }}</p> --}}
        {{-- {!! $post->body !!} --}}
        {{ $post->body }}
    </article>

    <a href="/blog" class="d-block mt-3">kembali</a>
@endsection
   {{-- https://www.youtube.com/watch?v=9jrD0wcfq1g&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=4 --}}