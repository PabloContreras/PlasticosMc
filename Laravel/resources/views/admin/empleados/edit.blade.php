@extends('admin.empleados.create')

@section('editId', $empleado->id)
@section('editNombre', $empleado->name)
@section('editEmail', $empleado->email)
@section('editEmpresa', $empleado->empresa)
@section('editArea', $empleado->area)
@section('editPuestoIntranet', $empleado->puesto_intranet)
@section('editPuestoReal', $empleado->puesto_real)

@section('editMethod')
    {{method_field('PUT')}}
@endsection