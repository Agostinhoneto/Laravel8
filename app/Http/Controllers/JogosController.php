<?php

namespace App\Http\Controllers;

use App\Models\Jogos;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogos::all(); 
        return view('jogos.index',['jogos'=>$jogos]);
    }
    public function create()
    {
       return view('jogos.create');
    }
    public function store(Request $request)
    {
        Jogos::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id)
    {
      $jogos = Jogos::where('id',$id)->first();
    
      if(!empty($jogos)){
            return view('jogos.edit',['jogos'=>$jogos]);
        }
      else{
        return redirect()->route('jogos-index');       
      } 
    }
}
