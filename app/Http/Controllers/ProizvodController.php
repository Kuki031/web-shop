<?php

namespace App\Http\Controllers;

use App\Models\Proizvod;
use App\Http\Requests\StoreProizvodRequest;
use App\Http\Requests\UpdateProizvodRequest;
use App\Models\Narucitelj;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getMostSoldProducts()
    {
        $proizvodi = Proizvod::limit(10)->orderByDesc("broj_kupnji")->get();
        return view("naslovnica", ["proizvodi" => $proizvodi, "title" => "Naslovna stranica"]);
    }

    public function index()
    {
        $proizvodi = Proizvod::orderBy("naziv")->get();
        return view("katalog", ["proizvodi" => $proizvodi, "title" => "Katalog proizvoda"]);
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
    public function store(StoreProizvodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Proizvod $proizvod, int $id)
    {
        $proizvod = Proizvod::findOrFail($id);

        if (!$proizvod) {
            abort(404);
        }

        $narucitelji = Narucitelj::all();
        return view("proizvod", ["proizvod" => $proizvod, "narucitelji" => $narucitelji , "title" => $proizvod->naziv]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proizvod $proizvod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProizvodRequest $request, Proizvod $proizvod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proizvod $proizvod)
    {
        //
    }
}
