<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ee80837 (Video 15 : User Registration)
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () {
<<<<<<< HEAD
=======
=======
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
>>>>>>> eb68209 (Video 15 : User Registration)
>>>>>>> ee80837 (Video 15 : User Registration)
        return view('register.index', [
            'tiitle' => 'Register',
            'active' => 'register'
        ]);
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        // $request->session()->$request->flash('succes','Registration sucessfull! Please login');

        return redirect('/login')->with('succes','Registration sucessfull! Please login');
>>>>>>> eb68209 (Video 15 : User Registration)
>>>>>>> ee80837 (Video 15 : User Registration)
    }
}
