@extends('themes.flexy.bootstrap-lite.main')

@section('body')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item">
                            <a href="/" class="link">
                                <i class="mdi mdi-home-outline fs-4"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="/files" class="link">
                                Upload de Arquivos
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Vendas Importadas Com o Arquivo "{{ $data['file']['title'] }}"</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Vendas Importadas Com o Arquivo "{{ $data['file']['title'] }}"</h1> 
            </div>
            <div class="col-6">
                <div class="text-end upgrade-btn">
                    <a href="/files" class="btn btn-danger text-white">Voltar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Lista de Vendas Importadas</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">COMPRADOR</th>
                                    <th scope="col">DESCRIÇÃO</th>
                                    <th scope="col">PREÇO UNITÁRIO</th>
                                    <th scope="col">QUANTIDADE</th>
                                    <th scope="col">ENDEREÇO</th>
                                    <th scope="col">FORNECEDOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['sales'] as $sale)
                                    <tr>
                                        <td scope="row">{{ $sale['buyer'] }}</td>
                                        <td>{{ $sale['description'] }}</td>
                                        <td>R$ {{ $sale['price'] }}</td>
                                        <td>{{ $sale['quantity'] }}</td>
                                        <td>{{ $sale['address'] }}</td>
                                        <td>{{ $sale['supplier'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card border-bottom border-success">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h2>R$ {{ number_format($data['totalRevenue'], 2, ',', '.') }}</h2>
                                <h6 class="text-success mb-0">Faturamento Bruto</h6>
                            </div>
                            <div class="ms-auto">
                                <i class="mdi mdi-cash-usd text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection