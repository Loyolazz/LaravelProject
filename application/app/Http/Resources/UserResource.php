<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {   

        Carbon::setLocale('pt_BR');
        return [
            'identify' => $this->id,
            'name' => strtoupper($this->name),
            'email' => $this->email,
            'password' => $this->password,
            'created' => [
                'formatted' => Carbon::make($this->created_at)->format('d-m-Y H:i'),
                'ago' => Carbon::parse($this->created_at)->diffForHumans(),
            ],
        ];
    }
}
