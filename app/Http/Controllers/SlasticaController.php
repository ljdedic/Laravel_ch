<?php

namespace App\Http\Controllers;

use App\Models\Slastica;
use Illuminate\Http\Request;

class SlasticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Slastica::get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slastica  $slastica
     * @return \Illuminate\Http\Response
     */
    public function show(Slastica $slastica)
    {
        return $slastica;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slastica  $slastica
     * @return \Illuminate\Http\Response
     */
    public function edit(Slastica $slastica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slastica  $slastica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slastica $slastica)
    {
        dd('test');
         $slastica ->update([
            'manufacturer' => $request ->manufacturer,
             'shape' => $request ->shape,
             'tipe' => $request -> tipe,
             'size' => $request -> size,
             'user_id' => $request -> user_id,
        ]);
         return $slastica;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slastica  $slastica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slastica $slastica)
    {
        //
    }
}
