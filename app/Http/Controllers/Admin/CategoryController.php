<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\UplodeTrait;
use App\Models\Category;
use Illuminate\Http\Request;
use Throwable;

class CategoryController extends Controller
{
    use UplodeTrait;
    public function index(){
        try {
            $datas = Category::paginate(15);
            return view('admin.category.index',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){
        try {
            if ($delete = Category::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.category.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Category::create([
                'image'=>$this->uploud($request->image),
                'title_ar'=>$request->title_ar,
                'title_en'=>$request->title_en,
                'title_heb'=>$request->title_heb,
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
