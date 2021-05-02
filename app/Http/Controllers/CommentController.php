<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exploration;
use App\Comment;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
    public function store(Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'komentar' => 'required',
            'email' => 'required',
        ]);

        $eks = Exploration::findOrFail($id);

        $validasi = Comment::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'komentar' => $request->komentar,
            'exploration_id' => $eks['id'],
        ]);

        if($validasi){
            Alert::success('Berhasil', 'Komentar berhasil ditambah');
        }

        return redirect('/eksplorasi/'.$eks['slug']);
    }

    public function contact_store(Request $request){
        $request->validate([
            'nama' => 'required',
            'pesan' => 'required',
            'pesan' => 'required',
        ]);

        $validasi = Contact::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        if($validasi){
            Alert::success('Berhasil', 'Pesan anda berhasil dikirim');
        }

        return redirect('/kontak');
    }
}
