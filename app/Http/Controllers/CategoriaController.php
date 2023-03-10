<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    //Apresenta Pagina Categoria com os dados em banco
    public function index(){

        $registros = DB::table('categorias')->where('cod_estabel', '=', Auth::user()->cod_estabel)->get();

        return view("pages.categoria.categorias", compact("registros"));
    }

    //Cria nova Categoria no banco
    public function adicionar(Request $request){

        $dados = $request->all();

        if($request->status == true){
            $dados =  array(
                'nome_categoria' => $request->nome_categoria,
                'status' => "Ativo",
                'cod_estabel' => Auth::user()->cod_estabel,
            );
        }else {
            $dados =  array(
                'nome_categoria' => $request->nome_categoria,
                'status' => "Inativo",
                'cod_estabel' => Auth::user()->cod_estabel,
            );
        }

        Categoria::create($dados);

        return redirect()->back();

    }

    //Editar Categoria no banco
    public function editar(Request $request, $id){

        $categoria = Categoria::find($id);

        $dados = $request->all();

        if($request->status == true){
            $dados =  array(
                'nome_categoria' => $request->nome_categoria,
                'status' => "Ativo",
                'cod_estabel' => Auth::user()->cod_estabel,
            );
        }else {
            $dados =  array(
                'nome_categoria' => $request->nome_categoria,
                'status' => "Inativo",
                'cod_estabel' => Auth::user()->cod_estabel,
            );
        }

        $categoria->update($dados);

        return redirect()->back();

    }

    //Excluir Categoria no banco
    public function deletar($id){

        $categoria = Categoria::find($id);

        $categoria->delete();

        return redirect()->back();;

    }
}
