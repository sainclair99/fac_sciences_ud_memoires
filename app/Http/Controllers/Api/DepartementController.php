<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();

        return response()->json([
            'departements' => $departements,
            'status' => 200,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departement = $request->validate([
            'name' =>'required|string|max:255',
            'head_name' => 'required|string|max:255',
        ]);

        $departement = Departement::create($departement);

        return response()->json([
            'departement' => $departement,
            'message' => 'Department created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        $departement['filieres'] = $departement->filieres;
        return response()->json([
            'departement' => $departement,
            'status' => 200,
        ]);
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
