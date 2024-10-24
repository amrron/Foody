<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\SummaryResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UpdateProfileImageRequest;
use App\Notifications\EmailVerificationNotification;

class UserController extends Controller
{
    public function register(RegisterRequest $request) {
        $validatedUser = $request->validated();

        try {
            DB::beginTransaction();

            $user = User::create($validatedUser);

            Bmi::create([
                'user_id' => $user->id,
                'tinggi_badan' => $validatedUser['tinggi_badan'],
                'berat_badan' => $validatedUser['berat_badan']
            ]);

            DB::commit();

            $user->notify(new EmailVerificationNotification());

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil membuat akun',
                'data' => $user
            ], 201);

        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal membuat akun',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    public function login(LoginRequest $request) {
        $validatedCredetial = $request->validated();

        if (auth()->attempt($validatedCredetial)) {
            $user = auth()->user();
            $token = $user->createToken("api_token")->plainTextToken;

            return response()->json([
                'success' => true,
                "status" => "success",
                "message" => "Login berhasil",
                "token" => $token
            ], 201);
        }

        return response()->json([
            "success" => false,
            "status" => "error",
            "message" => "Username atau password salah"
        ], 401);
        
    }

    public function logout() {
        auth()->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Logout berhasil',
        ], 200);
    }

    public function profile() {
        $user = auth()->user();

        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => 'Berhasil mengambil data',
            'data' => new UserResource($user),
            'summary' => new SummaryResource($user),
        ], 200);
    }

    public function update(UserUpdateRequest $request) {

        $data = $request->validated();
        $user = auth()->user();
        
        try {
            DB::beginTransaction();
            
            if(isset($data['name'])){
                $user->name = $data['name'];
            }
            if(isset($data['email'])){
                $user->email = $data['email'];
            }
            if(isset($data['jenis_kelamin'])){
                $user->jenis_kelamin = $data['jenis_kelamin'];
            }
            if(isset($data['tanggal_lahir'])){
                $user->tanggal_lahir = $data['tanggal_lahir'];
            }
            if(isset($data['aktivitas'])){
                $user->aktivitas = $data['aktivitas'];
            }
            if(isset($data['password'])){
                $user->password = $data['password'];
            }
    
            $user->save();

            DB::commit();
    
            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil mengupdate data user',
                'data' => new UserResource($user)
            ], 201);
            
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal mengupdate data user',
                'error' => $th->getMessage()
            ], 500);
        }
        
    }

    public function summary() {
        try {
            $user = auth()->user();

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil mendapatkan data user',
                'data' => new SummaryResource($user),
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal mendapatkan data user',
                'error' => $th->getMessage()
            ]);
        }
    }

    public function updateImage(UpdateProfileImageRequest $request) {
        $validatedImages = $request->validated();

        $user = auth()->user();

        try {
            DB::beginTransaction();

            if ($request->file('gambar')) {
                if ($user->gambar && Storage::disk('public')->exists($user->gambar)) {
                    Storage::disk('public')->delete($user->gambar);
                }

                $user->gambar = $request->file('gambar')->store('profile', 'public');
                $user->save();

                DB::commit();
            }

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil mengupdate gambar',
                'data' => new UserResource($user)
            ], 201);

        } catch (\Throwable $th) {
            DB::rollBack(); 

            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal mengupdate gambar',
                'error' => $th->getMessage()
            ], 400);
        }
    }

    public function removeImage() {
        $user = auth()->user();

        try {
            DB::beginTransaction();

            if ($user->gambar && Storage::disk('public')->exists($user->gambar)) {
                Storage::disk('public')->delete($user->gambar);
                $user->gambar = null;
                $user->save();
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'status' => 'success',
                'message' => 'Berhasil menghapus gambar',
                'data' => new UserResource($user)
            ]);

        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'status' => 'error',
                'message' => 'Gagal menghapus gambar',
                'error' => $th->getMessage()
            ], 501);
        }
    }
}
