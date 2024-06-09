<?php

namespace App\Http\Controllers;

use App\Models\Memoire;
use Illuminate\Http\Request;

class MemoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request['search']) {
            $memoires = Memoire::where('theme', 'like', '%'.$request['search'].'%')->get();
            $search = $request['search'];
            return view('memoire.index', compact(['memoires', 'search']));
        }
        $memoires = Memoire::all();
        return view('memoire.index',compact('memoires'));
    }

    public function download(Memoire $file)
    {
        $filePath = public_path("public/assets/{$file->file}");

        if (file_exists($filePath)) {
            response()->download($filePath, $file->original_name);
            return redirect()->back();
        } else {
            abort(404, 'File not found');
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Memoire $memoire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Memoire $memoire)
    {
        //
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
