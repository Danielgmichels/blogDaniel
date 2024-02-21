<?php

use App\Http\Controllers\api\ArticlesController;
use App\Http\Controllers\api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

//Rota para endPoint de autenticação
Route::post("/auth", [AuthController::class, "auth"]);

//Grupo de api autenticado : passando pelo middleware de autenticação
Route::middleware("auth:sanctum")->group(function(){
    //Listar todos
    // Route::get("/articles", [ArticlesController::class, "index"]);

    //Listar apenas um pelo id
    // Route::get("/articles/{id}", [ArticlesController::class, "show"]);

    //Adicionar novo
    // Route::post("/articles", [ArticlesController::class, "store"]);
    
    //Atualizar registro, podemos usar path ou put
    // Route::put("/articles/{id}", [ArticlesController::class, "update"]);

    //Deletar um registro
    // Route::delete("/articles/{id}", [ArticlesController::class, "destroy"]);

    Route::apiResource("/articles", ArticlesController::class);
});