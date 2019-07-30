@extends('admin.empleados.create')

@section('editId', $empleado->id)
@section('editNombre', $empleado->name)
@section('editEmail', $empleado->email)

@section('editMethod')
    {{method_field('PUT')}}
@endsection