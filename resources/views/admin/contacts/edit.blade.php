@extends('layouts.admin')
@section('content')
<h1>Edit Contact</h1>
<form action="{{ route('admin.contacts.update', $contact) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="phone" value="{{ $contact->phone }}" placeholder="Phone">
    <input type="email" name="email" value="{{ $contact->email }}" placeholder="Email">
    <input type="text" name="address" value="{{ $contact->address }}" placeholder="Address">
    <button type="submit">Update</button>
</form>
@endsection
