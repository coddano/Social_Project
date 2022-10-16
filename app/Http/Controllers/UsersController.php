<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreUserRequest;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();


        return view('users.index')->with('users', $users);
    }

    public function create(User $user)
    {
        if (Gate::denies('edit-users')){
            return redirect()->route('users.index');
        };//Si pas admin on redirige

        $roles = Role::all();
        return view('users.create',[
            'user' => $user,
            'roles' => $roles
        ]);

        
    }

    public function store(StoreUserRequest $request)
    {

        $user = User::create($request->validated());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {

        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        if (Gate::denies('edit-users')){
            return redirect()->route('users.index');
        };//Si pas admin on redirige

        $roles = Role::all();
        return view('users.edit',[
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.index');
    }

    public function destroy(Task $user)
    {
        if (Gate::denies('delete-users')){
        return redirect()->route('users.index');
    };//Si pas admin on redirige

    
    $user->roles()->detach();
    $user->delete();

    if (Gate::denies('delete-users')){
        return redirect()->route('users.index');
    };//Si pas admin on redirige



        return redirect()->route('users.index');
    }
    
}
