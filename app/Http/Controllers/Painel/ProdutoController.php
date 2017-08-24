<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Produto $produto)
    {
       $todos_produtos = $produto->all(); //Retorna todos os produtos da tabela
       return view("site.produtos", compact("todos_produtos"));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = ['eletronicos','moveis','limpeza','banho'];
        return view("site.cadastrar", compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produto $produto)
    {
        //$request->all(); pega todos os campos preechidos do formulário
        //$request->only(['nome', "exemplo"]); retorna apenas os campos solicitado no array
        //$request->except(["nome", "exemplo"]); pega todos os valores menos os que estão no array
        //$request->input("name"); pega somente o input desejado
        
        $dadosFormulario = $request->all();
        
        $dadosFormulario["prod_active"] = (isset($dadosFormulario["prod_active"])) ? 1 : 0;
        
        //VALIDAR AS INFORMAÇÕES
        $this->validate($request, $produto->rules);
        
        $cadastrado = $produto->create($dadosFormulario);
        
        if ($cadastrado)
            return redirect()->route("produtos.index");
        else 
            return request()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    
    public function testes(Produto $produto){
        //Atualizar algum dado
//        $product = $produto->find(1);
//        $product->update([
//          "prod_name" => "tv LG"
//        ]);
        //$produto->where("prod_name, "name");
    }
}
