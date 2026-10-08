<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    @include('_errors')

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('course._form')
        <button type="submit">Update Course</button>
    </form>

    <br>
    <a href="{{ route('courses.index') }}">Back to Courses</a>
</body>
</html>
