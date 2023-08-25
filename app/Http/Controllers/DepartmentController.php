<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function index(): View
    {
        return view ('departments.index');
    }

    public function show(Request $request)
{
    $name = $request->query('name');
    $students = Student::where('department', $name)->get();
    return view('departments.details')->with('students', $students);
    }

}
