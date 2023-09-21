
@extends('layouts.main') {{-- mengambil tamplate yg ada di layout/main --}}

@section('container') {{-- mengambil  @yield('container') pada layout/main --}}
    
    <h1>ABOUT</h1>
    <p>{{ $name }}</p> {{-- $name mengambil di routes web.php --}}
    <p>{{ $email }}</p> {{-- {{ fungsi kurung kurawal kyk echo, bawaan dari blade }} --}}
    <img src="img/{{ $image }}" width="100"> 

@endsection