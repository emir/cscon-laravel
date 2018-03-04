<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index()
    {
        return 'hello world';
    }

    public function hebele(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|alpha_num|confirmed',
        ]);

        $user = \App\User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);
    }

    public function haberler()
    {
        $haberler = \App\News::latest()->get();

        return view('haberler', ['haberler' => $haberler]);
    }

    public function haber(Request $request, $id)
    {
        try{
            $haber = \App\News::with('comments')->where('id', $id)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return 'Boyle bir kayit bulunamami$tir';
        }

        if ($request->has('lang')) {
            config(['app.locale' => $request->get('lang')]);
        }

        return view('haber', ['haber' => $haber]);
    }
}
