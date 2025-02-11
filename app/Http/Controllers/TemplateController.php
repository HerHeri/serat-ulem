<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\TemplateMessage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TemplateController extends Controller
{
    function index(Request $request)
    {
        if ($request->ajax()) {
            $template = Template::get();
            return DataTables::of($template)->toJson();
        }
        return view('admin.template-message');
    }
}
