@extends('layouts.app')

@section('content')

    <!-- d-flex justify-content-between align-items-end mb-3 -->

    <div class="row">
        <div class="offset-md-1 col-md-10">
            <h1 class="pb-1">{{ $title }}</h1>
            <p><a href="{{ route('waypoint.create') }}" class="btn btn-primary">
                <i class="fa fa-plus form-control-feedback"></i>
                <span class="glyphicons glyphicons-plus"></span> Add waypoint
            </a></p>
        </div>
    </div>

    <div class="row">
        <div class="offset-md-1 col-md-10">
            @if ($items->isNotEmpty())
            <div class="table-responsive-md">
                <table class="table table-striped">
                    <thead class="">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->category_id }}</td>
                        <td>
                            <form action="{{ route('waypoint.destroy', $item) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('waypoint.show', $item) }}" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                <a href="{{ route('waypoint.edit', $item) }}" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash form-control-feedback"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <p>No hay elementos registrados.</p>
            @endif
        </div>
    </div>
@endsection
