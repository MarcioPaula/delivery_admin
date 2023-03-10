<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    //Apresenta Pagina Usuarios com os dados em banco
    public function index(){

        $registros = DB::table('users')->where('cod_estabel', '=', Auth::user()->cod_estabel)->get();

        return view("pages.usuarios.usuarios", compact("registros"));
    }

    //Cria nova Usuarios no banco
    public function adicionar(Request $request){

        $dados = $request->all();

        if($request->admin == true){
            $dados =  array(
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'cod_estabel' => Auth::user()->cod_estabel,
                'admin' => 'Sim'
            );
        }else {
            $dados =  array(
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'cod_estabel' => Auth::user()->cod_estabel,
                'admin' => 'Não'
            );
        }

        User::create($dados);

        return redirect()->back();

    }

    //Editar Usuarios no banco
    public function editar(Request $request, $id){

        $usuarios = User::find($id);

        $dados = $request->all();

        if($request->admin == true){
            $dados =  array(
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'cod_estabel' => Auth::user()->cod_estabel,
                'admin' => 'Sim'
            );
        }else {
            $dados =  array(
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'cod_estabel' => Auth::user()->cod_estabel,
                'admin' => 'Não'
            );
        }

        $usuarios->update($dados);

        return redirect()->back();

    }

    //Excluir Usuarios no banco
    public function deletar($id){

        $Promocoes = User::find($id);

        $Promocoes->delete();

        return redirect()->back();;

    }
}
