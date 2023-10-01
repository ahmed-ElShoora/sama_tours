<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Throwable;

class UserController extends Controller
{
    public function index(){
        try {
            $datas = User::paginate(15);
            return view('admin.user.index',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
