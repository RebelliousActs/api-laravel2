@extends('layouts.app')
@section('title', 'Lista de alumnos')
@section('content')
    <h1>Lista de Alumnos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
                <th>Curso</th>
                <th>Creado</th>
                <th>Actualizado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->birthdate }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->created_at?->format('d/m/Y H:i') }}</td>
                    <td>{{ $student->updated_at?->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
    </table>
@endsection