<?php

namespace App\Http\Controllers;

use App\Models\Ciutat;
use Illuminate\Http\Request;

class CiutatController extends Controller
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
        $ciutats = Ciutat::where('pais_id', '=', $request->route('id'))->paginate(10);       
        
        return view('detall.pais', ['ciutats'=>$ciutats, 'data'=>$this->repository->getData()]);
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
     * @param  \App\Models\Ciutat  $ciutat
     * @return \Illuminate\Http\Response
     */
    public function show(Ciutat $ciutat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciutat  $ciutat
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciutat $ciutat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciutat  $ciutat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciutat $ciutat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciutat  $ciutat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciutat $ciutat)
    {
        //
    }
}
