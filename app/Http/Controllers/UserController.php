<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('roles')->get();
        $roles = Role::all();
        return view('panel.usuarios', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tipo_doc' => 'required',
            'num_doc' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'password' => 'required'
        ]);

        $users = User::create([
            'name' => $request->name,
            'tipo_doc' => $request->tipo_doc,
            'num_doc' => $request->num_doc,
            'celular' => $request->celular,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'password' => bcrypt($request->password)
        ]);

        $users->assignRole($request->role);

        return redirect()->route('users');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'tipo_doc' => 'required',
            'num_doc' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'password' => 'required'
        ]);

        $users = User::findOrFail($id);

        $users->name = $request->name;
        $users->tipo_doc = $request->tipo_doc;
        $users->num_doc = $request->num_doc;
        $users->celular = $request->celular;
        $users->email = $request->email;
        $users->direccion = $request->direccion;
        if ($request->filled('password')) {
            $users->password = bcrypt($request->password);
        }

        $users->save();

        $users->syncRoles($request->role);

        return redirect()->route('users');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect()->route('users');
    }
}
