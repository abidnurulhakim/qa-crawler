<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Guard;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\User;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, Guard $auth)
    {
        $v = \Validator::make($request->all(), [
            'email' => 'required|email',
            'username' => 'required|max:255',
            'password' => 'required|confirmed'
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }
        $user = new User();
        if (User::whereEmail($request->input('email'))->count() < 1 && User::whereUsername($request->input('username'))->count() < 1) {
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->password = \Hash::make($request->input('password'));
            if ($user->save()) {
                \Auth::login($user);
                return redirect()->route('tasks.index');
            }
        }
        return redirect()->back()->with("NOTIF_INFO", "Email or Username have been registered");
    }

    public function signin(Request $request)
    {
        $user = User::where('email', trim($request->input('username')))->orWhere('username', trim($request->input('username')))->first();
        if (!is_null($user)) {
            if (\Hash::check($request->get('password'), $user->password)) {
                \Auth::login($user);
                return redirect()->route('tasks.index');
            }
        }
        return redirect()->route('auth.login')->with("NOTIF_DANGER", 'Login Failed');
    }

    public function logout(Guard $auth)
    {
        $auth->logout();
        return redirect()->route('auth.login');
    }
}
