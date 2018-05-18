<?php

namespace App\Http\Controllers;

use App\Zupanija;
use Illuminate\Http\Request;

class ZupanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zup = Zupanija::all();
//        dd($zup);
        echo '<h1>Sve županije</h1>';
        foreach($zup as $z){
        echo $z->naziv.'<br/>';}
        //return "Index zupanija"
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return"sve zupanije";
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
     * @param  Zupanija  $zupanija
     * @return \Illuminate\Http\Response
     */
    public function show(Zupanija $zupanija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Zupanija  $zupanija
     * @return \Illuminate\Http\Response
     */
    public function edit(Zupanija $zupanija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Zupanija  $zupanija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zupanija $zupanija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Zupanija  $zupanija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zupanija $zupanija)
    {
        //
    }
}
