@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    <div class="mb-3">
          <form class="d-flex" action="{{ route('produto.index') }}" method="GET">
            <button class="btn btn-outline-primary me-4" type="submit">Pesquisar</button>
            <input class="form-control me-4" name="pesquisar"  type="search" placeholder="Digite o nome do produto a ser pesquisado" aria-label="Search">
            <a type="button" href="" class="btn btn-primary float-end">Cadastrar</a>
          </form>
          <div class="table-responsive mt-4">
            @if ($findProduto->isEmpty())
                <p><strong>Não foi encontrado nenhum registro com o nome digitado!</strong></p>
            @else
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Valor</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($findProduto as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.' )}}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm mr-4">
                                Editar
                            </a>
                            <a href="" class="btn btn-danger btn-sm ml-4">
                                Excluir
                            </a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            @endif
          </div>
    </div>
@endsection