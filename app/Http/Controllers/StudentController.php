<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
       public function index()
    {
        $students = auth()->user()->students()->orderBy('created_at', 'desc')->paginate();
        return view('students.index')->with('students',$students);
    }

      public function create()
    {
        $user_id = auth()->user()->id;
        return view('students.create', compact('user_id'));
    }

      public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Estudante adicionado com sucesso!');
    }

      public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students',$student);
    }

     public function edit($id)
    {
        $student = Student::find($id);
        return view ('students.edit')->with('students', $student);
    }

     public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Estudante Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Estudante excluído com sucesso!');
    }
}
