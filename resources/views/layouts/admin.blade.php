<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<nav class="mb-4">
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary btn-sm">Blogs</a>
    <a href="{{ route('admin.home_contents.index') }}" class="btn btn-secondary btn-sm">Home Contents</a>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-info btn-sm">Contacts</a>
    <a href="{{ route('admin.footers.index') }}" class="btn btn-dark btn-sm">Footer</a>
    <form method="POST" action="{{ route('logout') }}" class="d-inline float-end">
        @csrf
        <button class="btn btn-danger btn-sm">Logout</button>
    </form>
</nav>

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
</div>

</body>
</html>
