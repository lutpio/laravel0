@extends('layouts.main') {{-- mengambil tamplate yg ada di layout/main --}}

@section('container') {{-- mengambil  @yield('container') pada layout/main --}}
    
    @foreach ($posts as $post){{-- mengambil dari routes --}}
        <article class="mb-5">    
            <h2>
                {{-- <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a> --}}
                {{-- <a href="/posts/{{ $post->id }}">{{ $post->title }}</a> --}}
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            {{-- <h5>{{ $post->author }}</h5> --}}
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection
   