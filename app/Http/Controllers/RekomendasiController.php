<?php

namespace App\Http\Controllers;

use App\Models\RekomendasiModel;
use App\Models\Rekomendasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Dompdf\Dompdf;


class RekomendasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $rekomendasi = Rekomendasi::where('pemilik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('mohon', 'LIKE', '%' . $request->search . '%')
                ->orderby('terbit', 'desc');
        } else {
            $rekomendasi = Rekomendasi::orderby('terbit', 'desc');
        }
        $rekomendasi = $rekomendasi->paginate(6);
        return view('v_rekomendasi/rekomendasi', compact('rekomendasi'));
    }
    public function add()
    {
        return view('v_rekomendasi/add');
    }

    public function insert(Request $request)
    {
        Request()->validate([
            'terbit'  => 'required',
            'urut'  => 'required',
            'pemilik'  => 'required',
            'perusahaan'  => 'required',
            'alamat'  => 'required',
            'mohon'  => 'required',
            'layanan'  => 'required',
            'jenis'  => 'required',
            'jumlah'  => 'required',
            'retri'  => 'required',
            'catatan'  => 'required',
            'trayek'  => 'required',
            'sifat'  => 'required',
            'tanggal'  => 'required',
            'no_bend' => 'required'
        ]);
        Rekomendasi::create($request->all());
        return redirect()->route('rekomendasi')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $rekomendasi = Rekomendasi::find($id);
        $rekomendasi->delete();
        return redirect()->route('rekomendasi')->with('pesan', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $rekomendasi = Rekomendasi::find($id);
        return view('v_rekomendasi/edit', compact('rekomendasi'));
    }

    public function update(Request $request, $id)
    {
        Request()->validate([
            'terbit'  => 'required',
            'urut'  => 'required',
            'pemilik'  => 'required',
            'perusahaan'  => 'required',
            'alamat'  => 'required',
            'mohon'  => 'required',
            'layanan'  => 'required',
            'jenis'  => 'required',
            'jumlah'  => 'required',
            'retri'  => 'required',
            'catatan'  => 'required',
            'trayek'  => 'required',
            'sifat'  => 'required',
            'tanggal'  => 'required',
            'no_bend' => 'required'
        ]);
        $rekomendasi = Rekomendasi::find($id);
        $rekomendasi->update($request->all());
        return redirect()->route('rekomendasi')->with('pesan', 'Data berhasil diedit');
    }
    public function detail($id)
    {
        $rekomendasi = Rekomendasi::find($id);
        return view('v_rekomendasi/detail', compact('rekomendasi'));
    }
    public function formkegiatan()
    {
        return view('v_rekomendasi/formkegiatan');
    }
    public function formpenerimaan()
    {
        return view('v_rekomendasi/formpenerimaan');
    }
    public function cetaklaporanTanggal($tglawal)
    {
        $rekomendasi = Rekomendasi::where('terbit', $tglawal)->get();
        return view('v_rekomendasi/cetaklaporan', compact('rekomendasi'));
    }
    public function cetaklaporanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $rekomendasi = Rekomendasi::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_rekomendasi/cetaklaporan', compact('rekomendasi'));
    }
    public function cetakpenerimaanTanggal($tglawal)
    {
        $rekomendasi = Rekomendasi::where('terbit', $tglawal)->get();
        return view('v_rekomendasi/cetakpenerimaan', compact('rekomendasi'));
    }
    public function cetakpenerimaanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $rekomendasi = Rekomendasi::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_rekomendasi/cetakpenerimaan', compact('rekomendasi'));
    }
}
