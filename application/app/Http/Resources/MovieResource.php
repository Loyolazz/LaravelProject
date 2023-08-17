<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        Carbon::setLocale('pt_BR');
        return [
            'id' => $this->id,
            'name' => $this->name,
            'genre' => $this->genre,
            'codMovieIMDb' => $this->codMovieIMDb,
            'rottenTomatoesMeter' => $this->rottenTomatoesMeter,
            'Director' => $this->Director,
            'Poster' => $this->Poster,
            'created' => $this->created_at ? [
                'formatted' => Carbon::make($this->created_at)->format('d-m-Y H:i'),
                'ago' => Carbon::parse($this->created_at)->diffForHumans(),
            ] : null,
            'updated_at' => $this->updated_at ? [
                'formatted' => Carbon::make($this->updated_at)->format('d-m-Y H:i'),
                'ago' => Carbon::parse($this->updated_at)->diffForHumans(),
            ] : null,
        ];
    }
}
