<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filiere::all();

        return response()->json([
            'filieres' => $filieres,
            'status' => 200,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filiere = $request->validate([
            'label' =>'required|string|max:255',
            'departement_id' => 'required|integer',
        ]);

        $filiere = Filiere::create($filiere);

        return response()->json([
            'filiere' => $filiere,
            'message' => 'Department created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        return response()->json([
            'filiere' => $filiere,
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
