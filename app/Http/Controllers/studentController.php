<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Home page method
    public function home()
    {
        return view('home'); // Loads resources/views/home.blade.php
    }

    // Show all students
    public function index()
    {
        // Get all records from 'students' table
        $students = Student::all();

        // Pass data to the 'students' view
        return view('students', compact('students'));
    }

    // Show details of a single student
    public function show($id)
    {
        // Find student by ID, or return 404 if not found
        $student = Student::findOrFail($id);

        // Pass the student to the 'student' view
        return view('student', compact('student'));
    }

    // Redirect to home page using route name
    public function redirectToHome()
    {
        return redirect()->route('homepage');
    }

    // Show the form
public function create()
{
    return view('form');
}

// Store form data into database
public function store(Request $request)
{
    // Validate form input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'age' => 'required|integer|min:1',
    ]);

    // Create new student in the database
    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'age' => $request->age,
    ]);

    // Redirect to all students page
    return redirect()->route('students.record')->with('success', 'Student added successfully!');
}

}
?>