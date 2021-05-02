<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Virtual;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class VirtualController extends Controller
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
        $virtuals = Virtual::paginate(5);
        return view('dashboard.virtual.index', compact('virtuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.virtual.create');
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
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $virtual = Virtual::create([
            'nama' => $request->nama,
            'link_virtual' => $request->link_virtual,
            'slug' => Str::slug($request->nama),
            'gambar' => 'gis/img/uploads/'.$new_gambar,
        ]);

        $gambar->move('gis/img/uploads/', $new_gambar);
        
        if($virtual){
            Alert::success('Berhasil','Data virtual berhasil ditambah');
        }
        return redirect('/dashboard/virtual'); 
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
            'virtual' => Virtual::findOrFail($id),
        ];

        return view('dashboard.virtual.edit', $data);
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
        $virtual = Virtual::findorfail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('gis/img/uploads/', $new_gambar);

            $virtual_data = [
                'nama' => $request->nama,
                'link_virtual' => $request->link_virtual,
                'gambar' => 'gis/img/uploads/'.$new_gambar,
                'slug' => Str::slug($request->nama),
            ];
        }
        else{
            $jenjang_data = [
                'nama' => $request->nama,   
                'link_virtual' => $request->link_virtual,
                'slug' => Str::slug($request->nama),
            ];
        }
    
        $validasi = [
            'virtual_data' => $virtual->update($virtual_data),
        ];

        if($validasi){
            Alert::success('Berhasil!','Data virtual berhasil diubah');
        }
        return redirect('/dashboard/virtual'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $virtual = Virtual::findOrFail($id);
        $validasi = $virtual->delete($virtual);
        if($validasi) :
            Alert::success('Berhasil!', 'Data virtual berhasil dihapus');
        endif;
        return redirect('/dashboard/virtual');
    }
}
