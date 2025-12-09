<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        //
        $students = Students::all();
        if($students->isEmpty()){
            return response()->json([
                "status"=> "error",
                "message"=> "No se encontraron estudiantes"
            ], 200);
        }
        return response()->json($students,200);
    }

    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'email'=> 'required|email',
            'birthdate'=> 'required',
            'course'=> 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'message'=> 'Datos incorrectos',
                'error'=> $validator->errors()
            ], 400);
        }
        $student = Students::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'birthdate'=> $request->birthdate,
            'course'=> $request->course,
        ]);
        if(!$student){
            return response()->json([
                'status'=> 'error',
                'message'=> 'Error al crear el estudiante'
            ], 500);
        }
        return response()->json($student,200);
    }

    public function show($id)
    {
        //
        $student = Students::find($id);
        if(!$student){
            return response()->json([
                'status'=> 'error',
                'message'=> 'Estudiante no encontrado'
            ],404);
        }
        return response()->json($student,200);
    }

    public function destroy($id)
    {
        //
        $student = Students::find($id);
        if(!$student){
            return response()->json([
                'status'=> 'error',
                'message'=> 'Estudiante no encontrado'
            ], 404);
        }
        $student->delete();

        return response()->json([
            'status'=> 'success',
            'message'=> 'Estudiante eliminado'
        ], 200);
    }

    public function update(Request $request, $id)
    {
        //
        $student = Students::find($id);
        if(!$student){
            return response()->json([
                'status'=> 'error',
                'message'=> 'Estudiante no encontrado'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'email'=> 'required|email',
            'birthdate'=> 'required',
            'course'=> 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status'=> 'error',
                'message'=> 'Error al validar los datos',
                'errors'=> $validator->errors()
            ], 400);
        }
        $student->name = $request->name;
        $student->email = $request->email;
        $student->birthdate = $request->birthdate;
        $student->course = $request->course;

        $student->save();
        return response()->json([
            'status'=> 'success',
            'message'=> 'Estudiante actualizado con éxito',
            'data'=> $student
        ], 200);
    }
public function updatePart(Request $request, $id)
    {
        //
        $student = Students::find($id);
        if(!$student){
            return response()->json([
                'status'=> 'error',
                'message'=> 'Estudiante no encontrado'
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'name'=> '',
            'email'=> '|email',
            'birthdate'=> '',
            'course'=> ''
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status'=> 'error',
                'message'=> 'Error al validar los datos',
                'errors'=> $validator->errors()
            ], 400);
        }
        if($request->has('name')){
            $student->name = $request->name;
        }
        if($request->has('email')){
            $student->email = $request->email;
        }
        if($request->has('birthdate')){
            $student->birthdate = $request->birthdate;
        }
        if($request->has('course')){
            $student->course = $request->course;
        }

        $student->save();
        return response()->json([
            'status'=> 'success',
            'message'=> 'Estudiante actualizado parcialmente con éxito',
            'data'=> $student
        ], 200);
    }
}