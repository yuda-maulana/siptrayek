<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bukubesar;
use App\Models\Target;

class BukubesarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Bukubesar = new Bukubesar();
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $bukubesar = Bukubesar::with('target')->where('tahun', 'LIKE', '%' . $request->search . '%')
                ->orWhere('nama_rek', 'LIKE', '%' . $request->search . '%')
                ->orderby('tahun', 'desc');
        } else {
            $bukubesar = Bukubesar::orderby('tahun', 'desc');
        }
        $bukubesar = $bukubesar->paginate(5);
        return view('v_bukubesar/bukubesar', compact('bukubesar'));
    }
    public function add()
    {
        $target = Target::all();
        return view('v_bukubesar/add', compact('target'));
    }
    public function insert(Request $request)
    {
        Request()->validate([
            'tahun' => 'required',
            'kode_rek' => 'required',
            'nama_rek' => 'required',
            'tgl_terima' => 'required',
            'jml_terima' => 'required',
            'tgl_setor' => 'required',
            'no_setor' => 'required',
            'jm_tg_i' => 'required',
            'jm_tg_l' => 'required',
            'jm_stg_i' => 'required',
            'jm_bl_i' => 'required',
            'jm_bl_l' => 'required',
            'jm_sbl_i' => 'required',
            'target_id' => 'required'
        ]);
        Bukubesar::create($request->all());
        return redirect()->route('bukubesar')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $target = Target::all();
        $bukubesar = Bukubesar::find($id);
        return view('v_bukubesar/edit', compact('bukubesar', 'target'));
    }
    public function update(Request $request, $id)
    {
        Request()->validate([
            'tahun' => 'required',
            'kode_rek' => 'required',
            'nama_rek' => 'required',
            'tgl_terima' => 'required',
            'jml_terima' => 'required',
            'tgl_setor' => 'required',
            'no_setor' => 'required',
            'jm_tg_i' => 'required',
            'jm_tg_l' => 'required',
            'jm_stg_i' => 'required',
            'jm_bl_i' => 'required',
            'jm_bl_l' => 'required',
            'jm_sbl_i' => 'required',
            'target_id' => 'required'
        ]);
        $bukubesar = Bukubesar::find($id);
        $bukubesar->update($request->all());
        return redirect()->route('bukubesar')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function delete($id)
    {
        $bukubesar = Bukubesar::find($id);
        $bukubesar->delete();
        return redirect()->route('bukubesar')->with('pesan', 'Data berhasil dihapus');
    }
    public function detail($id)
    {
        $bukubesar = Bukubesar::with('target')->find($id);
        return view('v_bukubesar/detail', compact('bukubesar'));
    }
    public function cetakharianpenerimaan($id)
    {
        $bukubesar = Bukubesar::with('target')->find($id);
        return view('v_bukubesar/cetakharianpenerimaan', compact('bukubesar'));
    }
    public function cetakbulananpenerimaan($id)
    {
        $bukubesar = Bukubesar::with('target')->find($id);
        return view('v_bukubesar/cetakbulananpenerimaan', compact('bukubesar'));
    }
}
