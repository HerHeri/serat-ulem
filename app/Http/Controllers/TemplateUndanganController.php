<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\TemplateUndangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class TemplateUndanganController extends Controller
{
    function index(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id) {
                $template = TemplateUndangan::where('id', $request->id)->first();
                return response()->json($template);
            }
            $template = TemplateUndangan::get();
            return DataTables::of($template)->toJson();
        }
        return view('admin.template-undangan');
    }

    function store(Request $request)
    {
        try {
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('assets/template-undangan', $filename);
                $request->merge(['image' => $filename]);
            }

            if ($request->id) {
                $undangan = TemplateUndangan::where('id', $request->id)->first();
                $msg = 'Template Undangan Updated';
            } else {
                $undangan = new TemplateUndangan();
                $undangan->created_at = date('Y-m-d H:i:s');
                $msg = 'Template Undangan Created';
            }
            $undangan->title = $request->title;
            $undangan->url = $request->url;
            $undangan->deskripsi = $request->deskripsi;
            $undangan->status = $request->status;
            $undangan->image = $filename ?? null;
            $undangan->save();
            return response()->json([
                'status' => 'success',
                'message' => $msg
            ]);
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ]);
        }
    }
}
