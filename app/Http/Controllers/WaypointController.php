<?php

namespace App\Http\Controllers;

use App\Waypoint;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\WaypointCreateRequest;

class WaypointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $waypoints = DB::table('waypoints')->get();
        $items = Waypoint::latest()->paginate(10);

        $title = 'List of important waypoints';

        //        return view('waypoint.index')
        //            ->with('items', $items)
        //            ->with('title', $title);
        
        return view('waypoint.index', compact('title', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->pluck('name', 'id');

        return view('waypoint.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WaypointCreateRequest $request)
    {
        // $input = $request->all();
        $input = $request->validated();

        Waypoint::create($input);
        
        return redirect()->
            route('waypoint.index')->
            with('message', 'Waypoint successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function show(Waypoint $waypoint)
    {
        return view('waypoint.show', compact('waypoint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Waypoint $waypoint)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waypoint $waypoint)
    {
        $waypoint->delete();

        return redirect()->
            route('waypoint.index')->
            with('message', 'Waypoint successfully removed!');
    }
}
