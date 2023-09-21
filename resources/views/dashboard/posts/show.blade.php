@extends('dashboard.layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    @if($post->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid mt-3" alt="...">
        </div>
    @else
        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="...">
    @endif
    <p>By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>{{-- \app\Models\Post.php mengambil pada file post.php fungsi categoru()--}}
    {{-- <h2>{{ $post["title"] }}</h2> --}}
    {{-- <h5>{{ $post["author"] }}</h5> --}}
    {{-- <p>{{ $post["body"] }}</p> --}}
    {!! $post->body !!}
    {{-- {{ $post->body }} --}}
</article>

<a href="/dashboard/posts" class="d-block mt-3">kembali</a>
@endsection