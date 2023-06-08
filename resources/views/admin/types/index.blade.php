@extends('layouts.admin')
@section('title', 'Types index')
@section('content')

    <div class="banner py-2 shadow-sm">
        <h1 class="px-2 text-primary">Show Type table</h1>
        <a class="btn btn-dark m-2 " href="{{ route('admin.projects.create') }}" role="button">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add new Type</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light bg-dark">
                <caption>Types Index</caption>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>projects with this type</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($types as $type)
                    <tr class="table-primary">
                        <td scope="row"> {{ $type->id }}</td>
                        <td scope="row"> {{ $type->name }}</td>
                        <td scope="row"> {{ $type->slug }}</td>
                        <td scope="row text-center">
                            <span class="badge bg-dark ">{{ $type->projects->count() }}</span>

                        </td>
                    </tr>
                @endforeach

            <tfoot>

            </tfoot>
        </table>
    </div>



@endsection
