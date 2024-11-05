<?php

namespace App\Http\Controllers;

use Log;
use App\Models\User;
use App\Models\Release;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();

        return view('pages.admin.dashboard', compact('users'));
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin_emails = [
            'imrona463@gmail.com'
        ];

        if (!in_array($request->email, $admin_emails)) {
             return back()->withErrors([
                'email' => 'Email salah',
            ])->onlyInput('email');
        }

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // Logout user
        auth()->logout();

        // Hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman utama
        return redirect('/admin/login');
    }

    public function release() {
        $releases = Release::all();

        return view('pages.admin.release', compact('releases'));
    }

    public function newRelease(Request $request) {
        // Validasi memastikan salah satu dari url atau apk_file tersedia
        $request->validate([
            'version' => 'required|string',
            'url' => 'nullable|string|required_without:apk_file',
            'changelog' => 'required|string'
        ]);

        // Ambil versi terbaru dari database
        $latestRelease = Release::orderBy('created_at', 'desc')->first();

        // Cek jika ada versi sebelumnya dan validasi apakah versi baru lebih tinggi
        if ($latestRelease && version_compare($request->version, $latestRelease->version, '<=')) {
            return back()->with('error', 'Versi yang dimasukkan harus lebih tinggi dari versi terbaru (' . $latestRelease->version . ')');
        }

        try {
            DB::beginTransaction();

            $release = new Release();
            $release->version = $request->version;
            // Menggunakan URL yang diunggah atau URL yang dimasukkan sebagai link
            $release->url = $request->url;
            $release->changelog = $request->changelog;
            $release->save();

            DB::commit();

            return back()->with('success', 'Rilis baru berhasil ditambahkan');
            
        } catch (\Throwable $th) {
            DB::rollBack();
            
            return back()->with('error', 'Terjadi kesalahan saat menambahkan rilis baru');
        }
    }
}
