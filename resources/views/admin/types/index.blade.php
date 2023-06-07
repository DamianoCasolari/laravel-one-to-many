@extends('layouts.admin')
@section('title', 'Types index')
@section('content')
    @foreach ($types as $type)
        {{ $type->name }}
    @endforeach
@endsection
