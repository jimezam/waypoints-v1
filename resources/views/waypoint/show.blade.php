@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="pb-1">Waypoint: <span class="text-primary">{{ $waypoint->name }}</span></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

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

            <form action="{{ route('waypoint.destroy', $waypoint) }}" method="POST"
                  onsubmit="return confirm('Do you really want to delete this element?');">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('waypoint.edit', $waypoint) }}" class="btn btn-warning" title="Edit">
                    <span class="fa fa-pencil"></span>
                </a>
                <button type="submit" class="btn btn-danger" title="Remove">
                        <i class="fa fa-trash form-control-feedback"></i>
                </button>
                <a href="{{ URL::previous() }}" class="btn btn-secondary" title="Back">
                    Back
                </a>
            </form>

        </div>

        <div class="col-md-6">

            <div class="visible-sm-block"><div class="pt-4"></div></div>

            {!! '<img src="data:image/png;base64,' . 
                    DNS2D::getBarcodePNG(json_encode($qrData), "QRCODE", 10, 10, array(0, 0, 0)) . 
                '" alt="QR Code" title=""QR Code />' !!}

            <!--
            {!! json_encode($qrData) !!}
            -->                
        </div>
    </div>
@endsection