@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Admin Dashboard</h1>

    <div class="row">
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary w-100">Manage Blogs</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary w-100">Manage Contacts</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.home_contents.index') }}" class="btn btn-primary w-100">Manage Home Contents</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('admin.footers.index') }}" class="btn btn-primary w-100">Manage Footers</a>
        </div>
    </div>

    <div class="text-center mt-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>
@endsection
