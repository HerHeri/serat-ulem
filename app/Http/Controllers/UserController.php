<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    function index()
    {
        if (request()->ajax()) {
            if (request()->id) {
                $users = User::where('id', request()->id)->first();
                return response()->json($users);
            }
            $users = User::get();
            return DataTables::of($users)->toJson();
        }
        return view('admin.list-user');
    }

    function store(Request $request)
    {
        try {
            if (request()->id) {
                $user = User::where('id', request()->id)->first();
                $msg = 'User Updated';
            } else {
                $user = new User();
                $msg = 'User Created';
            }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return response()->json([
                'success' => true,
                'message' => 'User created successfully',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }

    function remove()
    {
        try {
            $users = User::where('id', request()->id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'User deleted successfully',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }
}
