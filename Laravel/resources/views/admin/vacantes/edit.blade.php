@extends('admin.vacantes.create')

@section('editId', $vacante->id)
@section('editArea', $vacante->area)
@section('editPuesto', $vacante->puesto)
@section('editSueldo', $vacante->sueldo)

@section('editMethod')
    {{method_field('PUT')}}
@endsection