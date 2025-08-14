<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <h1>Welcome to Student Portal</h1>

    <!-- Link to the "All Students" page using the named route 'students.record' -->
    <a href="{{ route('students.record') }}">View All Students</a><br>
</body>
</html>
