@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="offset-md-1 col-md-10">
            <h1 class="pb-1">Waypoint: {{ $waypoint->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="offset-md-1 col-md-5">

            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Id</th>
                        <td>{{ $waypoint->id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Slug</th>
                        <td>{{ $waypoint->slug }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $waypoint->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Category</th>
                        <td>{{ $waypoint->category->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td>{{ $waypoint->address }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Latitude</th>
                        <td>{{ $waypoint->latitude }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Longitude</th>
                        <td>{{ $waypoint->longitude }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Description</th>
                        <td>{{ $waypoint->description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Created At</th>
                        <td>{{ $waypoint->created_at }}</td>
                    </tr>    
                    <tr>
                        <th scope="row">Updated At</th>
                        <td>{{ $waypoint->updated_at }}</td>
                    </tr>    
                </tbody>
            </table>

            <a href="{{ route('waypoint.index') }}" class="btn btn-secondary">Back</a>

        </div>

        <div class="col-md-5 offset-md-1">
            xxxx
        </div>
    </div>
@endsection