<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Testimoni;

class TestimoniController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::orderBy('updated_at', 'desc')->get();
        return view('backend.testimoni.index', [
            'page_title' => 'Testimoni',
            'tambah' => 'admin.testimoni.create',
            'showTambah' => true,
            'testimoni' => $testimoni
        ]);
    }
}
