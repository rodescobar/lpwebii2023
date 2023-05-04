@extends('layouts.main')

@section('title','Alteração de produto')

@section('content')

<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Alterar um produto</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/produto/salvar_alteracao" method="post">
    <input type="hidden" name="id" value="{{ $produto['id'] }}" />
    <div class="card-body">
        <div class="form-group">
            <label>Nome do produto</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Calça Jeans"
                    name="nome"
                    value='{{ $produto["nome"] }}'
                >
        </div>
        <div class="form-group">
            <label>Preço de venda</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="50.00"
                    name="preco"
                    value='{{ $produto["preco"] }}'
                >
        </div>
        
        <div class="form-group">
            <label>Quantidade no estoque</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="50.00"
                    name="quantidade"
                    value='{{ $produto["quantidade"] }}'
                >
        </div>       
        
        <div class="form-group">
            <label>Peso</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="50.00"
                    name="peso"
                    value='{{ $produto["peso"] }}'
                >
        </div> 
        
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        <a href='/produto' class='btn btn-default'>
            Voltar
        </a>
    </div>
    </form>
</div>

@endsection