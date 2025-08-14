<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <h1>Add New Student</h1>

    <!-- Display validation errors if any -->
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form to add a new student -->
    <form action="{{ route('students.store') }}" method="POST">
        @csrf <!-- Laravel CSRF protection token -->

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value="{{ old('age') }}"><br><br>

        <button type="submit">Save Student</button>
    </form>

    <br>
    <a href="{{ route('students.record') }}">Back to All Students</a>
</body>
</html>
