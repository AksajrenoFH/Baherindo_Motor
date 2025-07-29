<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [
            ['id' => 1, 'name' => 'Honda', 'price' => 2000000, 'tahun' => '2020', 'km' => 30],
            ['id' => 2, 'name' => 'Yamaha', 'price' => 3000000, 'tahun' => '2021', 'km' => 50],
            ['id' => 3, 'name' => 'Suzuki', 'price' => 4000000, 'tahun' => '2019', 'km' => 30],
            ['id' => 4, 'name' => 'Kawasaki', 'price' => 5000000, 'tahun' => '2020', 'km' => 35],
            ['id' => 5, 'name' => 'Ducati', 'price' => 6000000, 'tahun' => '1945', 'km' => 40],
        ];
        return view('welcome', compact('motor'));
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
        //
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
