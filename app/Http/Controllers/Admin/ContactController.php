<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Throwable;

class ContactController extends Controller
{
    public function index(){

        try {
            $data = Contact::latest()->paginate(15);
            return view('admin.contact.index',compact('data'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            Contact::find($id)->delete();
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
