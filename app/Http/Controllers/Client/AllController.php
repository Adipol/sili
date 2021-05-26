<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function show($id)
    {
        return view('client.all.show');
    }
}
