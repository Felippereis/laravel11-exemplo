<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// criando uma rota, coloca o verbo GET ou qualquer outro, ai depois nome da rota nesse caso UserController ,
// depois se quiser chamar pelo nome da um name pra ela ex user.index;

Route::get('/', [UserController::class, 'index'])->name('user.index');


