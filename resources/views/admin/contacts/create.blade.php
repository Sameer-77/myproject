@extends('layouts.admin')
@section('content')
<h1>Create Contact</h1>
<form action="{{ route('admin.contacts.store') }}" method="POST">
    @csrf
    <input type="text" name="phone" placeholder="Phone">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="address" placeholder="Address">
    <button type="submit">Save</button>
</form>
@endsection
