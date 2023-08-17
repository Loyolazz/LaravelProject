<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageBaseUrl = 'https://flxt.tmsimg.com/assets/';
        $imageName = 'p170620_p_v8_az.jpg';

        Movie::create([
            'name' => 'Iron Man',
            'genre' => 'Action',
            'codMovieIMDb' => 'tt0371746',
            'rottenTomatoesMeter' => '94%',
            'Director' => 'Jon Favreau',
            'Poster' => $imageBaseUrl . $imageName, // Concatenação da URL base e do nome da imagem
        ]);
    }
}
