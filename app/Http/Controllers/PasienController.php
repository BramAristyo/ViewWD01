<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    protected $userID = 3;

    public function __construct()
    {
        $this->userID = 3;
    }
    public function index()
    {
        // $pasien = User::where('id', $this->userID)->first();
        $pasien = User::where('id', Auth::user()->id)->first();
        $namaPasien = $pasien->nama;
        return view('pasien.dashboard', compact('namaPasien'));
    }

    public function showPeriksa()
    {
        return view('pasien.periksa');
    }

    public function showRiwayat()
    {
        return view('pasien.riwayat');
    }

}
