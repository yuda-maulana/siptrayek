<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khusus;

class KhususController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Khusus = new Khusus();
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $khusus = Khusus::where('pemilik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('no_uji', 'LIKE', '%' . $request->search . '%')
                ->orderby('terbit', 'desc');
        } else {
            $khusus = Khusus::orderby('terbit', 'desc');
        }
        $khusus = $khusus->paginate(6);
        return view('v_khusus/khusus', compact('khusus'));
    }
    public function detail($id)
    {
        $khusus = Khusus::find($id);
        return view('v_khusus/detail', compact('khusus'));
    }
    public function add()
    {
        return view('v_khusus/add');
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
            'merk' => 'required',
            'tahun' => 'required',
            'jenis' => 'required',
            'layanan' => 'required',
            'dy_akt' => 'required',
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
            'keperluan' => 'required',
            'no_bend' => 'required'
        ]);
        Khusus::create([
            'urut' => $request->urut,
            'no_uji' => $request->no_uji,
            'no_kend' => $request->no_kend,
            'pemilik' => $request->pemilik,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'rangka' => $request->rangka,
            'mesin' => $request->mesin,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'jenis' => $request->jenis,
            'layanan' => $request->layanan,
            'dy_akt' => $request->dy_akt,
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
            'keperluan' => $request->keperluan,
            'no_bend' => $request->no_bend
        ]);
        return redirect()->route('khusus')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $khusus = Khusus::find($id);
        return view('v_khusus/edit', compact('khusus'));
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
            'merk' => 'required',
            'tahun' => 'required',
            'jenis' => 'required',
            'layanan' => 'required',
            'dy_akt' => 'required',
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
            'keperluan' => 'required',
            'no_bend' => 'required'
        ]);
        $khusus = Khusus::find($id);
        $khusus->update([
            'urut' => $request->urut,
            'no_uji' => $request->no_uji,
            'no_kend' => $request->no_kend,
            'pemilik' => $request->pemilik,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'rangka' => $request->rangka,
            'mesin' => $request->mesin,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'jenis' => $request->jenis,
            'layanan' => $request->layanan,
            'dy_akt' => $request->dy_akt,
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
            'keperluan' => $request->keperluan,
            'no_bend' => $request->no_bend
        ]);
        return redirect()->route('khusus')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function delete($id)
    {
        $khusus = Khusus::find($id);
        $khusus->delete();
        return redirect()->route('khusus')->with('pesan', 'Data berhasil dihapus');
    }
    public function formkegiatan()
    {
        return view('v_khusus/formkegiatan');
    }
    public function formpenerimaan()
    {
        return view('v_khusus/formpenerimaan');
    }
    public function cetaklaporanTanggal($tglawal)
    {
        $khusus = Khusus::where('terbit', $tglawal)->get();
        return view('v_khusus/cetaklaporan', compact('khusus'));
    }
    public function cetaklaporanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $khusus = Khusus::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_khusus/cetaklaporan', compact('khusus'));
    }
    public function cetakpenerimaanTanggal($tglawal)
    {
        $khusus = Khusus::where('terbit', $tglawal)->get();
        return view('v_khusus/cetakpenerimaan', compact('khusus'));
    }
    public function cetakpenerimaanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $khusus = Khusus::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_khusus/cetakpenerimaan', compact('khusus'));
    }
}
