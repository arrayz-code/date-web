<?php
// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('app.front.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended('/dashboard');
        }

        // Autenticación fallida
        return redirect('/login')->withErrors([
            'email' => 'Las credenciales no son validas',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
