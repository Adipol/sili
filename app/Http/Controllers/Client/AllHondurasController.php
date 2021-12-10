<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllHondurasController extends Controller
{
    public function show($id)
    {
        $pep = DB::table('control_honduras')->where('id_pep', $id)->where('id_all', null)->first();
        $all = DB::table('control_honduras')->where('id_pep', $id)
            ->where('type_pep', 'ALL')->get();

        return view('client.all.show-honduras', compact('pep', 'all'));
    }
}
