<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <p><strong>ID:</strong> {{ $student->id }}</p>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth?->format('Y-m-d') }}</p>
    <p><strong>Created:</strong> {{ $student->created_at }}</p>
    <p><strong>Updated:</strong> {{ $student->updated_at }}</p>

    <a href="{{ route('students.edit', $student->id) }}">Edit Student</a>
    <br><br>
    <a href="{{ route('students.index') }}">Back to Students</a>
</body>
</html>
