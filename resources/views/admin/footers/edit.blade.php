@extends('layouts.admin')
@section('content')
<h1>Edit Footer</h1>

<form action="{{ route('admin.footers.update', $footer) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Title</label><br>
        <input type="text" name="title" value="{{ old('title', $footer->title) }}" required>
    </div>
    <div>
        <label>Description</label><br>
        <textarea name="description" rows="4" required>{{ old('description', $footer->description) }}</textarea>
    </div>

    <button type="submit">Update</button>
</form>
@endsection
