<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    public function login() {
        return view('LoginSignUp.Login');
    }

    public function signUp() {
        return view('LoginSignUp.SignUp');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'     
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $tenant1 = Tenant::create(['id' => $validated['name']]);
        $tenant1->domains()->create(['domain' => $validated['name'].'.localhost']);

        $user = User::create($validated);

        //auth()->login($user);

        return redirect('/login') -> with('message', 'Account created successfully');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login') -> with('message', 'Logout successfully');
    }

    public function process(Request $request) {
        $validated = $request->validate([
            'email' => ['required'],
            'password' => 'required'     
        ]);

        if(auth()->attempt($validated)) {
            $request->session()->regenerate();
            //return redirect('auth()->user()->name.localhost:8000/admin') -> with('message', 'Login Sucessfully!!!');
            return Redirect::to('http://'.auth()->user()->name.'.localhost:8000/admin');
        } else {
            return back()->withErrors(['email' => 'Login failed!']) -> onlyInput('email');
        }   
    }
}
