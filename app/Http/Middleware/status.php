<?php

namespace App\Http\Middleware;

use Closure;

class status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $fieldType = filter_var($request->nip, FILTER_VALIDATE_EMAIL) ? 'email' : 'nip';
        if(auth()->attempt(array($fieldType => $request->nip, 'password' => $request->password)))
        {
            // return redirect()->route('home');
        $user = \App\User::where('nip', $request->nip)->orWhere('email', $request->nip)->first();
        // var_dump($user);
        // die;
        if(!empty($user)){
        if ($user->status =='pegawai') {
            $pegawai = \App\Pegawai::where('nip', $request->nip)->orWhere('email', $request->nip)->first();
            $request->session()->put('nip', $pegawai->nip);
            $request->session()->put('email', $pegawai->email);
            $request->session()->put('nama', $user->name);
            return redirect('pegawaidashboard');
        }
    }
        }
        else{
            return redirect()->route('login')
            ->with('alert-danger','Email/NIP atau Password salah!');
        }

        return $next($request);
    }
}
