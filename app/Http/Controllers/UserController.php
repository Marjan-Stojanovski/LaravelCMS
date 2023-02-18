<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $data = ['users' => $users];
        return view('dashboard.users.index')->with($data);
    }

    public function create()
    {
        return view('dashboard/users.create');
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = bcrypt($request->get('password'));

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $users = User::FindorFail($id);
        $data = ['users' => $users];
        return view('dashboard.users.show')->with($data);
    }

    public function edit($id)
    {
        $users = User::FindorFail($id);
        $data = ['users' => $users];
        return view('dashboard.users.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $user = User::FindorFail($id);

        $user->fill($request->all())->save();

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::FindorFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }



}
