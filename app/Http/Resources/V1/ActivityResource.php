<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "name"=> $this->name,
            'commissionId'=> $this->commission_id,
            'guestId'=> $this->guest_id,
            'participantId'=> $this->participant_id,
            'userId'=> $this->user_id,
        ];
    }
}
