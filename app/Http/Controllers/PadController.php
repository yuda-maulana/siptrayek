<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pad;

class PadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Pad = new Pad();
    }
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $pad = Pad::where('grup', 'LIKE', '%' . $request->search . '%')
                ->orWhere('no_rek', 'LIKE', '%' . $request->search . '%')
                ->orWhere('uraian', 'LIKE', '%' . $request->search . '%')
                ->orWhere('no_bukti', 'LIKE', '%' . $request->search . '%')
                ->orderby('tanggal', 'desc');
        } else {
            $pad = Pad::orderby('tanggal', 'desc');
        }
        $pad = $pad->paginate(6);
        return view('v_pad/pad', compact('pad'));
    }
    public function detail($id)
    {
        $pad = Pad::find($id);
        return view('v_pad/detail', compact('pad'));
    }
    public function add()
    {
        return view('v_pad/add');
    }
    public function insert(Request $request)
    {
        Request()->validate([
            'kod_rek' => 'required',
            'no_rek' => 'required',
            'nama_rek' => 'required',
            'tanggal' => 'required',
            'no_bukti' => 'required',
            'grup' => 'required',
            'urut' => 'required',
            'uraian' => 'required',
            'unit' => 'required',
            'retribusi' => 'required',
            'jumlah' => 'required',
        ]);
        Pad::create([
            'kod_rek' => $request->kod_rek,
            'no_rek' => $request->no_rek,
            'nama_rek' => $request->nama_rek,
            'tanggal' => $request->tanggal,
            'no_bukti' => $request->no_bukti,
            'grup' => $request->grup,
            'urut' => $request->urut,
            'uraian' => $request->uraian,
            'unit' => $request->unit,
            'retribusi' => $request->retribusi,
            'jumlah' => $request->jumlah
        ]);
        return redirect()->route('pad')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $pad = Pad::find($id);
        return view('v_pad/edit', compact('pad'));
    }
    public function update(Request $request, $id)
    {
        Request()->validate([
            'kod_rek' => 'required',
            'no_rek' => 'required',
            'nama_rek' => 'required',
            'tanggal' => 'required',
            'no_bukti' => 'required',
            'grup' => 'required',
            'urut' => 'required',
            'uraian' => 'required',
            'unit' => 'required',
            'retribusi' => 'required',
            'jumlah' => 'required',
        ]);
        $pad = Pad::find($id);
        $pad->update([
            'kod_rek' => $request->kod_rek,
            'no_rek' => $request->no_rek,
            'nama_rek' => $request->nama_rek,
            'tanggal' => $request->tanggal,
            'no_bukti' => $request->no_bukti,
            'grup' => $request->grup,
            'urut' => $request->urut,
            'uraian' => $request->uraian,
            'unit' => $request->unit,
            'retribusi' => $request->retribusi,
            'jumlah' => $request->jumlah
        ]);
        return redirect()->route('pad')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function delete($id)
    {
        $pad = Pad::find($id);
        $pad->delete();
        return redirect()->route('pad')->with('pesan', 'Data berhasil dihapus');
    }
    public function cetaklaporan($id)
    {
        $pad = Pad::find($id);
        return view('v_pad/cetaklaporan', compact('pad'));
    }
}
