@extends('layouts.admin')
@section('content')
<h1>Create Blog</h1>
<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="description" placeholder="Description"></textarea>
    <input type="file" name="image">
    <button type="submit">Save</button>
</form>
@endsection