@section("title", "Cadastrar Produtos")
@extends("site.templates.template")

@section("content")

<h1>Cadastrar Produtos</h1>

<form class="form" action="{{ route("produtos.store") }}" method="POST">
    
    {!! csrf_field() !!}
    
    <div class="col-md-6">
        
        <div class="row">
            
            <div class="form-group">
                <input class="form-control" type="text" name="prod_name" placeholder="Nome: " />
            </div>
            
            <div class="form-group">
                <label>Ativo: </label>
                <input type="checkbox" name="prod_active" value="1"/>
            </div>
            
            <div class="form-group">
                <input class="form-control" type="number" name="prod_number" placeholder="number"/>
            </div>

            <div class="form-group">
                <select class="form-control" name="prod_category">
                    <option >Escolha uma Categoria...</option>
                    @foreach($categorias as $categoria)
                    <option class="form-control"  value="{{ $categoria }}">{{ $categoria }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <textarea class="form-control" rows="5" name="prod_description"></textarea>
            </div>
            
            <button class="btn btn-success pull-right">Cadastrar <span class="glyphicon glyphicon-ok"></span></button>
        </div>
    </div>
</form>
@endsection
