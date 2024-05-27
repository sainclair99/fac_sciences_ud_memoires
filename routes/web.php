<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MemoireController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\SetLocale;

Route::get('/', function(){
    return redirect(app()->getLocale());
});

Route::get('/admin', function(){
    return view('admin.auth.login');
});

Route::prefix('{locale}')
->middleware(SetLocale::class)
->group(function(){
    Route::view('/greeting', 'greeting');
    
    Route::get('/', function () {
        return view('home');
    });

    // * All " Memoire " routes
    Route::get('/memoire', [MemoireController::class, 'index'])->name('web.memoire.index');
    Route::get('/memoire/create', [MemoireController::class, 'create']);
    Route::post('/memoire', [MemoireController::class, 'store']);
    Route::get('/memoire/{id}', [MemoireController::class, 'show']);
    Route::put('/memoire/{id}', [MemoireController::class, 'update']);
    Route::delete('/memoire', [MemoireController::class, 'delete']);

    // * All " Departement " routes
    Route::get('/departement', [DepartementController::class, 'index'])->name('web.departement.index');
    Route::get('/departement/create', [DepartementController::class, 'create']);
    Route::post('/departement', [DepartementController::class, 'store']);
    Route::get('/departement/{id}', [DepartementController::class, 'show']);
    Route::put('/departement/{id}', [DepartementController::class, 'update']);
    Route::delete('/departement', [DepartementController::class, 'delete']);

    // * All " Etudiant " routes
    Route::get('/etudiant', [EtudiantController::class, 'index'])->name('web.etudiant.index');
    Route::get('/etudiant/create', [EtudiantController::class, 'create']);
    Route::post('/etudiant', [EtudiantController::class, 'store']);
    Route::get('/etudiant/{id}', [EtudiantController::class, 'show']);
    Route::put('/etudiant/{id}', [EtudiantController::class, 'update']);
    Route::delete('/etudiant', [EtudiantController::class, 'delete']);

    Route::get('/file', [FileController::class, 'index']);
    Route::post('/pdf-p', [FileController::class, 'store'])->name('post-pdf');
    Route::get('/pdf', [FileController::class, 'show'])->name('preview');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});


// Route::get('/greeting/{locale}', function (string $locale) {
//     if (! in_array($locale, ['en', 'jp', 'fr'])) {
//         abort(400);
//     }
 
//     App::setLocale($locale);
 
//     return view('greeting');
// });






