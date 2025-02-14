<!DOCTYPE html>
<html>
<head>
    <title>CV List</title>
</head>
<body>
    <h1>CV List</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('cv.create') }}">Create New CV</a>

    <ul>
        @foreach($cvs as $cv)
            <li>
                <strong>{{ $cv->name }}</strong> - {{ $cv->email }}
                <a href="{{ route('cv.show', $cv->id) }}">View</a> |
                <a href="{{ route('cv.edit', $cv->id) }}">Edit</a> |
                <form action="{{ route('cv.destroy', $cv->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
