@extends('layouts.admin')
@section('content')
<h1>Add New Footer</h1>

<form action="{{ route('admin.footers.store') }}" method="POST">
    @csrf
    <div>
        <label>Title</label><br>
        <input type="text" name="title" placeholder="Footer Title" required>
    </div>
    <div>
        <label>Description</label><br>
        <textarea name="description" rows="4" placeholder="Footer Description" required></textarea>
    </div>
    <button type="submit">Save</button>
</form>
@endsection
