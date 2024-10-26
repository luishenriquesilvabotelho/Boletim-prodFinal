<?php

use App\Http\Controllers\DisciplinaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
    return view('home');
});

Route::get('/boletim', function ()
{
    return view('boletim');
});


###################### AQUI ESTÃO AS ROTAS DO MEU CONTROLADOR DISCIPLINA ##############
Route::delete('/destroy/disciplina/{id}', [DisciplinaController::class, 'destroy'])->name('disciplina.destroy');
Route::get('/disciplinas', [DisciplinaController::class, 'index'])->name('disciplinas.index');
Route::get('/disciplina/create', [DisciplinaController::class, 'create'])->name('disciplina.create');

Route::get('/edit/disciplina/{id}', [DisciplinaController::class, 'edit'])->name('disciplina.edit');
Route::put('/disciplinas/{id}', [DisciplinaController::class, 'update'])->name('disciplinas.update');
Route::post('/disciplinas/store', [DisciplinaController::class, 'store'])->name('disciplina.store');

