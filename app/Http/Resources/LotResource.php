<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LotResource extends JsonResource
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
            'title' => $this->$this->whenNotNull($this->number),
            'start' => $this->whenNotNull($this->start),
            'finish' => $this->$this->whenNotNull($this->finish),
            'price' => $this->$this->whenNotNull($this->price),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator_user_id' => $this->creator_user_id,
        ];
    }
}
