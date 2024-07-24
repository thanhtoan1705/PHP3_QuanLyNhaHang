<?php

namespace App\Http\Controllers\Client\Table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        return view('clients.table.index');
    }
}
