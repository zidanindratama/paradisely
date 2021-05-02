<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Virtual;
use App\User;
use App\Category;
use App\Exploration;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard(){
        $this->middleware('auth');
        $data = [
            'user' => User::all()->count(),
            'virtual_tour' => Virtual::all()->count(),
            'category' => Category::all()->count(),
            'eksplorasi' => Exploration::all()->count(),
        ];
        return view('dashboard.index', $data);
    }

    public function ekplorasi_mitra_index()
    {
        $explorations = Exploration::where('user_id', Auth::id())->get();
        return view('dashboard.eksplorasi-mitra.index', compact('explorations'));
    }

    public function ekplorasi_mitra_create()
    {
        $data = [
            'provinces' => Province::all(),
            'categories' => Category::all(),
        ];

        return view('dashboard.eksplorasi-mitra.create', $data);
    }

      public function ekplorasi_mitra_store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'category_id' => 'required',
            'pulau' => 'required',
            'deskripsi' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $eksplorasi = Exploration::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'province_id' => $request->province_id,
            'user_id' => Auth::id(),
            'city_id' => $request->city_id,
            'category_id' => $request->category_id,
            'pulau' => $request->pulau,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->nama),
            'gambar' => 'gis/img/uploads/'.$new_gambar,
        ]);

        $gambar->move('gis/img/uploads/', $new_gambar);
        
        if($eksplorasi){
            Alert::success('Berhasil','Data eksplorasi berhasil ditambah');
        }
        return redirect('/mitra/eksplorasi'); 
    }

    public function ekplorasi_mitra_edit($id)
    {
         $data = [
            'provinces' => Province::all(),
            'categories' => Category::all(),
            'eksplorasi' => Exploration::findOrFail($id),
        ];

        return view('dashboard.eksplorasi-mitra.edit', $data);
    }

    public function ekplorasi_mitra_update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'category_id' => 'required',
            'pulau' => 'required',
            'deskripsi' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $eksplorasi = Exploration::findorfail($id);

         if ($request->hasFile('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('gis/img/uploads/', $new_gambar);

            $eksplorasi_data = [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'province_id' => $request->province_id,
                'user_id' => Auth::id(),
                'city_id' => $request->city_id,
                'category_id' => $request->category_id,
                'pulau' => $request->pulau,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->nama),
                'gambar' => 'gis/img/uploads/'.$new_gambar,
            ];
        }
        else{
            $eksplorasi_data = [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'province_id' => $request->province_id,
                'user_id' => Auth::id(),
                'city_id' => $request->city_id,
                'category_id' => $request->category_id,
                'pulau' => $request->pulau,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->nama),
            ];
        }
    
        $validasi = [
            'eksplorasi_data' => $eksplorasi->update($eksplorasi_data),
        ];

        if($validasi){
            Alert::success('Berhasil','Data eksplorasi berhasil diubah');
        }
        return redirect('/mitra/eksplorasi'); 
    }

    public function ekplorasi_mitra_destroy($id)
    {
        $exploration = Exploration::findOrFail($id);
        $validasi = $exploration->delete($exploration);
        if($validasi) :
            Alert::success('Berhasil!', 'Data eksplorasi berhasil dihapus');
        endif;
        return redirect('/mitra/eksplorasi');
    }

    public function akun(){
        $user = User::where('id', Auth::id())->first();
        return view('dashboard.akun.index', compact('user'));
    }

    public function ubahAkunProses(Request $request, $id){
        
        $this->validate($request, [
            'name' => 'required',
        ]);

        $user = User::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('gis/img/uploads/', $new_gambar);

            $upload_data = [
                'name' => $request->name,
                'gambar' => 'gis/img/uploads/'.$new_gambar,
            ];
        }
        else{
            $upload_data = [
                'name' => $request->name,
            ];
        }
   
        $user->update($upload_data);

        if($user){
            Alert::success('Berhasil','Data akun berhasil diubah');
        }
        return redirect('/mitra/akun');
    }
}
