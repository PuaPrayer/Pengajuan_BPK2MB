<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'NIP' => $this->NIP,
            'bagian' => $this->bagian,
            'tujuan' => $this->tujuan,
            'pendidikan' => $this->jenjang_pendidikan,
            'surat' => $this->surat,
            'approved' => $this->approved,
        ];
    }
}
