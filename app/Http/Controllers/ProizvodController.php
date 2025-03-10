<?php

namespace App\Http\Controllers;

use App\Models\Proizvod;
use App\Http\Requests\StoreProizvodRequest;
use App\Http\Requests\UpdateProizvodRequest;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function najprodavanijiProizvodi()
    {
        $proizvodi = Proizvod::limit(10)->orderByDesc("broj_kupnji")->get();
        return view("naslovnica", ["proizvodi" => $proizvodi]);
    }

    public function index()
    {
        //katalog
        $proizvodi = Proizvod::all();
        return view("katalog", ["proizvodi" => $proizvodi]);
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
    public function show(Proizvod $proizvod)
    {
        //
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
