<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Configweb;
use Illuminate\Support\Facades\DB;

class NurrahmaController extends Controller
{
    public function index()
    {
        $title = "Page 1";
        return view('nurrahma.index', ['title' => $title]);
    }

    public function index2()
    {
        $title = "Page 2";
        return view('nurrahma.index2', ['title' => $title]);
    }

    public function index3()
    {
        $title = "Page 3";
        return view('nurrahma.index3', ['title' => $title]);
    }

    public function index4()
    {
        $title = "Page 4";
        return view('nurrahma.index4', ['title' => $title]);
    }

    public function savealamat(Request $request)
    {
        $configweb = DB::table('configwebs')->first();
        $configweb = Configweb::find($configweb->id);
        $configweb->update([
            'desc' => $request->alamat
        ]);

        return response()->json(['success' => 'Got Simple Ajax Request.']);
    }

    public function index5()
    {
        $title = "Page 5";
        return view('nurrahma.index5', ['title' => $title]);
    }
}
