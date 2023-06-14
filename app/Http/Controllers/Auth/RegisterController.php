<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller

{


public function showRegistrationForm()
{
    return view('register');
}

public function registerAction(Request $request)
{
    // dd($request->all());

    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255', 'unique:users'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    User::create($request->all());
    //tapi kalau gini nama field sama keynya harus sama

    return redirect('/dashboard');
}

protected function registered(Request $request, $user)
{
    Auth::login($user);
}

}


