<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Virtual;
use App\User;
use App\Category;
use App\Comment;
use App\Exploration;
use DB;

class ParadiselyController extends Controller
{
    public function eksplorasi(){
        // $data = [
        //     'explorations' => Exploration::all(),
        //     'categories' => Category::all(),
        //     'comments' => Comment::all(),
        // ];

        $explorations = Exploration::all();
        $categories = Category::all();
        // $comments = Comment::where('exploration_id', $explorations[0]['id'])->get();

        // return $comments[0]['id'];
        return view('paradisely.eksplorasi', compact('explorations', 'categories'));
    }

    public function eksplorasi_detail($slug){
        // $data = [
        //     'exploration' => Exploration::where('slug', $slug)->get(),
        //     'comments' => Comment::where('exploration_id', $exploration['id'])
        // ];

        $exploration = Exploration::where('slug', $slug)->get();
        // return $exploration[0]['nama'];
        $comments = Comment::where('exploration_id', $exploration[0]['id'])->get();

        return view('dashboard.eksplorasi.show', compact('exploration', 'comments'));
    }

    public function wisata(){
        return view('paradisely.wisata');
    }

    public function kontak(){
        return view('paradisely.kontak');
    }

    public function virtual(){
        $virtuals = Virtual::all();
        return view('paradisely.virtual', compact('virtuals'));
    }

    public function virtual_detail($slug) {
        $virtual = Virtual::where('slug', $slug)->get();
        return view('dashboard.virtual.show', compact('virtual'));
    }
    
    public function tentang(){
        return view('paradisely.tentang');
    }

    public function peta(){
        return view('paradisely.peta');
    }
}
