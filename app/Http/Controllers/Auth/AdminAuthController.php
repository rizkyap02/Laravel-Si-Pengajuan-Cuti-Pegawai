<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('postLogout');
    }

    public function getLogin()
    {
        return view('auth.admin.login');
    }

    public function postLogin(Request $request)
    {


        if (auth()->guard('admin')->attempt($request->only('nip','email', 'password'))) {
            $request->session()->regenerate();
            session(['nip' => $request->nip]);
            session(['email' => $request->email]);
            $this->clearLoginAttempts($request);
            return redirect()->intended('/pegawaidashboard');
        } else {
            $this->incrementLoginAttempts($request);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

    public function postLogout()
    {
        auth()->guard('admin')->logout();
        session()->flush();

        return redirect()->route('admin.login');
    }
}
