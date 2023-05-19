<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function get()
    {
        if (request()->ajax()) {
            $roles = Role::get();
            return response()->json($roles);
        }
    }
}
