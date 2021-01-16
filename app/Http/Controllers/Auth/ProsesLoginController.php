<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProsesLoginController extends Controller
{
    public function index()
    {
        return view('halamanlogin');
    }
    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('email','password');
        if (Auth::attempt($kredensil)) {
            $user = Auth::user();
            if ($user->roles == 'admin' || $user->roles == 'admintf' || $user->roles == 'adminsi' || $user->roles == 'adminds') {
                return redirect()->intended('dashboard');
            }
            if ($user->roles == 'mahasiswatf' || $user->roles == 'mahasiswasi' || $user->roles == 'mahasiswads') {
                return redirect()->intended('home');
            }
            return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
        }

    }
}
