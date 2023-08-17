<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{   
    protected User $repository;

    public function __construct(User $repository) {
        $this->repository = $repository;
    }

    public function index()
    {
        $users=$this->repository->paginate();

        return UserResource::collection($users);
    }

    public function store(StoreUpdateUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request -> password);
        $user = $this->repository->create($data);

        return new UserResource($user);
    }
    public function show(string $id){
        $user = $this->repository->find($id);


        if(!$user) {
            return response()->json([
              'message' => 'Não foi achado o usuario'
            ], 404);
        }
        
        return new UserResource($user);
    }

    public function update(string $id, StoreUpdateUserRequest $request) {
        $data  = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = $this->repository->findOrFail($id);
        
      
        $user->update($data);

        return new UserResource($user);
    }

    public function destroy(string $id) {
        $user = $this->repository->find($id);
    
        if (!$user) {
            return response()->json([
                'message' => 'Usuário não encontrado.'
            ], Response::HTTP_NOT_FOUND);
        }
    
        $user->delete();
        return response()->json([
            'message' => 'Usuário deletado com sucesso.'
        ], Response::HTTP_OK);
    }
}
