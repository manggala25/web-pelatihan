<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index', [
            'showTambah' => false // atau true jika ingin ditampilkan
        ]);
    }
}
