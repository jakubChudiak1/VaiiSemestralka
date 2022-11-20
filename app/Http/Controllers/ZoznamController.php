<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zoznam;
use Illuminate\Support\Facades\File;
class ZoznamController extends Controller
{
    //
    public function index(){
        $games = Zoznam::all();
        return view('zoznam',compact('games'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $game = new Zoznam;
        $game->name = $request->input('name');
        $game->date = $request->input('date');
        $game->count = $request->input('count');
        if($request->hasFile('pic'))
        {
            $file = $request->file('pic');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/zoznam/', $filename);
            $game->image = $filename;
        }
        $game->save();
        return redirect()->back()->with('status', 'success');
    }
    public function edit($id){
        $game = Zoznam::find($id);
        return view('edit',compact('game'));
    }
    public function update(Request $request, $id){
        $game = Zoznam::find($id);
        $game->name = $request->input('name');
        $game->date = $request->input('date');
        $game->count = $request->input('count');
        if($request->hasFile('pic')){
            $destination = 'uploads/zoznam/'.$game->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('pic');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/zoznam/', $filename);
            $game->image = $filename;
        }
        $game->update();
        return redirect()->back()->with('status', 'success');
    }

    public function delete($id){

        $game = Zoznam::find($id);
        $destination = 'uploads/zoznam/'.$game->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $game->delete();
        return redirect()->back()->with('status', 'success');
    }
}
