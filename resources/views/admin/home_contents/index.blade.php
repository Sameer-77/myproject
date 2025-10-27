@extends('layouts.admin')

@section('content')
<h1>Home Contents</h1>
<a href="{{ route('admin.home_contents.create') }}" class="btn btn-success mb-3">Add New</a>

<table class="table">
    <thead><tr><th>Key</th><th>Title</th><th>Actions</th></tr></thead>
    <tbody>
    @foreach($contents as $c)
        <tr>
            <td>{{ $c->key }}</td>
            <td>{{ $c->title }}</td>
            <td>
                <a href="{{ route('admin.home_contents.edit', $c->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form method="POST" action="{{ route('admin.home_contents.destroy', $c->id) }}" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $contents->links() }}
@endsection
