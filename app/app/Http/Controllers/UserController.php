<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //

public function displayUsers() {
    $users = User::all();
    return view('frontdesk.Accounts.user', ['users' => $users]);
}

public function store(Request $request)
{
    
         $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
        

    ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        

        $user->save();

    return redirect()->route('users');

}


}
