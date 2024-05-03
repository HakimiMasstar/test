<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\User;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function home() {
        $datas=Data::get();
        return view('home', ['datas'=>$datas]);
    }

    public function dashboard() {
        $users=User::where('is_admin', 0)->get();
        return view('dashboard.dashboard', ['users'=>$users]);
    }
}
