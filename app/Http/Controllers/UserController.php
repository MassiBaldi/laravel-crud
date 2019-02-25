<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::orderBy('id', 'desc')->paginate(10);
    return view('users.index', compact('users'));
  }


  public function create()
  {
    $data = [
      'action' => route('users.create'),
      'method' => 'POST',
      'h1' => 'Aggiungi nuovo Utente'
    ];

    return view('users.create_aggiorna', $data);
  }


  public function store(Request $request)
  {
    $data = $request->all();

    $validData = $request->validate([
      'name' => 'required|min:4|max:20',
      'lastname' => 'required|min:4|max:20',
      'age' => 'between:18,80',
      'cf' => 'required|unique:users|max:30'

    ]);

    $newUser = new User;
    $newUser->fill($data);
    $newUser->save();

    return redirect()->route('users.index');
  }


  public function show(User $user)
  {
    if (empty($user)) {
      return abort(404);
    }

    return view('users.show', compact('user'));
  }


  public function edit(User $user)
  {
    if (empty($user)) {
      return abort(404);
    }

    $data = [
      'action' => route('users.update', $user->id),
      'user' => $user,
      'method' => 'PUT',
      'h1' => 'Modifica l\'utente con id: '. $user->id
    ];

    return view('users.create_aggiorna', $data);
  }


  public function update(Request $request, User $user)
  {
    $data = $request->all();
    $user->update($data);

    $validData = $request->validate([
      'name' => 'required|min:4|max:20',
      'lastname' => 'required|min:4|max:20',
      'age' => 'between:18,80',
      'cf' => 'required|unique:users|max:30'

    ]);

    $newUser = new User;
    $newUser->fill($data);
    $newUser->save();

    return redirect()->route('users.index');
  }


  public function destroy(User $user)
  {
    $user->delete();

    return redirect()->route('users.index');
  }
}
