<?php

namespace App\Http\Resources;

use App\Models\Kampus;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class FollowResource extends JsonResource
{
    public function toArray($request)
    {
        if ($this->deleted_at) {
            $delete = ['deleted_at' => $this->deleted_at];
        } else {
            $delete = [];
        }
        return [
            'id' => $this->id,
            'user' => $this->user($this->users_id),
            'kampus' => $this->kampus($this->kampus_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ] + $delete;
    }

    public function user($data){
        $user = User::select('id','name','email')->where('id',$data)->first();
        return $user;
    }
    public function kampus($data){
        $kampus = Kampus::select('id','nama_kampus','akreditasi','alamat','website','slug')->where('id',$data)->get();
        return $kampus;
    }

}
