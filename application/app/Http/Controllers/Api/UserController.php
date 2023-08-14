<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $user = User::paginate();

        return UserResource::collection($user);
    }

    public function store(Request $request){
        $data = $request->all();

        $data['password']=bcrypt($request->password);
        dd($data);
        $user = User::create($data);
        
        return new UserResource($user);
    
    }   
}
