<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zoznam;
class ZoznamController extends Controller
{
    //
    public function index(){
        return view('zoznam');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $game = new Zoznam;
        $game->name = $request->input('name');
        $game->date = $request->input('date');
        $game->count = $request->input('count');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/zoznam/' . $filename);
            $game->image = $filename;
        }
        $game->save();
        return redirect()->back()->with('status', 'success');
    }
}
