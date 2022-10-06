<?php

namespace App\Http\Controllers;

use App\Models\Student;
use DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function index()
    {

        if (auth()->user()->role == 'Administrator') {
            $students = Student::latest()->paginate(5);
            return view('students.index', compact('students'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } else {
            return back();
        }
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'suhu' => 'required',
            'vaksin' => 'required',
            'covid' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Data Berhasil Dibuat!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'suhu' => 'required',
            'vaksin' => 'required',
            'covid' => 'required'
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Data Berhasil Diupdate!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Data Berhasil Dihapus!');
    }
}
