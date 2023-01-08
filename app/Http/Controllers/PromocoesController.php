<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocoes;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class PromocoesController extends Controller
{
    //Apresenta Pagina Promoções com os dados em banco
    public function index(){

        $registros = Promocoes::all();

        return view("pages.promocoes.promocoes", compact("registros"));
    }

    //Cria nova promoção no banco
    public function adicionar(Request $request){

        $dados = $request->all();

        Promocoes::create($dados);

        return redirect()->back();

    }

    //Editar promoção no banco
    public function editar(Request $request, $id){

        $promocao = Promocoes::find($id);

        $dados = $request->all();

        $promocao->update($dados);

        return redirect()->back();

    }

    //Excluir promoção no banco
    public function deletar($id){

        $Promocoes = Promocoes::find($id);

        $Promocoes->delete();

        return redirect()->back();;

    }
}
