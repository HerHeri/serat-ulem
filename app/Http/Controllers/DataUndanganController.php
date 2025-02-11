<?php

namespace App\Http\Controllers;

use App\Models\DetailUndangan;
use App\Models\Template;
use App\Models\Undangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class DataUndanganController extends Controller
{
    function index(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id) {
                $undangan = Undangan::where('id', $request->id)->first();
                return response()->json($undangan);
            }
            if ($request->temp_id) {
                $undangan = Template::where('id', $request->temp_id)->first();
                return response()->json($undangan);
            }
            if ($request->id_und) {
                $undangan = Undangan::where('id', $request->id_und)->first();
                $template = Template::where('id', $undangan->id_template)->first();
                $detail = DetailUndangan::where('user_id', $undangan->id_user)->first();
                $nama_undangan = str_replace(' ', '%20', $undangan->nama_undangan) ?? '';
                $link_undangan = "https://$_SERVER[HTTP_HOST]/" . auth()->user()->slug . '?to=' . $nama_undangan;
                $data = [
                    'nama_undangan' => $undangan->nama_undangan ?? '',
                    'lokasi' => $detail->alamat_resepsi ?? '',
                    'tanggal' => \Carbon\Carbon::parse($detail->tanggal_resepsi)->isoFormat('Do MMMM YYYY') ?? '',
                    'pukul' => $detail->jam_resepsi ?? '',
                    'hari' => \Carbon\Carbon::parse($detail->tanggal_resepsi)->isoFormat('dddd') ?? '',
                    'nama_pengantin_pria' => $detail->nama_pengantin_pria ?? '',
                    'nama_pengantin_wanita' => $detail->nama_pengantin_wanita ?? '',
                    'link_undangan' => $link_undangan ?? '',
                    'phone' => $request->phone ?? ''
                ];
                $msg = ReplaceArray($data, $template->message);
                $dt = [
                    'msg' => $msg,
                    'link_undangan' => $link_undangan,
                    'template' => $template,
                    'undangan' => $undangan
                ];
                return response()->json($dt);
            }
            $undangan = Undangan::where('id_user', auth()->user()->id)->get();
            return DataTables::of($undangan)->toJson();
        }
        $template = Template::all();
        return view('admin.data-undangan', compact('template'));
    }

    function store(Request $request)
    {
        try {
            if ($request->id) {
                $undangan = Undangan::where('id', $request->id)->first();
                $msg = 'Undangan Updated';
            } else {
                $undangan = new Undangan();
                $undangan->id_user = auth()->user()->id;
                $undangan->created_at = date('Y-m-d H:i:s');
                $msg = 'Undangan Created';
            }
            $undangan->nama_undangan = $request->nama_undangan;
            $undangan->phone = $request->phone;
            $undangan->id_template = $request->template;
            $undangan->kategori = $request->kategori;
            $undangan->save();
            return response()->json([
                'status' => 'success',
                'message' => $msg
            ]);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ]);
        }
    }

    function remove(Request $request)
    {
        try {
            $undangan = Undangan::where('id', $request->id)->first();
            $undangan->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Undangan Deleted'
            ]);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ]);
        }
    }
}
