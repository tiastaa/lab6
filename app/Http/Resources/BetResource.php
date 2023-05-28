<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BetResource extends JsonResource
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
            'name' => $this->whenNotNull($this->name),
            'price' => $this->whenNotNull($this->price),
            'lot_id' => $this->$this->whenNotNull($this->lot_id),
            'implementation_time' => $this->$this->whenNotNull($this->implementation_time),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator_user_id' => $this->creator_user_id,
        ];
    }
}
