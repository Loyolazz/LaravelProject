<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource; 
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
       //return UserResource::collection(User::all());
       return User::all();
    }
    public function create(UserRequest $request): View
    {
        return view('user.create');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    public function store(Request $request) {
        $user = User::create([
            "name"=>$request->input("name"),
		    "email"=>$request->input("email"),
            "password"=>$request->input("password"),
        ]);
        return $user;
    }
    //  public function store(Request $request): View {
    //   return view('user.store');
    //   }
    //   public function edit(): View {
    //  return view('user.edit');
    // }
    // public function update(Request $request): View {
    // return view('user.update');
    // }
    // public function destroy(): View {
    //   return view('user.destroy');
    // }

}
