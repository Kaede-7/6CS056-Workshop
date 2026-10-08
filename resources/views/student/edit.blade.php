<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    @include('_errors')

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('student._form')
        <button type="submit">Update Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>
</body>
</html>
