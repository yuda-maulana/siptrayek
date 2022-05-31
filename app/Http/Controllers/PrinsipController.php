<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prinsip;

class PrinsipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Prinsip = new Prinsip();
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $prinsip = Prinsip::where('pemilik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('trayek', 'LIKE', '%' . $request->search . '%')
                ->orderby('terbit', 'desc');
        } else {
            $prinsip = Prinsip::orderby('terbit', 'desc');
        }
        $prinsip = $prinsip->paginate(6);
        return view('v_prinsip/prinsip', compact('prinsip'));
    }
    public function detail($id)
    {
        $prinsip = Prinsip::find($id);
        return view('v_prinsip/detail', compact('prinsip'));
    }
    public function add()
    {
        return view('v_prinsip/add');
    }
    public function insert(Request $request)
    {
        Request()->validate([
            'tanggal' => 'required',
            'terbit' => 'required',
            'urut' => 'required',
            'no_rekom' => 'required',
            'tgl_rekom' => 'required',
            'pemilik' => 'required',
            'perusahaan' => 'required',
            'alamat' => 'required',
            'mohon' => 'required',
            'jenis' => 'required',
            'retri' => 'required',
            'catatan' => 'required',
            'trayek' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'orang' => 'required',
            'no_mohon' => 'required',
            'tgl_mohon' => 'required',
            'no_bend' => 'required'
        ]);
        Prinsip::create([
            'tanggal' => $request->tanggal,
            'terbit' => $request->terbit,
            'urut' => $request->urut,
            'no_rekom' => $request->no_rekom,
            'tgl_rekom' => $request->tgl_rekom,
            'pemilik' => $request->pemilik,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'mohon' => $request->mohon,
            'jenis' => $request->jenis,
            'retri' => $request->retri,
            'catatan' => $request->catatan,
            'trayek' => $request->trayek,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'orang' => $request->orang,
            'no_mohon' => $request->no_mohon,
            'tgl_mohon' => $request->tgl_mohon,
            'no_bend' => $request->no_bend
        ]);
        return redirect()->route('prinsip')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $prinsip = Prinsip::find($id);
        return view('v_prinsip/edit', compact('prinsip'));
    }
    public function update(Request $request, $id)
    {
        Request()->validate([
            'tanggal' => 'required',
            'terbit' => 'required',
            'urut' => 'required',
            'no_rekom' => 'required',
            'tgl_rekom' => 'required',
            'pemilik' => 'required',
            'perusahaan' => 'required',
            'alamat' => 'required',
            'mohon' => 'required',
            'jenis' => 'required',
            'retri' => 'required',
            'catatan' => 'required',
            'trayek' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'orang' => 'required',
            'no_mohon' => 'required',
            'tgl_mohon' => 'required',
            'no_bend' => 'required'
        ]);
        $prinsip = Prinsip::find($id);
        $prinsip->update([
            'tanggal' => $request->tanggal,
            'terbit' => $request->terbit,
            'urut' => $request->urut,
            'no_rekom' => $request->no_rekom,
            'tgl_rekom' => $request->tgl_rekom,
            'pemilik' => $request->pemilik,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'mohon' => $request->mohon,
            'jenis' => $request->jenis,
            'retri' => $request->retri,
            'catatan' => $request->catatan,
            'trayek' => $request->trayek,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'orang' => $request->orang,
            'no_mohon' => $request->no_mohon,
            'tgl_mohon' => $request->tgl_mohon,
            'no_bend' => $request->no_bend
        ]);
        return redirect()->route('prinsip')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function delete($id)
    {
        $prinsip = Prinsip::find($id);
        $prinsip->delete();
        return redirect()->route('prinsip')->with('pesan', 'Data berhasil dihapus');
    }
    public function cetakprinsip($id)
    {
        $prinsip = Prinsip::find($id);
        return view('v_prinsip/cetakprinsip', compact('prinsip'));
    }
    public function formkegiatan()
    {
        return view('v_prinsip/formkegiatan');
    }
    public function formpenerimaan()
    {
        return view('v_prinsip/formpenerimaan');
    }
    public function cetaklaporanTanggal($tglawal)
    {
        $prinsip = Prinsip::where('terbit', $tglawal)->get();
        return view('v_prinsip/cetaklaporan', compact('prinsip'));
    }
    public function cetaklaporanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $prinsip = Prinsip::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_prinsip/cetaklaporan', compact('prinsip'));
    }
    public function cetakpenerimaanTanggal($tglawal)
    {
        $prinsip = Prinsip::where('terbit', $tglawal)->get();
        return view('v_prinsip/cetakpenerimaan', compact('prinsip'));
    }
    public function cetakpenerimaanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $prinsip = Prinsip::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_prinsip/cetakpenerimaan', compact('prinsip'));
    }
}
