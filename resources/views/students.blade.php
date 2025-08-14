<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<body>
    <h1>All Students</h1>

    <!-- Link to go back to home -->
    <a href="{{ route('homepage') }}">Back to Home</a> |
    <a href="{{ route('students.create') }}">Add New Student</a>


    <!-- Display all students in a table -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Details</th>
        </tr>

        <!-- Loop through the $students collection -->
        @foreach ($students as $student)
        <tr>
            <!-- Output student details -->
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>

            <!-- Link to view a single student's details -->
            <td><a href="{{ url('/student/'.$student->id) }}">View</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
