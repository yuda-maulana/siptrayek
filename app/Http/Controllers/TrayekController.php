<?php

namespace App\Http\Controllers;

use App\Models\Jeniskend;
use Illuminate\Http\Request;
use App\Models\Lintrayek;
use App\Models\Pemilik;
use File;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use ZanySoft\LaravelPDF\PDF;


use function GuzzleHttp\Promise\all;

class TrayekController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->Pemilik = new Pemilik();
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $lintrayek = Lintrayek::where('kode', 'LIKE', '%' . $request->search . '%')
                ->orWhere('lintasan', 'LIKE', '%' . $request->search . '%')
                ->orderby('id', 'asc');
        } else {
            $lintrayek = Lintrayek::orderby('id', 'asc');;
        }
        $lintrayek = $lintrayek->paginate(10);
        return view('v_lintrayek/lintrayek', compact('lintrayek'));
    }
    public function detail($id)
    {
        $lintrayek = Lintrayek::find($id);
        return view('v_lintrayek/detail', compact('lintrayek'));
    }
    public function add()
    {
        return view('v_lintrayek/add');
    }
    public function insert(Request $request)
    {
        Request()->validate([
            'kode' => 'required',
            'lintasan' => 'required',
            'alokasi' => 'required',
            'realisasi' => 'required',
            'aktif' => 'required',
            'nonaktif' => 'required',
            'rute' => 'required',
            'jenis' => 'required'
        ]);
        Lintrayek::create($request->all());
        return redirect()->route('lintrayek')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $lintrayek = Lintrayek::find($id);
        return view('v_lintrayek/edit', compact('lintrayek'));
    }
    public function update(Request $request, $id)
    {
        Request()->validate([
            'kode' => 'required',
            'lintasan' => 'required',
            'alokasi' => 'required',
            'realisasi' => 'required',
            'aktif' => 'required',
            'nonaktif' => 'required',
            'rute' => 'required',
            'jenis' => 'required'
        ]);
        $lintrayek = Lintrayek::find($id);
        $lintrayek->update($request->all());
        return redirect()->route('lintrayek')->with('pesan', 'Data berhasil diedit');
    }
    public function delete($id)
    {
        $lintrayek = Lintrayek::find($id);
        $lintrayek->delete();
        return redirect()->route('lintrayek')->with('pesan', 'Data berhasil dihapus');
    }
    public function printpdf()
    {
        $lintrayek = Lintrayek::all();
        return view('v_lintrayek/printpdf', compact('lintrayek'));
    }
    public function printlintrayek($id)
    {
        $lintrayek = Lintrayek::find($id);
        return view('v_lintrayek/printlintrayek', compact('lintrayek'));
    }
    public function printseluruhlintasan()
    {
        $lintrayek = Lintrayek::orderby('id', 'asc')->get();
        return view('v_lintrayek/printseluruhlintasan', compact('lintrayek'));
    }
    public function formangkutan()
    {
        $lintrayek = Lintrayek::all();
        return view('v_lintrayek/formangkutan', compact('lintrayek'));
    }
    public function printangkutankota($jns)
    {
        $lintrayek = Lintrayek::where('jenis', $jns)->orderby('kode', 'asc')->get();
        return view('v_lintrayek/printangkutankota', compact('lintrayek'));
    }






    //izin trayek
    public function t_index(Request $request)
    {
        if ($request->has('search')) {
            $trayek = Pemilik::where('pemilik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('no_uji', 'LIKE', '%' . $request->search . '%')
                ->orderby('terbit', 'desc');
        } else {
            $trayek = Pemilik::orderby('terbit', 'desc');
        }
        $trayek = $trayek->paginate(6);
        return view('v_trayek/trayek', compact('trayek'));
    }
    public function t_add()
    {
        $lintrayek = Lintrayek::all();
        $jeniskend = Jeniskend::all();
        $trayek = Pemilik::all();
        return view('v_trayek/add', compact('lintrayek', 'jeniskend', 'trayek'));
    }
    public function t_insert(Request $request)
    {
        Request()->validate([
            'lintrayek_id' => 'required',
            'urut' => 'required',
            'no_uji' => 'required',
            'no_kend' => 'required',
            'pemilik' => 'required',
            'perusahaan' => 'required',
            'alamat' => 'required',
            'no_rangka' => 'required',
            'mesin' => 'required',
            'seat' => 'required',
            'barang' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'jeniskend_id' => 'required',
            // 'hbs_uji' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'akhir_sk' => 'required',
            'no_kp' => 'required',
            'tgl_kp' => 'required',
            'akhir_kp' => 'required',
            'terbit' => 'required',
            'catatan' => 'required',
            'ret_sk' => 'required',
            'ret_kp' => 'required',
            'denda_periode' => 'required',
            'denda_admin' => 'required',
            'pimpinan' => 'required',
            'no_bend' => 'required',
            'ket' => 'required',
            // 'ket1' => 'required'
        ]);
        Pemilik::create([
            'lintrayek_id' => $request->lintrayek_id,
            'urut' => $request->urut,
            'no_uji' => $request->no_uji,
            'no_kend' => $request->no_kend,
            'pemilik' => $request->pemilik,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'no_rangka' => $request->no_rangka,
            'mesin' => $request->mesin,
            'seat' => $request->seat,
            'barang' => $request->barang,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'jeniskend_id' => $request->jeniskend_id,
            // 'hbs_uji' => $request->hbs_uji,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'akhir_sk' => $request->akhir_sk,
            'no_kp' => $request->no_kp,
            'tgl_kp' => $request->tgl_kp,
            'akhir_kp' => $request->akhir_kp,
            'terbit' => $request->terbit,
            'catatan' => $request->catatan,
            'ret_sk' => $request->ret_sk,
            'ret_kp' => $request->ret_kp,
            'denda_periode' => $request->denda_periode,
            'denda_admin' => $request->denda_admin,
            'pimpinan' => $request->pimpinan,
            'no_bend' => $request->no_bend,
            'ket' => $request->ket,
            // 'ket1' => $request->ket1
        ]);
        return redirect()->route('trayek')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function t_detail($id)
    {
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->find($id);
        return view('v_trayek/detail', compact('trayek'));
    }
    public function t_delete($id)
    {
        $trayek = Pemilik::find($id);
        $trayek->delete();
        return redirect()->route('trayek')->with('pesan', 'Data berhasil dihapus');
    }
    public function t_edit($id)
    {
        $lintrayek = Lintrayek::all();
        $jeniskend = Jeniskend::all();
        $trayek = Pemilik::with('lintrayek')->find($id);
        return view('v_trayek/edit', compact('trayek', 'lintrayek', 'jeniskend'));
    }
    public function t_update(Request $request, $id)
    {
        $request->validate([
            'lintrayek_id' => 'required',
            'urut' => 'required',
            'no_uji' => 'required',
            'no_kend' => 'required',
            'pemilik' => 'required',
            'perusahaan' => 'required',
            'alamat' => 'required',
            'no_rangka' => 'required',
            'mesin' => 'required',
            'seat' => 'required',
            'barang' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'jeniskend_id' => 'required',
            // 'hbs_uji' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'akhir_sk' => 'required',
            'no_kp' => 'required',
            'tgl_kp' => 'required',
            'akhir_kp' => 'required',
            'terbit' => 'required',
            'catatan' => 'required',
            'ret_sk' => 'required',
            'ret_kp' => 'required',
            'denda_periode' => 'required',
            'denda_admin' => 'required',
            'pimpinan' => 'required',
            'no_bend' => 'required',
            'ket' => 'required',
            // 'ket1' => 'required'
        ]);
        $trayek = Pemilik::find($id);
        $trayek->update([
            'lintrayek_id' => $request->lintrayek_id,
            'urut' => $request->urut,
            'no_uji' => $request->no_uji,
            'no_kend' => $request->no_kend,
            'pemilik' => $request->pemilik,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'no_rangka' => $request->no_rangka,
            'mesin' => $request->mesin,
            'seat' => $request->seat,
            'barang' => $request->barang,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'jeniskend_id' => $request->jeniskend_id,
            // 'hbs_uji' => $request->hbs_uji,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'akhir_sk' => $request->akhir_sk,
            'no_kp' => $request->no_kp,
            'tgl_kp' => $request->tgl_kp,
            'akhir_kp' => $request->akhir_kp,
            'terbit' => $request->terbit,
            'catatan' => $request->catatan,
            'ret_sk' => $request->ret_sk,
            'ret_kp' => $request->ret_kp,
            'denda_periode' => $request->denda_periode,
            'denda_admin' => $request->denda_admin,
            'pimpinan' => $request->pimpinan,
            'no_bend' => $request->no_bend,
            'ket' => $request->ket,
            // 'ket1' => $request->ket1
        ]);
        return redirect()->route('trayek')->with('pesan', 'Data berhasil diedit');
    }
    public function cetaksk($id)
    {
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->find($id);
        return view('v_trayek/cetaksk', compact('trayek'));
    }
    public function cetakkp($id)
    {
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->find($id);
        return view('v_trayek/cetakkp', compact('trayek'));
    }
    public function formkegiatan()
    {
        return view('v_trayek/formkegiatan');
    }
    public function formpenerimaan()
    {
        return view('v_trayek/formpenerimaan');
    }
    public function cetaklaporanTanggal($tglawal)
    {
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->where('terbit', $tglawal)->get();
        return view('v_trayek/cetaklaporan', compact('trayek'));
    }
    public function cetaklaporanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_trayek/cetaklaporan', compact('trayek'));
    }
    public function cetakpenerimaanTanggal($tglawal)
    {
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->where('terbit', $tglawal)->get();
        return view('v_trayek/cetakpenerimaan', compact('trayek'));
    }
    public function cetakpenerimaanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_trayek/cetakpenerimaan', compact('trayek'));
    }
    public function formpemilik()
    {
        return view('v_trayek/formpemilik');
    }
    public function cetakpemilik($pmlk)
    {
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->where('pemilik', $pmlk)->get();
        return view('v_trayek/cetakpemilik', compact('trayek'));
    }
    public function formperusahaan()
    {
        return view('v_trayek/formperusahaan');
    }
    public function cetakperusahaan($prshaan)
    {
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->where('perusahaan', $prshaan)->get();
        return view('v_trayek/cetakperusahaan', compact('trayek'));
    }
    public function formlintertentu()
    {
        $lintrayek = Lintrayek::all();
        $jeniskend = Jeniskend::all();
        $trayek = Pemilik::all();
        return view('v_trayek/formlintertentu', compact('lintrayek', 'jeniskend', 'trayek'));
    }
    public function cetaklintertentu($lin)
    {
        $lintrayek = Lintrayek::all();
        $trayek = Pemilik::with('lintrayek', 'jeniskend')->where('lintrayek_id', $lin)->get();
        return view('v_trayek/cetaklintertentu', compact('trayek', 'lintrayek'));
    }
}
