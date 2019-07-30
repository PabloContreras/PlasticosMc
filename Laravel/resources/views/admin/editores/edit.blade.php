@extends('admin.editores.create')

@section('editId', $editor->id)
@section('editNombre', $editor->name)
@section('editEmail', $editor->email)

@section('editMethod')
    {{method_field('PUT')}}
@endsection