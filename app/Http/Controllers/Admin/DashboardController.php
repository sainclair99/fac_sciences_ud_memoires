<?php

namespace App\Http\Controllers\Admin;

use App\Models\Filiere;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $departements = Departement::all();
        $filieres = Filiere::all();

        return view('admin.home', compact('departements', 'filieres'));
    }
}
