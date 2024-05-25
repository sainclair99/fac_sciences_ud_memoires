<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = File::all();
        return view('file.index', compact('files'));
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
        $data = new File();
        $file = $request->path;
        $filename = time().'-'.$file->getClientOriginalName();
        $file->move('assets', $filename);
        $data->path = $filename;
        $data->title = $request->title;
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        //
    }
}
