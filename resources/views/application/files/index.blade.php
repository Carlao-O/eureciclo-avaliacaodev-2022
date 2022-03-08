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
                        <li class="breadcrumb-item active" aria-current="page">Upload de Arquivos</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Upload de Arquivos</h1> 
            </div>
            <div class="col-6">
                <div class="text-end upgrade-btn">
                    <a href="{{ route('files.create') }}" class="btn btn-primary text-white">Novo Arquivo</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Lista de Arquivos Carregados</h4>
                        <h6 class="card-subtitle">
                            Clique no botão <b>Novo Arquivo</b> para realizar um novo carregamento.
                        </h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">TÍTULO DO ARQUIVO</th>
                                    <th scope="col">DATA DE CARREGAMENTO</th>
                                    <th scope="col">AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['files'] as $file)
                                    <tr>
                                        <td scope="row">{{ $file['id'] }}</td>
                                        <td>{{ $file['title'] }}</td>
                                        <td>{{ date('d/m/Y', strtotime($file['created_at'])) }}</td>
                                        <td>
                                            <a href="{{ route('files.show', $file['id']) }}" class="justify-content-center btn btn-outline-primary align-items-center">
                                                <i class="mdi mdi-eye-outline app_marginright-10px"></i> Listar Vendas Registradas
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection