@extends('layouts.admin')
@section('content')
<h1>Add Home Content</h1>

<form action="{{ route('admin.home_contents.store') }}" method="POST">
    @csrf
    <div>
        <label>Heading</label><br>
        <input type="text" name="heading" placeholder="Heading" required>
    </div>
    <div>
        <label>Description</label><br>
        <textarea name="description" rows="4" placeholder="Description" required></textarea>
    </div>
    <button type="submit">Save</button>
</form>
@endsection
