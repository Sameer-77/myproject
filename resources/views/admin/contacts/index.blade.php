@extends('layouts.admin')
@section('content')
<h1>All Contacts</h1>
<a href="{{ route('admin.contacts.create') }}">Add New</a>
<table>
    <tr>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    @foreach($contacts as $contact)
    <tr>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->address }}</td>
        <td>
            <a href="{{ route('admin.contacts.edit', $contact) }}">Edit</a>
            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
