@extends('themes.flexy.bootstrap-lite.main')

@section('body')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-12">
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
                        <li class="breadcrumb-item active" aria-current="page">Formulário de Upload de Arquivos</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Formulário de Upload de Arquivos</h1> 
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-material mx-2">
                            @csrf

                            <h4 class="card-title pb-4">Importar Arquivo</h4>

                            <div class="form-group">
                                <h6>Selecione um arquivo para realizar o upload:</h6>
                                <div class="col-12 pb-2 pt-2">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="form-control" accept=".txt" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success text-white">Salvar</button>
                                    <button type="reset" class="btn btn-secondary text-white">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection