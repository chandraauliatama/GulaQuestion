<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        switch (auth()->user()->role) {
            case 'admin':
                return redirect('/admin');
            default:
                return redirect('/');
        }
        return auth()->logout();
    }
}