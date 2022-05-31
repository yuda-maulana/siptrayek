<?php

namespace App\Http\Controllers;

use App\Models\Klsusaha;
use App\Models\Usaha;
use Illuminate\Http\Request;


class UsahaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Usaha = new Usaha();
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $usaha = Usaha::where('pemilik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('no_uji', 'LIKE', '%' . $request->search . '%')
                ->orWhere('no_kend', 'LIKE', '%' . $request->search . '%')
                ->orderby('terbit', 'desc');
        } else {
            $usaha = Usaha::orderby('terbit', 'desc');
        }
        $usaha = $usaha->paginate(6);
        return view('v_usaha/usaha', compact('usaha'));
    }
    public function detail($id)
    {
        $usaha = Usaha::find($id);
        return view('v_usaha/detail', compact('usaha'));
    }
    public function cetakkartu($id)
    {
        $usaha = Usaha::find($id);
        return view('v_usaha/cetakkartu', compact('usaha'));
    }
    public function add()
    {
        return view('v_usaha/add');
    }
    public function insert(Request $request)
    {
        Request()->validate([
            'lintasan' => 'required',
            'urut' => 'required',
            'no_uji' => 'required',
            'no_kend' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'perusahaan' => 'required',
            'kecamatan' => 'required',
            'layanan' => 'required',
            'domisili' => 'required',
            'status' => 'required',
            'rangka' => 'required',
            'mesin' => 'required',
            'jbb' => 'required',
            'orang' => 'required',
            'barang' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'akh_sk' => 'required',
            'no_kp' => 'required',
            'urut_kp' => 'required',
            'tgl_kp' => 'required',
            'akh_kp' => 'required',
            'terbit' => 'required',
            'no_bend' => 'required',
            'no_kartu' => 'required'
        ]);
        Usaha::create([
            'lintasan' => $request->lintasan,
            'urut' => $request->urut,
            'no_uji' => $request->no_uji,
            'no_kend' => $request->no_kend,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'perusahaan' => $request->perusahaan,
            'kecamatan' => $request->kecamatan,
            'layanan' => $request->layanan,
            'domisili' => $request->domisili,
            'status' => $request->status,
            'rangka' => $request->rangka,
            'mesin' => $request->mesin,
            'jbb' => $request->jbb,
            'orang' => $request->orang,
            'barang' => $request->barang,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'jenis' => $request->jenis,
            'kategori' => $request->kategori,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'akh_sk' => $request->akh_sk,
            'no_kp' => $request->no_kp,
            'urut_kp' => $request->urut_kp,
            'tgl_kp' => $request->tgl_kp,
            'akh_kp' => $request->akh_kp,
            'terbit' => $request->terbit,
            'no_bend' => $request->no_bend,
            'no_kartu' => $request->no_kartu
        ]);
        return redirect()->route('usaha')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $usaha = Usaha::find($id);
        return view('v_usaha/edit', compact('usaha'));
    }
    public function update(Request $request, $id)
    {
        Request()->validate([
            'lintasan' => 'required',
            'urut' => 'required',
            'no_uji' => 'required',
            'no_kend' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'perusahaan' => 'required',
            'kecamatan' => 'required',
            'layanan' => 'required',
            'domisili' => 'required',
            'status' => 'required',
            'rangka' => 'required',
            'mesin' => 'required',
            'jbb' => 'required',
            'orang' => 'required',
            'barang' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'akh_sk' => 'required',
            'no_kp' => 'required',
            'urut_kp' => 'required',
            'tgl_kp' => 'required',
            'akh_kp' => 'required',
            'terbit' => 'required',
            'no_bend' => 'required',
            'no_kartu' => 'required'
        ]);
        $usaha = Usaha::find($id);
        $usaha->update([
            'lintasan' => $request->lintasan,
            'urut' => $request->urut,
            'no_uji' => $request->no_uji,
            'no_kend' => $request->no_kend,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'perusahaan' => $request->perusahaan,
            'kecamatan' => $request->kecamatan,
            'layanan' => $request->layanan,
            'domisili' => $request->domisili,
            'status' => $request->status,
            'rangka' => $request->rangka,
            'mesin' => $request->mesin,
            'jbb' => $request->jbb,
            'orang' => $request->orang,
            'barang' => $request->barang,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'jenis' => $request->jenis,
            'kategori' => $request->kategori,
            'no_sk' => $request->no_sk,
            'tgl_sk' => $request->tgl_sk,
            'akh_sk' => $request->akh_sk,
            'no_kp' => $request->no_kp,
            'urut_kp' => $request->urut_kp,
            'tgl_kp' => $request->tgl_kp,
            'akh_kp' => $request->akh_kp,
            'terbit' => $request->terbit,
            'no_bend' => $request->no_bend,
            'no_kartu' => $request->no_kartu
        ]);
        return redirect()->route('usaha')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function delete($id)
    {
        $usaha = Usaha::find($id);
        $usaha->delete();
        return redirect()->route('usaha')->with('pesan', 'Data berhasil dihapus');
    }
    public function formkegiatan()
    {
        return view('v_usaha/formkegiatan');
    }
    public function formpenerimaan()
    {
        return view('v_usaha/formpenerimaan');
    }

    public function cetaklaporanTanggal($tglawal)
    {
        $usaha = Usaha::where('terbit', $tglawal)->get();
        return view('v_usaha/cetaklaporan', compact('usaha'));
    }
    public function cetaklaporanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $usaha = Usaha::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_usaha/cetaklaporan', compact('usaha'));
    }
    public function cetakpenerimaanTanggal($tglawal)
    {
        $usaha = Usaha::where('terbit', $tglawal)->get();
        return view('v_usaha/cetakpenerimaan', compact('usaha'));
    }
    public function cetakpenerimaanPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $usaha = Usaha::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_usaha/cetakpenerimaan', compact('usaha'));
    }


    public function klasifikasi(Request $request)
    {
        if ($request->has('search')) {
            $klsusaha = Klsusaha::where('x_kelas', 'LIKE', '%' . $request->search . '%')
                ->orWhere('pemilik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('x_katagori', 'LIKE', '%' . $request->search . '%')
                ->orderby('terbit', 'desc');
        } else {
            $klsusaha = Klsusaha::orderby('terbit', 'desc');
        }
        $klsusaha = $klsusaha->paginate(0);
        return view('/v_usaha/klasifikasiretri', compact('klsusaha'));
    }
    public function addklasifikasi()
    {
        return view('v_usaha/addklasifikasi');
    }
    public function insertklasifikasi(Request $request)
    {
        Request()->validate([
            'no_uji' => 'required',
            'no_kend' => 'required',
            'pemilik' => 'required',
            'jbb' => 'required',
            'orang' => 'required',
            'x_kelas' => 'required',
            'n_ret' => 'required',
            'x_katagori' => 'required',
            'terbit' => 'required'
        ]);
        Klsusaha::create($request->all());
        return redirect()->route('klasifikasi')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function editklasifikasi($id)
    {
        $klsusaha = Klsusaha::find($id);
        return view('v_usaha/editklasifikasi', compact('klsusaha'));
    }
    public function updateklasifikasi(Request $request, $id)
    {
        Request()->validate([
            'no_uji' => 'required',
            'no_kend' => 'required',
            'pemilik' => 'required',
            'jbb' => 'required',
            'orang' => 'required',
            'x_kelas' => 'required',
            'n_ret' => 'required',
            'x_katagori' => 'required',
            'terbit' => 'required'
        ]);
        $klsusaha = Klsusaha::find($id);
        $klsusaha->update($request->all());
        return redirect()->route('klasifikasi')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function deleteklasifikasi($id)
    {
        $klsusaha = Klsusaha::find($id);
        $klsusaha->delete();
        return redirect()->route('klasifikasi')->with('pesan', 'Data berhasil dihapus');
    }
    public function formklasifikasiglobal()
    {
        return view('v_usaha/formklasifikasiglobal');
    }
    public function klasifikasiglobalTanggal($tglawal)
    {
        $penumpang = Klsusaha::where('x_kelas', 'Mobil Penumpang (s/d 8 tempat duduk)')->count();
        $kecil = Klsusaha::where('x_kelas', 'Mobil Bus Kecil (9 s/d 15 tempat duduk)')->count();
        $sedang = Klsusaha::where('x_kelas', 'Mobil Bus Sedang (16 s/d 25 tempat duduk)')->count();
        $besar = Klsusaha::where('x_kelas', 'Mobil Bus Besar (26 tempat duduk atau lebih)')->count();
        $jbbkcl = Klsusaha::where('x_kelas', 'JBB s/d 5.000 Kg.')->count();
        $jbbsdng = Klsusaha::where('x_kelas', 'JBB 5.001 s/d 8.000 Kg.')->count();
        $jbbmngah = Klsusaha::where('x_kelas', 'JBB 8.001 s/d 15.000 Kg.')->count();
        $jbbbesar = Klsusaha::where('x_kelas', 'JBB lebih dari 15.000 Kg.')->count();
        $klsusaha = Klsusaha::where('terbit', $tglawal)->get();
        return view('v_usaha/klasifikasiglobal', compact('klsusaha', 'penumpang', 'kecil', 'sedang', 'besar', 'jbbkcl', 'jbbsdng', 'jbbmngah', 'jbbbesar'));
    }
    public function klasifikasiglobalPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $penumpang = Klsusaha::where('x_kelas', 'Mobil Penumpang (s/d 8 tempat duduk)')->count();
        $kecil = Klsusaha::where('x_kelas', 'Mobil Bus Kecil (9 s/d 15 tempat duduk)')->count();
        $sedang = Klsusaha::where('x_kelas', 'Mobil Bus Sedang (16 s/d 25 tempat duduk)')->count();
        $besar = Klsusaha::where('x_kelas', 'Mobil Bus Besar (26 tempat duduk atau lebih)')->count();
        $jbbkcl = Klsusaha::where('x_kelas', 'JBB s/d 5.000 Kg.')->count();
        $jbbsdng = Klsusaha::where('x_kelas', 'JBB 5.001 s/d 8.000 Kg.')->count();
        $jbbmngah = Klsusaha::where('x_kelas', 'JBB 8.001 s/d 15.000 Kg.')->count();
        $jbbbesar = Klsusaha::where('x_kelas', 'JBB lebih dari 15.000 Kg.')->count();
        $klsusaha = Klsusaha::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_usaha/klasifikasiglobal', compact('klsusaha', 'penumpang', 'kecil', 'sedang', 'besar', 'jbbkcl', 'jbbsdng', 'jbbmngah', 'jbbbesar'));
    }
    public function formklasifikasidetail()
    {
        return view('v_usaha/formklasifikasidetail');
    }
    public function klasifikasidetailTanggal($tglawal)
    {
        $penumpang = Klsusaha::where('x_kelas', 'Mobil Penumpang (s/d 8 tempat duduk)')->count();
        $kecil = Klsusaha::where('x_kelas', 'Mobil Bus Kecil (9 s/d 15 tempat duduk)')->count();
        $sedang = Klsusaha::where('x_kelas', 'Mobil Bus Sedang (16 s/d 25 tempat duduk)')->count();
        $besar = Klsusaha::where('x_kelas', 'Mobil Bus Besar (26 tempat duduk atau lebih)')->count();
        $jbbkcl = Klsusaha::where('x_kelas', 'JBB s/d 5.000 Kg.')->count();
        $jbbsdng = Klsusaha::where('x_kelas', 'JBB 5.001 s/d 8.000 Kg.')->count();
        $jbbmngah = Klsusaha::where('x_kelas', 'JBB 8.001 s/d 15.000 Kg.')->count();
        $jbbbesar = Klsusaha::where('x_kelas', 'JBB lebih dari 15.000 Kg.')->count();
        $klsusaha = Klsusaha::where('terbit', $tglawal)->get();
        return view('v_usaha/klasifikasidetail', compact('klsusaha', 'penumpang', 'kecil', 'sedang', 'besar', 'jbbkcl', 'jbbsdng', 'jbbmngah', 'jbbbesar'));
    }
    public function klasifikasidetailPertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal" . $tglawal, "Tanggal Akhir" . $tglakhir);
        $penumpang = Klsusaha::where('x_kelas', 'Mobil Penumpang (s/d 8 tempat duduk)')->count();
        $kecil = Klsusaha::where('x_kelas', 'Mobil Bus Kecil (9 s/d 15 tempat duduk)')->count();
        $sedang = Klsusaha::where('x_kelas', 'Mobil Bus Sedang (16 s/d 25 tempat duduk)')->count();
        $besar = Klsusaha::where('x_kelas', 'Mobil Bus Besar (26 tempat duduk atau lebih)')->count();
        $jbbkcl = Klsusaha::where('x_kelas', 'JBB s/d 5.000 Kg.')->count();
        $jbbsdng = Klsusaha::where('x_kelas', 'JBB 5.001 s/d 8.000 Kg.')->count();
        $jbbmngah = Klsusaha::where('x_kelas', 'JBB 8.001 s/d 15.000 Kg.')->count();
        $jbbbesar = Klsusaha::where('x_kelas', 'JBB lebih dari 15.000 Kg.')->count();
        $klsusaha = Klsusaha::whereBetween('terbit', [$tglawal, $tglakhir])->get();
        return view('v_usaha/klasifikasidetail', compact('klsusaha', 'penumpang', 'kecil', 'sedang', 'besar', 'jbbkcl', 'jbbsdng', 'jbbmngah', 'jbbbesar'));
    }
}
