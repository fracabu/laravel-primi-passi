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
//l'estensione della view è sempre .blade.php ma non va riportata nella funzione
Route::get('/', function () {
    return view("home");
});

Route::get("/chi-siamo", function (){
    return "pagina chi siamo";
});

// il metodo post serve per creare
// Route::post("/chi-siamo", function (){
//     return "pagina chi siamo";
// });

// // il metodo post serve per modificare o aggiornare
// Route::patch("/chi-siamo", function (){
//     return "pagina chi siamo";
// });

// // il metodo delete serve per cancellare
// Route::delete("/chi-siamo", function (){
//     return "pagina chi siamo";
// });