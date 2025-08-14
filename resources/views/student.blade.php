<!DOCTYPE html>
<html>
<head>
    <title>Student Info</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<body>
    
    <h2>Student Details</h2>

    <!-- Display single student details -->
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>

    <!-- Links to go back -->
    <a href="{{ route('students.record') }}">Back to All Students</a><br>
    <a href="{{ route('homepage') }}">Back to Home</a>
</body>
</html>
