<?php

namespace App\Http\Controllers;

use App\Http\Resources\FollowResource;
use App\Models\FollowKampus;
use App\Models\Kampus;
use Illuminate\Support\Facades\Auth;

class FollowKampusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $followKampus = FollowResource::collection(FollowKampus::all());
        return $this->successResponse($followKampus);
    }

    public function store($data)
    {
        $getKampus = Kampus::select('id')->where('slug', $data)->first();
        if (!$getKampus) {
            return $this->errorResponse(['message' => 'Data Kampus Tidak Tersedia'], 400);
        }

        $cekFollow = FollowKampus::where('kampus_id', $getKampus->id)->where('users_id', Auth::id())->first();        
        if (!$cekFollow) {
            FollowKampus::create(['kampus_id' => $getKampus->id, 'users_id' => Auth::id()]);
            return $this->successResponse('Favorit Kampus Berhasil Ditambahkan');
        } else {
            $cekFollow->delete();
            return $this->successResponse('Favorit Kampus Berhasil Dihapuskan');
        }
    }

    public function riwayatHapus(){
        // return Auth::id();
        $user = FollowResource::collection(FollowKampus::where('users_id',Auth::id())->onlyTrashed()->get());
        return $this->successResponse($user);
    }
}
