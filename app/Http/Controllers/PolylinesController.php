<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolylinesModel;

class PolylinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function __construct()
    {
        $this->polylines = new PolylinesModel();
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Validate request
         $request->validate(
            [
                'name' => 'required|unique:polylines,name',
                'description' => 'required',
                'geom_polylines' => 'required',
            ],
            [
                'name.required' => 'Name is required',
                'name.unique' => 'Name already exists',
                'description.required' => 'Description is required',
                'geom_polylines.required' => 'Geometry polylines is required',
            ]
            );

        $data = [
            'geom' => $request ->geom_polylines,
            'name' => $request ->name,
            'description' => $request ->description,
        ];

        // Create data
       if (!$this->polylines->create($data)) {
       return redirect()->route('map')->with('error', 'Polylines failed to add');
       }

        // Redirect to Map
        return redirect()->route('map')->with('success', 'Polylines has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

