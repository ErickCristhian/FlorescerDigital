<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //dd($users);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = User::getUserType($request->role);
        return view('users.create', ['user' => new User(), 'type' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->only(array_keys($request->rules()));
        User::create($data);
        return redirect()->route('admin.users.index')
            ->with('message','Usuário cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $project
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {


        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) //Route Model Binding
    {
        $type = $user->role;
        return view('users.edit', compact('user', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->only(array_keys($request->rules()));
        $user->fill($data);
        $user->save();
        return redirect()->route('admin.users.index')
            ->with('message','Usuário alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')
            ->with('message','Cliente excluído com sucesso');
    }
}
