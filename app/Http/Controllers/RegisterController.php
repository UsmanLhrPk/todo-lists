<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'regex:/[A-Z]+/', 'regex:/[a-z]+/', 'regex:/[0-9]+/', 'regex:/\W+/', 'confirmed'],
        ]);

        try {
            User::create($attributes);

            return redirect()->route('root');
        } catch (\Throwable $th) {
            Log::error($th);

            session()->flash('message', 'Unable to create user. Please try again ');
            session()->flash('status', 'danger');

            return redirect()->back();
        }
    }
}
