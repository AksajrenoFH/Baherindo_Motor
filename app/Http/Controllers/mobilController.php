<?php

namespace App\Http\Controllers;

use App\Models\mobilBaherindo;
use Illuminate\Http\Request;

class mobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil.create');
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
        $validatedData = $request->validate([
            'namaMobil' => 'required|string|',
            'hargaMobil' => 'required|numeric',
            'tahunMobil' => 'required|integer',
            'kmMobil' => 'required|integer',
            'gambarMobil' => 'image|mimes:jpg,jpeg,png,svg',
        ]);

        if($request->hasFile('gambarMobil')){
            $path = $request->file('gambarMobil')->store('mobilbaherindoImages', 'public');
            $validatedData['gambarMobil'] = $path;
        }

        mobilBaherindo::create($validatedData);
        return redirect('/car');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = mobilBaherindo::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = mobilBaherindo::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mobil = mobilBaherindo::findOrFail($id);

        $validatedData = $request->validate([
            'namaMobil' => 'required|string|',
            'hargaMobil' => 'required|numeric',
            'tahunMobil' => 'required|integer',
            'kmMobil' => 'required|integer',
            'gambarMobil' => 'image|mimes:jpg,jpeg,png,svg',
        ]);

        if($request->hasFile('gambarMobil')){
            $path = $request->file('gambarMobil')->store('mobilbaherindoImages', 'public');
            $validatedData['gambarMobil'] = $path;
        }

        $mobil->update($validatedData);
        return redirect('/car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = mobilBaherindo::findOrFail($id);
        $mobil->delete();
        return redirect('/car');
    }
}
