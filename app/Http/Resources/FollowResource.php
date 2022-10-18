<?php

namespace App\Http\Resources;

use App\Models\Kampus;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class FollowResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => $this->user($this->users_id),
            'kampus' => $this->kampus($this->kampus_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    public function user($data){
        $user = User::select('id','name','email')->where('id',$data)->first();
        return $user;
    }
    public function kampus($data){
        $kampus = Kampus::find($data);
        return $kampus;
    }

}
