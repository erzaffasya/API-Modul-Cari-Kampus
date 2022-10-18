<?php

namespace App\Http\Resources;

use App\Models\Kampus;
use Illuminate\Http\Resources\Json\JsonResource;

class JurusanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama_jurusan' => $this->nama_jurusan,
            'fakultas' => $this->fakultas,
            'deskripsi' => $this->deskripsi,
            'kuota_mahasiswa_baru' => (int)$this->kuota_mahasiswa_baru,
            'akreditasi' => $this->akreditasi,
            'prospek_kerja' => $this->nama_jurusan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

}
