@section("title", "Lista de produtos")
@extends("site.templates.template")

@section("content")
<h1>Listagem de produtos</h1>

<a href="{{ route("produtos.create") }}" class="btn btn-primary btn-cadastrar">
    <strong>Cadastrar</strong> 
    <span class="glyphicon glyphicon-plus"></span>
</a>

<table class="table table-striped">
    <tr>
        <th>Nome: </th>
        <th>Descrição: </th>
        <th>Açoes: </th>
    </tr>
    @foreach($todos_produtos as $produto)
    <tr>
        <td> {{$produto->prod_name}}</td>
        <td> {{$produto->prod_description}}</td>
        <td> 
            <a>
                <span class="btn btn-info glyphicon glyphicon-pencil"></span>
            </a>
            <a href="">
                <span class="btn btn-danger glyphicon glyphicon-trash"></span>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection