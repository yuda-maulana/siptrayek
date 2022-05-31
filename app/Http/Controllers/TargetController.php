<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target;

class TargetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Target = new Target();
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $target = Target::where('tahun', 'LIKE', '%' . $request->search . '%')
                ->orWhere('kode_rek', 'LIKE', '%' . $request->search . '%')
                ->orWhere('nama_rek', 'LIKE', '%' . $request->search . '%')
                ->orderby('tahun', 'desc');
        } else {
            $target = Target::orderby('tahun', 'desc');
        }
        $target = $target->paginate(5);
        return view('v_target/target', compact('target'));
    }
    public function add()
    {
        return view('v_target/add');
    }
    public function insert(Request $request)
    {
        Request()->validate([
            'kode_rek' => 'required',
            'nama_rek' => 'required',
            'target1' => 'required',
            'target2' => 'required',
            'target3' => 'required',
            'tahun' => 'required'
        ]);
        Target::create([
            'kode_rek' => $request->kode_rek,
            'nama_rek' => $request->nama_rek,
            'target1' => $request->target1,
            'target2' => $request->target2,
            'target3' => $request->target3,
            'tahun' => $request->tahun
        ]);
        return redirect()->route('target')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $target = Target::find($id);
        return view('v_target/edit', compact('target'));
    }
    public function update(Request $request, $id)
    {
        Request()->validate([
            'kode_rek' => 'required',
            'nama_rek' => 'required',
            'target1' => 'required',
            'target2' => 'required',
            'target3' => 'required',
            'tahun' => 'required'
        ]);
        $target = Target::find($id);
        $target->update([
            'kode_rek' => $request->kode_rek,
            'nama_rek' => $request->nama_rek,
            'target1' => $request->target1,
            'target2' => $request->target2,
            'target3' => $request->target3,
            'tahun' => $request->tahun
        ]);
        return redirect()->route('target')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function delete($id)
    {
        $target = Target::find($id);
        $target->delete();
        return redirect()->route('target')->with('pesan', 'Data berhasil dihapus');
    }
}
