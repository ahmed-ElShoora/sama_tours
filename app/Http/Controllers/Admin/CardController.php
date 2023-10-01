<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;

class CardController extends Controller
{
    use UplodeTrait;
    public function index(){
        try {
            $datas = Card::paginate(15);
            return view('admin.card.index',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){
        try {
            if ($delete = Card::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.card.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Card::create([
                'image'=>$this->uploud($request->image),
                'title_ar'=>$request->title_ar,
                'title_en'=>$request->title_en,
                'title_heb'=>$request->title_heb,
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en,
                'text_heb'=>$request->text_heb
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
