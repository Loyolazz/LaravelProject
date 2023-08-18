<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateMovieRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected Movie $repository;

    public function __construct(Movie $repository) {
        $this->repository = $repository;
    }

    public function index() {
        $movies = $this->repository->all();
        return MovieResource::collection($movies);
    }

    public function show(string $id) {
        $movie = $this->repository->find($id);


        if(!$movie) {
            return response()->json([
              'message' => 'Não foi achado o Filme'
            ], 404);
        }
        
        return new MovieResource($movie);

    }
    
    public function store()
    {   
        $movie = new Movie;
        dd($movie);
    }
    
}
