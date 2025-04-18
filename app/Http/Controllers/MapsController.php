<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use App\Models\JenisTanaman;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index()
    {
        $lahan = Lahan::with(['petani', 'jenisTanaman'])->orderBy("created_at","desc")->get();
        $jenisTanaman = JenisTanaman::all();
        $lahan = json_decode($lahan);

        return view('maps.index', compact('lahan','jenisTanaman'));
    }
}
