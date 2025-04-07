<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function gold() {
        return view("gold");
    }
    public function destroy(c $c) {
        Auth::logout();

        return redirect("/");
    }
    public function create() {
        return view("auth.login");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required", "confirmed", Password::min(6)->numbers()->letters()->symbols()]
        ]);

        Auth::attempt($validated);

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                "email" => "Nepareiz e-pasts vai parole"
            ]);
        }

        $request->session()->regenerate();
        return redirect("/");
    }
}
