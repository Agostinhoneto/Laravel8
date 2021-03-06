<?php

namespace App\Http\Controllers;

use App\Http\Requests\JogosStoreRequest;
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

    public function store(JogosStoreRequest $request)
    {      
        Jogos::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function storeJogos(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'categoria' => 'required',
      ]);
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

    public function update(Request $request,$id)
    {
      $data = [
        'nome' => $request->nome,
        'categoria' => $request->categoria,
        'ano_criacao' => $request->ano_criacao,
        'valor'   => $request->valor,
      ];

      Jogos::where('id',$id)->update($data);
      return redirect()->route('jogos-index');      
    }

    public function destroy($id)
    {
      //dd($id);
      Jogos::where('id',$id)->delete();
      return redirect()->route('jogos-index');   

    }
}
