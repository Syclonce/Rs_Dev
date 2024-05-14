<?php

namespace App\Http\Controllers;

use App\Models\rsbahasa;
use App\Models\rsbank;
use App\Models\rsbidang;
use App\Models\rsdepartemen;
use App\Models\rsdesa;
use App\Models\rsemergency;
use App\Models\rsgrupjabatan;
use App\Models\rsjabatan;
use App\Models\rskabupaten;
use App\Models\rsmetodracik;
use App\Models\rspasien;
use App\Models\rspendidikan;
use App\Models\rsprovinsi;
use App\Models\rsreiskokerja;
use App\Models\rsruangan;
use App\Models\rsstatuskerja;
use App\Models\rsstatwp;
use App\Models\rswilayah;
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
        // Generate nomor RM unik
        $norm = $this->generateUniqueNorm();

        // Simpan data ke database
        $pasienData = rspasien::create([
            'norm' => $norm,
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

    private function generateUniqueNorm() {
        do {
            $norm = mt_rand(10000000, 99999999); // Generate random number between 10000000 and 99999999
        } while (Rspasien::where('norm', $norm)->exists()); // Cek apakah nomor sudah ada di database

        return $norm;
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
            'coa_bank' => $request->input('coa'),
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

    public function bankd($id)
    {
        $namabank = rsbank::find($id);
        $namabank->delete();
        return redirect()->route('superadmin.bank')->with('success', 'Bank deleted successfully');

    }


    //add departemen
    public function departem()
    {
        $depar = rsdepartemen::all();
        $bidangs = rsbidang::all();
        $departemenas = rsdepartemen::join('rs_bidang', 'rs_departemen.bidang', '=', 'rs_bidang.id')
                ->select('rs_departemen.*', 'rs_bidang.nama as nama_bidang')
                ->get();
        $title = 'Rs Apps';
        return view('superadmin.depar', compact('title', 'depar','bidangs', 'departemenas'));
    }

    public function depar(Request $request)
    {
        $namabank = rsdepartemen::create([
            'nama'=> $request->input('name'),
            'jenis_departemen'=> $request->input('jenis'),
            'inisial_poli'=> $request->input('Kode'),
            'text_layar_antrian'=> $request->input('display'),
            'bidang'=> $request->input('bidang'),
            'index_touchscreen_registrasi'=> $request->input('Kodeindex'),
            'coa_unit'=> $request->input('coaunit'),
            'coa_piutang'=> $request->input('coapi'),
            'coa_pendapatan'=> $request->input('coapen'),
            'coa_biaya'=> $request->input('coa'),
            'coa_hpp'=> $request->input('coahhp'),
            'coa_persediaan'=> $request->input('coaper'),
            'bpjs_maping'=> $request->input('bpjs'),
            'casmix_grup'=> $request->input('casemix'),
            'kode_ihs'=> $request->input('ihs')
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
        $bidang = rsbidang::create([
            'nama' => $request->input('name'),
            'keterangan' => $request->input('ket'),
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

    //add Ruang OK
    public function ruangan()
    {
        $ruangan = rsruangan::all();
        $title = 'Rs Apps';
        return view('superadmin.ruanggan', compact('title','ruangan'));
    }

    public function ruanganok(Request $request)
    {

        $grupjabatan = rsruangan::create([
            'kode_ruangan' => $request->input('kode'),
            'nama_ruangan' => $request->input('name'),
        ]);

        if ($grupjabatan) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add metode racik
    public function metoderacik()
    {
        $metoderacik = rsmetodracik::all();
        $title = 'Rs Apps';
        return view('superadmin.metoderacik', compact('title','metoderacik'));
    }

    public function metoderaciks(Request $request)
    {

        $metoderacik = rsmetodracik::create([
            'kode_racik' => $request->input('kode'),
            'nama_racik' => $request->input('name'),
        ]);

        if ($metoderacik) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add status kerja
    public function statsker()
    {
        $statsker = rsstatuskerja::all();
        $title = 'Rs Apps';
        return view('superadmin.statsker', compact('title','statsker'));
    }

    public function statskers(Request $request)
    {

        $statsker = rsstatuskerja::create([
            'stat_kerja' => $request->input('kode'),
            'ket_stats' => $request->input('name'),
        ]);

        if ($statsker) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

      //add bahasa
      public function bahasa()
      {
          $bahasa = rsbahasa::all();
          $title = 'Rs Apps';
          return view('superadmin.bahasa', compact('title','bahasa'));
      }

      public function bahasas(Request $request)
    {

        $statsker = rsbahasa::create([
            'bahasa' => $request->input('name'),
            'keterangan' => $request->input('ket'),
        ]);

        if ($statsker) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }

    //add bahasa
    public function lokasi()
    {
        $provinsi =  rsprovinsi::all();
        $kabupaten = rskabupaten::with('provinsi')->get();
        $wilayah = rswilayah::with('kabupaten')->get();
        $desa = rsdesa::with('wilayah')->limit(10000)->get();
        $title = 'Rs Apps';
        return view('superadmin.lokasi', compact('title' , 'provinsi', 'kabupaten','wilayah','desa'));
    }

    public function lokasis(Request $request)
  {

      $statsker = rsbahasa::create([
          'bahasa' => $request->input('name'),
          'keterangan' => $request->input('ket'),
      ]);

      if ($statsker) {
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
