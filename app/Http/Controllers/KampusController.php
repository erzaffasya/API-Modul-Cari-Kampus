<?php

namespace App\Http\Controllers;

use App\Models\Kampus;

class KampusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $cariKampus = Kampus::all();
        return $this->successResponse($cariKampus);
    }

    public function cariKampus($data)
    {
        $cariKampus = Kampus::where('nama_kampus','LIKE',"%{$data}%")->orWhere('slug',$data)->get();
        return $this->successResponse($cariKampus);
    }

    //
}
