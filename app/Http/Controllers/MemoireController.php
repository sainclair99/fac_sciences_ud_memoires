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

    public function download($file)
    {
        dd($file);
        $filePath = public_path("public/assets/".$file);

        if (file_exists($filePath)) {
            dd($filePath);
            return response()->download($filePath);
        } else {
            dd('failed');
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

        return redirect()->route('web.memoire.index');
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
