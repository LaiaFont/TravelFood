<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $repository;
    public function __construct(DataController $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request, DataController $repository)
    {
        $plats = Plat::with('ingredient')->where('id', '=', $request->route('plat_id'))->get();       
        
        return view('detall.plat', ['plats'=>$plats, 'data'=>$this->repository->getData()]);
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
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function show(Plat $plat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function edit(Plat $plat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plat $plat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plat $plat)
    {
        //
    }
}
