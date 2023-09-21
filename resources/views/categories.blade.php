@extends('layouts.main') {{-- mengambil tamplate yg ada di layout/main --}}

@section('container') {{-- mengambil  @yield('container') pada layout/main --}}
    
    @foreach ($categories as $category){{-- mengambil dari routes --}}
       <ul>
            <li>
                <h2><a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach

@endsection
   