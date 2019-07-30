@extends('admin.admins.create')

@section('editId', $admin->id)
@section('editNombre', $admin->name)
@section('editEmail', $admin->email)

@section('editMethod')
    {{method_field('PUT')}}
@endsection