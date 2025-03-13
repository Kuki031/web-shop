<?php

namespace App\Http\Controllers;

use App\Models\Narudzba;
use App\Models\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NarudzbaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        try {

            $validatedData = $request->validate([
                "narucitelj_id" => "required|integer|exists:naruciteljs,id",
                "proizvod_id" => "required|integer|exists:proizvods,id",
                "kolicina" => "required|integer|min:1",
            ]);

            $narudzba = Narudzba::create($validatedData);

            if ($narudzba) {
                $proizvod = Proizvod::findOrFail($request->proizvod_id);
                $proizvod->update([
                    "broj_kupnji" => $proizvod->broj_kupnji + $request->kolicina
                ]);
                return back()->with("success", "Narudžba je uspješno kreirana!");
            }
        } catch (ValidationException $e) {
            return back()->with("fail", "Greška pri kreiranju narudžbe.")->withErrors([]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
