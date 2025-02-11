<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use App\Models\Undangan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $undangan = Undangan::where('id_user', auth()->user()->id)->get();
        $ucapan = Ucapan::where('user_id', auth()->user()->id)->get();
        return view('admin.dashboard', compact('undangan', 'ucapan'));
    }
}
