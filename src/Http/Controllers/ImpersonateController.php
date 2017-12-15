<?php

namespace Devmi\Impersonate\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\RedirectIfAuthenticated;

class ImpersonateController extends Controller
{

    public function __construct()
    {
        $this->middleware(array_merge(
            ['auth'],
            config('impersonate.middlewares')
        ));

    }

    public function index()
    {
        return view('Impersonate::impersonate');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => "email|
                exists:" . config('impersonate.exists.table') . "," . config('impersonate.exists.column'),
        ]);


        $user = User::where('email', $request->email)->first();

        session()->put('impersonate', $user->id);

        return redirect(config('impersonate.redirectingPath'));

    }
    public function destroy()
    {
        session()->forget('impersonate');
        return redirect(config('impersonate.redirectingPath'));
    }
}
