<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ControlHonduras;
use App\Models\HondurasWhole;
use Illuminate\Http\Request;

class CompleteHondurasController extends Controller
{
    public function index()
    {
        $complete = HondurasWhole::all()->first();
        $lists = ControlHonduras::count('id');

        return view('client.complete-honduras', compact('complete', 'lists'));
    }
}
