<?php

namespace App\Http\Controllers;

use App\Http\Resources\JurusanResource;
use App\Models\Jurusan;
use App\Models\Kampus;

class JurusanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($data)
    {
        $getKampus = Kampus::where('slug', $data)->first();
        if (!$getKampus) {
            return $this->errorResponse(['message' => 'Data Kampus Tidak Tersedia'], 400);
        }

        $getJurusan = JurusanResource::collection(Jurusan::where('kampus_id', $getKampus->id)->get());
        return $this->successResponse($getJurusan);
    }

    //
}
