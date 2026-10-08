<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>
    <h1>Create Course</h1>

    @include('_errors')

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        @include('course._form')
        <button type="submit">Create Course</button>
    </form>

    <br>
    <a href="{{ route('courses.index') }}">Back to Courses</a>
</body>
</html>
