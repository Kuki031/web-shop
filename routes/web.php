<?php

use App\Http\Controllers\ProizvodController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('web-shop/naslovnica');
});


Route::prefix("web-shop")->group(function() {
    Route::get("/naslovnica", [ProizvodController::class, "najprodavanijiProizvodi"]);
    Route::get("/katalog-proizvoda", [ProizvodController::class, "index"]);

});


Route::fallback(function() {
    return redirect("web-shop/naslovnica");
});
