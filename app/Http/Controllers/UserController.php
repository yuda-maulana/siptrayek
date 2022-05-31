<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use File;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('v_profile/profile');
    }
    public function edit($id)
    {
        $profile = User::find($id);
        return view('v_profile/edit', compact('profile'));
    }
    public function update(Request $request, $id)
    {
        Request()->validate([
            'name' => 'required',
            'nip' => 'required',
            'email' => 'required',
        ]);

        $profile = User::find($id);
        $profile->update($request->all());
        return redirect()->route('profile')->with('pesan', 'Data berhasil diedit');
    }
    public function editpassword()
    {
        return view('v_profile/editpassword');
    }
    public function updatepassword(Request $request)
    {
        $profile = Auth::user();

        $userPassword = $profile->password;

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password' => 'password not match']);
        }
        $profile->password = Hash::make($request->password);
        $profile->save();
        return redirect()->route('profile')->with('pesan', 'Password berhasil diedit');
    }



    //user
    public function u_index(Request $request)
    {
        if ($request->has('search')) {
            $user = User::with('level')->where('name', 'LIKE', '%' . $request->search . '%')
                ->orderby('name', 'asc');
        } else {
            $user = User::with('level')->orderby('name', 'asc');
        }
        $user = $user->paginate(5);
        return view('v_user/user', compact('user'));
    }
    public function u_add()
    {
        $level = Level::all();
        $user = User::all();
        return view('v_user/add', compact('user', 'level'));
    }
    public function u_insert(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nip' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'level_id' => ['required'],
            'foto' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048']
        ]);


        $image = $request->file('foto');
        $new_image = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('foto'), $new_image);
        User::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
            'foto' => $new_image
        ]);

        return redirect()->route('user')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function u_detail($id)
    {
        $user = User::with('level')->find($id);
        return view('v_user/detail', compact('user'));
    }
    public function u_delete($id)
    {
        $user = User::find($id);
        File::delete('foto/' . $user->foto);
        $user->delete();
        return redirect()->route('user')->with('pesan', 'Data berhasil dihapus');
    }
    public function u_edit($id)
    {
        $level = Level::all();
        $user = User::with('level')->find($id);
        return view('v_user/edit', compact('user', 'level'));
    }
    public function u_update(Request $request, $id)
    {
        $old_image_name = $request->hidden_image;
        $image = $request->file('foto');
        if ($image != '') {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'nip' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'level_id' => ['required'],
                'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048']
            ]);
            $image_name = $old_image_name;
            $image->move(public_path('foto'), $image_name);
        } else {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'nip' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'level_id' => ['required']
            ]);
            $image_name = $old_image_name;
        }
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'email' => $request->email,
            'level_id' => $request->level_id,
            'foto'  => $image_name
        ]);
        return redirect()->route('user')->with('pesan', 'Data berhasil diedit');
    }
}
