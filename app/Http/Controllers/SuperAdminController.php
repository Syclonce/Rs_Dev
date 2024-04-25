<?php

namespace App\Http\Controllers;

use App\Models\rsbank;
use App\Models\rsbidang;
use App\Models\rsdepartemen;
use App\Models\rsemergency;
use App\Models\rsgrupjabatan;
use App\Models\rsjabatan;
use App\Models\rspasien;
use App\Models\rspendidikan;
use App\Models\rsreiskokerja;
use App\Models\rsstatwp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuperAdminController extends Controller
{
    //
    public function index()
    {
        $title = 'Rs Apps';
        return view('superadmin.index', compact('title'));
    }

    public function pasienadd()
    {
        $rspasiens = rspasien::all();
        $title = 'Rs Apps';
        return view('superadmin.rsadd', compact('rspasiens', 'title'));
    }

    public function pasinadd(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'norm' => 'required',
            'tgldftar' => 'required',
            'name' => 'required',
            // Add more validation rules for other fields as needed
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // Ambil data dari form
        $norm = $request->input('norm');
        $tgldaftar = $request->input('tgldftar');
        $nama = $request->input('name');
        $seks = $request->input('sex');
        $tgllahir = $request->input('tgllahir');
        $menikah = $request->input('menikah');
        $agama = $request->input('agama');
        $ibu = $request->input('ibukdg');
        $goldar = $request->input('goldar');
        $perkerja = $request->input('pkj');
        $pendidikan = $request->input('pendidikan');
        $penjamin = $request->input('penjamin');
        $nomorkartu = $request->input('nomorkartu');
        $keluarga = $request->input('kgr');
        $namakeluarga = $request->input('namakgr');
        $noktp = $request->input('noktp');
        $alamat = $request->input('alamat');
        $provinsi = $request->input('provinsi');
        $kota = $request->input('kota');
        $kecamatan = $request->input('kecamatan');
        $desa = $request->input('desa');
        $notpl = $request->input('notpl');
        $email = $request->input('email');
        $nowp = $request->input('nowp');


        // Simpan data ke database
        $pasienData = rspasien::create([
            'norm' => $request->input('norm'),
            'tgldaf' => $request->input('tgldftar'),
            'nama' => $request->input('name'),
            'sex' => $request->input('sex'),
            'tgllhr' => $request->input('tgllahir'),
            'menikah' => $request->input('menikah'),
            'agama' => $request->input('agama'),
            'ibukng' => $request->input('ibukdg'),
            'goldar' => $request->input('goldar'),
            'pkj' => $request->input('pkj'),
            'pddk' => $request->input('pendidikan'),
            'pjmn' => $request->input('penjamin'),
            'nokt' => $request->input('nomorkartu'),
            'kga' => $request->input('kgr'),
            'nmakga' => $request->input('namakgr'),
            'noktp' => $request->input('noktp'),
            'Alamat' => $request->input('alamat'),
            'pvi' => $request->input('provinsi'),
            'kta' => $request->input('kota'),
            'kec' => $request->input('kecamatan'),
            'des' => $request->input('desa'),
            'tpl' => $request->input('notpl'),
            'email' => $request->input('email'),
            'nowp' => $request->input('nowp')
        ]);

        // Check if the patient was successfully created
        if ($pasienData) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add Bank
    public function bank()
    {
        $namabank = rsbank::all();
        $title = 'Rs Apps';
        return view('superadmin.bank', compact('title', 'namabank'));
    }
    public function banks(Request $request)
    {
        $nama = $request->input('name');

        $namabank = rsbank::create([
            'nama' => $request->input('name'),
        ]);

        if ($namabank) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add departemen
    public function departem()
    {
        $depar = rsdepartemen::all();
        $title = 'Rs Apps';
        return view('superadmin.depar', compact('title', 'depar'));
    }

    public function depar(Request $request)
    {
        $nama = $request->input('name');

        $namabank = rsdepartemen::create([
            'nama' => $request->input('name'),
        ]);

        if ($namabank) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add bidang
    public function bidang()
    {
        $bidangs = rsbidang::all();
        $title = 'Rs Apps';
        return view('superadmin.bidang', compact('title', 'bidangs'));
    }

    public function bidangs(Request $request)
    {
        $nama = $request->input('name');

        $bidang = rsbidang::create([
            'nama' => $request->input('name'),
        ]);

        if ($bidang) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add jabatan
    public function jabatan()
    {
        $jabatans = rsjabatan::all();
        $title = 'Rs Apps';
        return view('superadmin.jabatan', compact('title', 'jabatans'));
    }

    public function jabatans(Request $request)
    {

        $bidang = rsjabatan::create([
            'kode_jabatan' => $request->input('kode'),
            'nama_jabatan' => $request->input('name'),
        ]);

        if ($bidang) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add pendidikan
    public function pendidikan()
    {
        $pendidikans = rspendidikan::all();
        $title = 'Rs Apps';
        return view('superadmin.pendidikan', compact('title', 'pendidikans'));
    }

    public function pendidikans(Request $request)
    {

        $bidang = rspendidikan::create([
            'kode_pendidikan' => $request->input('kode'),
            'nama_pendidikan' => $request->input('name'),
        ]);

        if ($bidang) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add grup jabatan
    public function grupjabatan()
    {
        $jabatans = rsjabatan::all();
        $grupjabatans = rsgrupjabatan::all();
        $title = 'Rs Apps';
        return view('superadmin.grupjabatan', compact('title', 'grupjabatans', 'jabatans'));
    }

    public function grupjabatans(Request $request)
    {

        $grupjabatan = rsgrupjabatan::create([
            'kode_jabatan' => $request->input('kode'),
            'nama_grup_jabatan' => $request->input('name'),
        ]);

        if ($grupjabatan) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }


    //add status wajib pajak
    public function statwp()
    {
        $statwp = rsstatwp::all();
        $title = 'Rs Apps';
        return view('superadmin.statwp', compact('title', 'statwp'));
    }


    public function statwps(Request $request)
    {

        $statwp = rsstatwp::create([
            'status' => $request->input('status'),
            'ket' => $request->input('ket'),
        ]);

        if ($statwp) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add resiko kerja
    public function resikokerja()
    {
        $resikokerja = rsreiskokerja::all();
        $title = 'Rs Apps';
        return view('superadmin.resikokerja', compact('title', 'resikokerja'));
    }

    public function resikokerjas(Request $request)
    {

        $grupjabatan = rsreiskokerja::create([
            'kode_kerja' => $request->input('kode'),
            'nama_resiko' => $request->input('name'),
        ]);

        if ($grupjabatan) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add emergency
    public function emergency()
    {
        $resikokerja = rsemergency::all();
        $title = 'Rs Apps';
        return view('superadmin.emergency', compact('title', 'resikokerja'));
    }

    public function emergencys(Request $request)
    {

        $grupjabatan = rsemergency::create([
            'kode_emergency' => $request->input('kode'),
            'nama_emergency' => $request->input('name'),
            'indexs' => $request->input('status'),
        ]);

        if ($grupjabatan) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    public function pegawai()
    {
        //$bidangs = rsbidang::all();
        $title = 'Rs Apps';
        return view('superadmin.pegawai', compact('title'));
    }
}
