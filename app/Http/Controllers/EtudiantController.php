<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $request->validate([
            'nom' => ['required','string','max:255'],
            'prenom' => ['required','string','max:255'],
            'matricule' => ['required','string','max:255'],
            'filiere' => ['required'],
        ]);
        
        $data = new Etudiant();
        $file = $request->file_upload;
        $filename = time().'-'.$file->getClientOriginalName();
        $file->move('assets', $filename);
        $data->image_url = $filename;
        $data->nom = $request->nom;
        $data->prenom = $request->prenom;
        $data->matricule = $request->matricule;
        $data->user_id = Auth::user()->id;
        $data->filiere_id = $request->filiere;
        $data->save();
        $etudiant = Etudiant::where('user_id', Auth::user()->id)->get();
        return view('dashboard', compact(['etudiant' => $etudiant]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
