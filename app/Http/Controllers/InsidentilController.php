<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsidentilModel;
use App\Models\Insidentil;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class InsidentilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $insidentil = Insidentil::where('pemilik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('no_uji', 'LIKE', '%' . $request->search . '%')
                ->orderby('terbit', 'desc');
        } else {
            $insidentil = Insidentil::orderby('terbit', 'desc');
        }
        $insidentil = $insidentil->paginate(6);
        return view('v_insidentil/insidentil', compact('insidentil'));
    }
    public function add()
    {
        return view('v_insidentil/add');
    }

    public function insert(Request $request)
    {
        Request()->validate([
            'urut' => 'required',
            'no_uji' => 'required',
            'no_kend' => 'required',
            'pemilik' => 'required',
            'perusahaan' => 'required',
            'alamat' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'habis_uji' => 'required',
            'terbit' => 'required',
            'catatan' => 'required',
            'retri' => 'required',
            'leges' => 'required',
            'maksud' => 'required',
            'tujuan' => 'required',
            'tgl_awal_perjalanan' => 'required',
            'tgl_akhir_perjalanan' => 'required',
            'tanggal' => 'required',
            'no_bend' => 'required'
        ]);
        Insidentil::create($request->all());
        return redirect()->route('insidentil')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $insidentil = Insidentil::find($id);
        $insidentil->delete();
        return redirect()->route('insidentil')->with('pesan', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $insidentil = Insidentil::find($id);
        return view('v_insidentil/edit', compact('insidentil'));
    }

    public function update(Request $request, $id)
    {
        Request()->validate([
            'urut' => 'required',
            'no_uji' => 'required',
            'no_kend' => 'required',
            'pemilik' => 'required',
            'perusahaan' => 'required',
            'alamat' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'habis_uji' => 'required',
            'terbit' => 'required',
            'catatan' => 'required',
            'retri' => 'required',
            'leges' => 'required',
            'maksud' => 'required',
            'tujuan' => 'required',
            'tgl_awal_perjalanan' => 'required',
            'tgl_akhir_perjalanan' => 'required',
            'tanggal' => 'required',
            'no_bend' => 'required'
        ]);
        $insidentil = Insidentil::find($id);
        $insidentil->update($request->all());
        return redirect()->route('insidentil')->with('pesan', 'Data berhasil diedit');
    }
    public function detail($id)
    {
        $insidentil = Insidentil::find($id);
        return view('v_insidentil/detail', compact('insidentil'));
    }
    public function formkegiatan()
    {
        return view('v_insidentil/formkegiatan');
    }
    public function formpenerimaan()
    {
        return view('v_insidentil/formpenerimaan');
    }
    public function cetaklaporanTanggal($tglawal)
    {
        $insidentil = Insidentil::where('terbit', $tglawal)->get();
        return view('v_insidentil/cetaklaporan', compact('insidentil'));
    }
    public function cetaklaporanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $insidentil = Insidentil::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_insidentil/cetaklaporan', compact('insidentil'));
    }
    public function cetakpenerimaanTanggal($tglawal)
    {
        $insidentil = Insidentil::where('terbit', $tglawal)->get();
        return view('v_insidentil/cetakpenerimaan', compact('insidentil'));
    }
    public function cetakpenerimaanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $insidentil = Insidentil::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_insidentil/cetakpenerimaan', compact('insidentil'));
    }
}
