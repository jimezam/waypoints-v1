<?php

namespace App\Http\Controllers\Api;

use App\Waypoint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\ModelNotFoundException;

// Note: $ php artisan make:controller Api/WaypointController --model=Waypoint --api

// Note: https://medium.com/@dinotedesco/using-laravel-5-5-resources-to-create-your-own-json-api-formatted-api-2c6af5e4d0e8

class WaypointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        throw new ModelNotFoundException();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        throw new ModelNotFoundException();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $message = [
            "status"  => 200,
            "message" => "",
            "data"    => null
        ];

        try
        {
            $message['data'] = Waypoint::where('slug', '=', $slug)->firstOrFail();
        }
        catch(ModelNotFoundException $e)
        {
            $message['status'] = 404;
            $message['message'] = $e->getMessage();
        }
        catch(Exception $e)
        {
            $message['status'] = 500;
            $message['message'] = $e->getMessage();
        }
        
        return response()->json($message, $message['status']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waypoint $waypoint)
    {
        throw new ModelNotFoundException();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waypoint $waypoint)
    {
        throw new ModelNotFoundException();
    }
}