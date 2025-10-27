@extends('layouts.admin')

@section('content')
<h1>Edit Blog</h1>

<form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title', $blog->title) }}" placeholder="Blog Title" required>
    </div>

    <div>
        <label>Description:</label><br>
        <textarea name="description" rows="5" placeholder="Blog Description" required>{{ old('description', $blog->description) }}</textarea>
    </div>

    <div>
        <label>Current Image:</label><br>
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" width="100" alt="Current Image">
        @else
            <p>No image uploaded</p>
        @endif
    </div>

    <div>
        <label>Change Image:</label><br>
        <input type="file" name="image">
    </div>

    <br>
    <button type="submit">Update Blog</button>
</form>
@endsection
