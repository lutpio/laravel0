@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post categorie</h1>
    
</div>
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive small">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">create new categories</a>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>            
            <th scope="col">Action</th>              
        </tr>
        </thead>
        <tbody>
               
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            
            <td>
            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info "><i class="bi bi-eye"></i></a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning "><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('yakin?')">
                    <i class="bi bi-x-circle"></i>
                </button>
            </form>
        </td>              
        </tr>            
        @endforeach
        </tbody>
    </table>
</div>
@endsection

