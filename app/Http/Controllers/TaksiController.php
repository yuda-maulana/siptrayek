<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taksi;

class TaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Taksi = new Taksi();
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $taksi = Taksi::where('pemilik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('no_uji', 'LIKE', '%' . $request->search . '%')
                ->orderby('terbit', 'desc');
        } else {
            $taksi = Taksi::orderby('terbit', 'desc');
        }
        $taksi = $taksi->paginate(6);
        return view('v_taksi/taksi', compact('taksi'));
    }
    public function detail($id)
    {
        $taksi = Taksi::find($id);
        return view('v_taksi/detail', compact('taksi'));
    }
    public function cetaksk($id)
    {
        $taksi = Taksi::find($id);
        return view('v_taksi/cetaksk', compact('taksi'));
    }
    public function cetakkp($id)
    {
        $taksi = Taksi::find($id);
        return view('v_taksi/cetakkp', compact('taksi'));
    }
    public function add()
    {
        return view('v_taksi/add');
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
            'rangka' => 'required',
            'mesin' => 'required',
            'orang' => 'required',
            'barang' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            // 'jeniskend_id' => 'required',
            'jenis_kendaraan' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'akhir_sk' => 'required',
            'no_kp' => 'required',
            'tgl_kp' => 'required',
            'akhir_kp' => 'required',
            'terbit' => 'required',
            'catatan' => 'required',
            'retri' => 'required',
            'periode' => 'required',
            'administrasi' => 'required',
            'pimpinan' => 'required',
            'no_bend' => 'required',
            'ket' => 'required',
            // 'ket1' => 'required'
        ]);
        Taksi::create([
            'urut' => $request->urut,
            'no_uji' => $request->no_uji,
            'no_kend' => $request->no_kend,
            'pemilik' => $request->pemilik,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'rangka' => $request->rangka,
            'mesin' => $request->mesin,
            'orang' => $request->orang,
            'barang' => $request->barang,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            // 'jeniskend_id' => $request->jeniskend_id,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'akhir_sk' => $request->akhir_sk,
            'no_kp' => $request->no_kp,
            'tgl_kp' => $request->tgl_kp,
            'akhir_kp' => $request->akhir_kp,
            'terbit' => $request->terbit,
            'catatan' => $request->catatan,
            'retri' => $request->retri,
            'periode' => $request->periode,
            'administrasi' => $request->administrasi,
            'pimpinan' => $request->pimpinan,
            'no_bend' => $request->no_bend,
            'ket' => $request->ket,
            // 'ket1' => $request->ket1
        ]);
        return redirect()->route('taksi')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $taksi = Taksi::find($id);
        return view('v_taksi/edit', compact('taksi'));
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
            'rangka' => 'required',
            'mesin' => 'required',
            'orang' => 'required',
            'barang' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            // 'jeniskend_id' => 'required',
            'jenis_kendaraan' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'akhir_sk' => 'required',
            'no_kp' => 'required',
            'tgl_kp' => 'required',
            'akhir_kp' => 'required',
            'terbit' => 'required',
            'catatan' => 'required',
            'retri' => 'required',
            'periode' => 'required',
            'administrasi' => 'required',
            'pimpinan' => 'required',
            'no_bend' => 'required',
            'ket' => 'required',
            // 'ket1' => 'required'
        ]);
        $taksi = Taksi::find($id);
        $taksi->update([
            'urut' => $request->urut,
            'no_uji' => $request->no_uji,
            'no_kend' => $request->no_kend,
            'pemilik' => $request->pemilik,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'rangka' => $request->rangka,
            'mesin' => $request->mesin,
            'orang' => $request->orang,
            'barang' => $request->barang,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            // 'jeniskend_id' => $request->jeniskend_id,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'akhir_sk' => $request->akhir_sk,
            'no_kp' => $request->no_kp,
            'tgl_kp' => $request->tgl_kp,
            'akhir_kp' => $request->akhir_kp,
            'terbit' => $request->terbit,
            'catatan' => $request->catatan,
            'retri' => $request->retri,
            'periode' => $request->periode,
            'administrasi' => $request->administrasi,
            'pimpinan' => $request->pimpinan,
            'no_bend' => $request->no_bend,
            'ket' => $request->ket,
            // 'ket1' => $request->ket1
        ]);
        return redirect()->route('taksi')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function delete($id)
    {
        $taksi = Taksi::find($id);
        $taksi->delete();
        return redirect()->route('taksi')->with('pesan', 'Data berhasil dihapus');
    }
    public function formkegiatan()
    {
        return view('v_taksi/formkegiatan');
    }
    public function formpenerimaan()
    {
        return view('v_taksi/formpenerimaan');
    }
    public function cetaklaporanTanggal($tglawal)
    {
        $taksi = Taksi::where('terbit', $tglawal)->get();
        return view('v_taksi/cetaklaporan', compact('taksi'));
    }
    public function cetaklaporanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $taksi = Taksi::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_taksi/cetaklaporan', compact('taksi'));
    }
    public function cetakpenerimaanTanggal($tglawal)
    {
        $taksi = Taksi::where('terbit', $tglawal)->get();
        return view('v_taksi/cetakpenerimaan', compact('taksi'));
    }
    public function cetakpenerimaanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $taksi = Taksi::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_taksi/cetakpenerimaan', compact('taksi'));
    }
}
