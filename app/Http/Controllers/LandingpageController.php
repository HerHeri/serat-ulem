<?php

namespace App\Http\Controllers;

use App\Models\DetailUndangan;
use App\Models\Ucapan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LandingpageController extends Controller
{
    function index()
    {
        return view('home');
    }

    function showTemplate($slug)
    {
        return view('templates.' . $slug);
    }

    function detailTemplate(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();
        $nama_undangan = $request->to;
        $du = DetailUndangan::where('user_id', $user->id)->first();
        return view('templates.template-wedding-' . $slug, compact('user', 'nama_undangan', 'du'));
    }

    function storeUcapan(Request $request, $slug)
    {
        try {
            $user = User::where('slug', $slug)->first();
            $ucapan = new Ucapan();
            $ucapan->user_id = $user->id;
            $ucapan->nama = $request->nama;
            $ucapan->ucapan = $request->ucapan;
            $ucapan->konfirmasi = $request->konfirmasi;
            $ucapan->save();
            return response()->json([
                'status' => true,
                'message' => 'Ucapan Terkirim'
            ]);
        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json([
                'success' => false,
                'message' => 'Ucapan Gagal Terkirim'
            ]);
        }
    }

    function kirimKonfirmasi(Request $request)
    {
        $url = 'https://wa.me/6281333573940?text=' . $request->message;
        return response([
            'status' => 'success',
            'url' => $url
        ]);
    }

    function testLp()
    {
        // $user = User::where('slug', request()->slug)->first();
        // $du = DetailUndangan::where('user_id', $user->id)->first();
        return view('landingpage');
    }
}
