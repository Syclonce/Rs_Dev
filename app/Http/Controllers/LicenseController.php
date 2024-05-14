<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;



class LicenseController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Access granted to protected route!']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:licenses,key',
            'expiry_date' => 'required|date',
        ]);

        $license = License::create([
            'key' => $request->key,
            'expiry_date' => $request->expiry_date,
            'is_active' => true,
        ]);

        return response()->json($license, 201);
    }

    public function generateKey()
    {
        // Membuat komponen dasar kunci
        $timestamp = Carbon::now()->timestamp;
        $random = Str::random(40); // Menghasilkan string random sepanjang 40 karakter

        // Menggabungkan dan mengenkripsi
        $key = hash('sha256', $timestamp . $random);

        return $key;
    }

    public function stores(Request $request)
    {
        Log::info('Generating key');
        $key = $this->generateKey();
        Log::info('Key generated: ' . $key);

        $license = License::create([
            'key' => $key,
            'expiry_date' => $request->expiry_date,
            'is_active' => true,
        ]);

        return response()->json($key, 201);
    }

    public function testGenerateKey(Request $request)
    {
        $key = $this->generateKey();
        $date = $request->expiry_date;
        return response()->json(['key' => $key, 'date' => $date]);
    }
}
