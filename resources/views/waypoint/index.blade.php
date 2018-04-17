@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="pb-1">List of important waypoints</h1>
            <p><a href="{{ route('waypoint.create') }}" class="btn btn-primary" title="Add">
                <i class="fa fa-plus form-control-feedback"></i>
                <span class="glyphicons glyphicons-plus"></span> Create waypoint
            </a></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
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

                        @each('waypoint.subview_index', $items, 'item')

                    </tbody>
                </table>

                {{ $items->links() }}
            </div>
            @else
                <p>No hay elementos registrados.</p>
            @endif
        </div>
    </div>
@endsection