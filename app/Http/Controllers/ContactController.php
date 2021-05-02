<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware([
           'auth',
           'privilege:Administrator'
        ]);
    }

    public function index(){
        $contacts = Contact::paginate(10);
        return view('dashboard.kontak.index', compact('contacts'));
    }

    public function show($id){
        $contact = Contact::findOrFail($id);
        return view('dashboard.kontak.show', compact('contact'));
    }
}
