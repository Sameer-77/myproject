@extends('layouts.admin')

@section('content')
<h1>All Blogs</h1>
<a href="{{ route('admin.blogs.create') }}" class="btn btn-success mb-2">Add New</a>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($blogs as $blog)
    <tr>
        <td>{{ $blog->title }}</td>
        <td>
            @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" width="50">
            @endif
        </td>
        <td>
            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
