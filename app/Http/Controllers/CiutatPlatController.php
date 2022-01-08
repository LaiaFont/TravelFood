<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiutatPlatController extends Controller
{
    private $repository;
    public function __construct(DataController $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request, DataController $repository)
    {     
        $plat = CiutatPlat::where('ciutat_id', '=', $request->route('id'))->paginate(10);
        return view('detall.ciutat', ['plats'=>$plat, 'data'=>$this->repository->getData()]);
    }
}
