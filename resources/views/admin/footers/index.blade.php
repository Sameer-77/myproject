@extends('layouts.admin')
@section('content')
<h1>All Footers</h1>
<a href="{{ route('admin.footers.create') }}">Add New Footer</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach($footers as $footer)
    <tr>
        <td>{{ $footer->title }}</td>
        <td>{{ $footer->description }}</td>
        <td>
            <a href="{{ route('admin.footers.edit', $footer) }}">Edit</a>
            <form action="{{ route('admin.footers.destroy', $footer) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
