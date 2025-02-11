<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataUcapanController extends Controller
{
    function index(Request $request){
        if($request->ajax()){
            $ucapan = Ucapan::where('user_id', auth()->user()->id)->get();
            return DataTables::of($ucapan)->toJson();
        }
        return view('admin.data-ucapan');
    }

    function getUcapan(Request $request){
        try {
            $user = User::where('slug', $request->slug)->first();
            $ucapan = Ucapan::where('user_id', $user->id)->get();
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $ucapan
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => $th->getMessage()
            ]);
        }
    }
}
