<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <p><strong>ID:</strong> {{ $course->id }}</p>
    <p><strong>Name:</strong> {{ $course->name }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
    <p><strong>Fee:</strong> {{ number_format($course->fee, 2) }}</p>
    <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
    <p><strong>Active:</strong> {{ $course->is_active ? 'Yes' : 'No' }}</p>
    <p><strong>Created:</strong> {{ $course->created_at }}</p>
    <p><strong>Updated:</strong> {{ $course->updated_at }}</p>

    <a href="{{ route('courses.edit', $course->id) }}">Edit Course</a>
    <br><br>
    <a href="{{ route('courses.index') }}">Back to Courses</a>
</body>
</html>
