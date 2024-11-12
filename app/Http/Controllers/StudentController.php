<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        $data = [
            'message' => 'Get all student',
            'data' => $student
        ];
        return response()->json($data, 200);
    }

    public function store(Request $request) 
    { 
       $validator = Validator::make($request->all(), [ 
        'nama' => 'required', 
        'nim' => 'numeric|required', 
        'email' => 'email|required',  
        'jurusan' => 'jurusan|required', 
       ]); 
        if ($validator->fails()) { 
            return response()->json([ 
                'message' => 'Validation errors', 
                'errors' => $validator->errors(), 
            ], 422); 
        } 
 
        $students = Student::create($request->all()); 
 
        $data = [ 
            'message' => 'Student is create success!!', 
            'data' => $students, 
        ]; 
 
        return response()->json($data, 201); 
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if ($student) {
            $input = [
                'id' => $request->id ?? $student->id,
                'nama' => $request->nama ?? $student->nama,
                'nim' => $request->nim ?? $student->nim,
                'email' => $request->email ?? $student->email,
                'jurusan' => $request->jurusan ?? $student->jurusan,
            ];

            $student->update($input);

            $data = [
                'message' => 'Student is updated',
                'data' => $student,
            ];

            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Student not found',
            ];

            return response()->json($data, 404);
        }
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if ($student) {
            $student->delete();

            $data = [
                'message' => 'Student is deleted',
            ];

            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Student not found',
            ];

            return response()->json($data, 404);
        }
    }
    public function show($id)
    {

        $student = Student::find($id);

        if ($student) {
            $data = [
                'message' => 'Get student details',
                'data' => $student
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'student not found'
            ];
            return response()->json($data, 404);
        }
    }
}
