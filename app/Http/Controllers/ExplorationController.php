<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exploration;
use App\Category;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ExplorationController extends Controller
{
    public function __construct(){
        $this->middleware([
           'auth',
           'privilege:Administrator'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $explorations = Exploration::paginate(10);
        return view('dashboard.eksplorasi.index', compact('explorations'));
    }

    public function getSubProvince($id){
        echo json_encode(DB::table('indonesia_cities')->where('province_id', $id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'provinces' => Province::all(),
            'categories' => Category::all(),
        ];

        return view('dashboard.eksplorasi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect('/dashboard/eksplorasi'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = [
            'provinces' => Province::all(),
            'categories' => Category::all(),
            'eksplorasi' => Exploration::findOrFail($id),
        ];

        return view('dashboard.eksplorasi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        return redirect('/dashboard/eksplorasi'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
