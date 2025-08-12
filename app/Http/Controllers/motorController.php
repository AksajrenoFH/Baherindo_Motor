<?php

namespace App\Http\Controllers;

use App\Models\motorBaherindo;
use Illuminate\Http\Request;

class motorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor.create');
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
            'namaMotor' => 'required|string|',
            'hargaMotor' => 'required|numeric',
            'tahunMotor' => 'required|integer',
            'kmMotor' => 'required|integer',
            'gambarMotor' => 'image|mimes:jpg,jpeg,png,svg',
        ]);

        if($request->hasFile('gambarMotor')){
            $path = $request->file('gambarMotor')->store('motorbaherindoImages', 'public');
            $validatedData['gambarMotor'] = $path;
        }

        motorBaherindo::create($validatedData);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motor = motorBaherindo::findOrFail($id);
        return view('motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $motor = motorBaherindo::findOrFail($id);
        return view('motor.edit', compact('motor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $motor = motorBaherindo::findOrFail($id);

        $validatedData = $request->validate([
            'namaMotor' => 'required|string|',
            'hargaMotor' => 'required|numeric',
            'tahunMotor' => 'required|integer',
            'kmMotor' => 'required|integer',
            'gambarMotor' => 'image|mimes:jpg,jpeg,png,svg',
        ]);

        if($request->hasFile('gambarMotor')){
            $path = $request->file('gambarMotor')->store('motorbaherindoImages', 'public');
            $validatedData['gambarMotor'] = $path;
        }

        $motor->update($validatedData);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $motor = motorBaherindo::findOrFail($id);
        $motor->delete();
        return redirect('/home');
    }
}
