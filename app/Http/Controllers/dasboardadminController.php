<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dasboardadminController extends Controller
{
    public function dashboardadmin()
    {
        $pengguna = DB::table('users')->get();
        return view('dashboardadmin');
    }
}
