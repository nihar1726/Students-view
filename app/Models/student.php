<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Allows mass assignment for these fields
    // Meaning we can do: Student::create(['name' => 'John', 'email' => 'john@example.com', 'age' => 20]);
    protected $fillable = ['name', 'email', 'age'];
}
