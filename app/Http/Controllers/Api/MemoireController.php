<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Memoire;
use Illuminate\Http\Request;

class MemoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memoires = Memoire::all();

        return response()->json([
            'memoires' => $memoires,
            'status' => 200
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $memoire = $request->validate([
            'theme' => 'required|string',
            'file' => 'required',
            'first_page_image' => 'required'
        ]);

        $file = $request->file;
        $filename = time().'-'.$file->getClientOriginalName();
        $file->move('assets', $filename);

        $file2 = $request->first_page_image;
        $filename2 = time().'-'.$file2->getClientOriginalName();
        $file2->move('assets', $filename2);

        $memoire['file'] = $filename;
        $memoire['first_page_image'] = $filename2;
        $memoire['theme'] = $request->theme;

        $memoire = Memoire::create($memoire);
        
        return response()->json([
            'memoire' => $memoire,
            'status' => 201
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Memoire $memoire)
    {
        // $memoire['etudiant'] = $memoire->importation;

        return response()->json([
            'memoire' => $memoire,
            'status' => 200
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Memoire $memoire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Memoire $memoire)
    {
        //
    }
}
