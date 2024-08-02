<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        return view('clients.account.index');
    }

    public function someControllerMethod()
    {
        $username = Auth::check() ? Auth::user()->name : null;
        return view('components.client.header', compact('username'));
    }
}
