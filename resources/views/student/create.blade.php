<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    @include('_errors')

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('student._form')
        <button type="submit">Create Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Students</a>
</body>
</html>
