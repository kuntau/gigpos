<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        return request('done!');
        dd($request);
        return User::create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return User::find($user->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return User::destroy($user->id);
    }

    /**
     * Register user
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // dd($request);
        // dd($request->collect());
        // $user = $request->input('form');
        // $user->password = Hash::make($request->input('form.password'));

        User::create([
            'name' => $request->input('form.name'),
            'email' => $request->input('form.email'),
            'password' => Hash::make($request->input('form.password')),
        ]);

        // dd($request->input('form'));
        // User::create($user);

        return response($request->email);
        // return User::create($request);
    }

    /**
     * Login user
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function login(User $user)
    {
        dd($user);
    }

    /**
     * Logout user
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function logout(User $user)
    {
        dd($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function current()
    {
        // TODO: find logged in user
        $user = User::findOrFail(100);
        // dump($user);
        // return response('No user logged in.',405);
        if ($user != null) {
            return response($user);
        } else {
            return response('No user logged in.',405);
        }
    }

}
