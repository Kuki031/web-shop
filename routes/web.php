<?php

use App\Http\Controllers\NarudzbaController;
use App\Http\Controllers\ProizvodController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('web-shop/naslovnica');
});


Route::prefix("web-shop")->group(function() {
    Route::get("/naslovnica", [ProizvodController::class, "getMostSoldProducts"])->name("naslovnica");
    Route::get("/katalog-proizvoda", [ProizvodController::class, "index"])->name("katalog");
    Route::get("/katalog-proizvoda/proizvod/{id}", [ProizvodController::class, "show"])->name("proizvod");

    Route::post("/kreiraj-narudzbu", [NarudzbaController::class, "store"]);
});


Route::fallback(function() {
    return redirect("web-shop/naslovnica");
});
