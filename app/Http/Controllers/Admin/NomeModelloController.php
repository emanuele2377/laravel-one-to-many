<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Admin; // era "App\Http\Controllers"

use App\Models\NomeModello;
use App\Http\Requests\StoreNomeModelloRequest;
use App\Http\Requests\UpdateNomeModelloRequest;
use App\Http\Controllers\Controller; // Controller di base da importare
//...ecc


class NomeModelloController extends Controller
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
    public function store(StoreNomeModelloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NomeModello $nomeModello)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NomeModello $nomeModello)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNomeModelloRequest $request, NomeModello $nomeModello)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NomeModello $nomeModello)
    {
        //
    }
}
