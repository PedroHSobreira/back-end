<?php
 
use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/',[\App\Http\Controllers\authController::class,'home']);
Route::get('/login',[\App\Http\Controllers\authController::class,'login']);
Route::get('/dashboardAdm',[\App\Http\Controllers\administradorController::class,'consultarAdministrador']);
Route::get('/inserir', [\App\Http\Controllers\administradorController::class,'inserirAdministrador']);
Route::get('/cursos',[\App\Http\Controllers\cursoController::class,'consultarCurso']);
Route::get('/editarCurso/{id}', [\App\Http\Controllers\cursoController::class, 'editarCurso']);
Route::get('/unidadesCurriculares',[\App\Http\Controllers\ucController::class,'consultarUc']);
Route::get('/editarUnidadesCurriculares/{id}',[\App\Http\Controllers\ucController::class,'editarUc']);
Route::get('/docentes',[\App\Http\Controllers\docenteController::class,'consultarDocente']);
Route::get('/editarDocentes/{id}',[\App\Http\Controllers\docenteController::class,'editarDocente']);
Route::get('/alunos', [\App\Http\Controllers\alunoController::class, 'consultarAluno']);
Route::post('/alunos', [\App\Http\Controllers\alunoController::class, 'inserirAluno'])->name('alunos.store');
Route::get('/editarAlunos/{id}', [\App\Http\Controllers\alunoController::class, 'editarAluno']);
