<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Crud-goiania</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    {{-- AQUI É SÓ O HEADER DO ROLÊ --}}
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#">Loja do Waldemar</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <form class="me-auto search-form"></form><a class="btn btn-light action-button" role="button" href="{{ route('site.auth') }}">Acesso Administrativo</a>
            </div>
        </div>
    </nav>
    
    {{-- AQUI É SÓ UMA MENSAGEM SPAM --}}
    <div class="alert alert-success" role="alert"><span class="text-loja"><strong>Lista de Produtos a venda</strong></span></div>
    
    {{-- AQUI COMEÇA A PARTE DA LOJA --}}
    <div class="container">
    {{--
        <div class="row" id="shop-list">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="shop-list">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link" href="#">Link</a>
                    </div>
                </div>
            </div>
        </div>
    --}}

    @php
        $i = 0;
    @endphp

    @foreach ($produto as $item)

        @if ($i == 0)
            <div class="row" id="shop-list">
        
        @endif

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->nome }}</h4>
                    <h6 class="text-muted card-subtitle mb-2"><img id="icone-produto" class="img-fluid" src="/images/{{ $item->foto }}" /></h6>
                    <p class="card-text">{{ $item->descricao }}</p><h4>R$ {{ $item->preco }}</h4></br><button id="btn_editar" class="btn btn-primary" type="button" style="background: rgb(26, 192, 221);" onclick="buy('{{ $item->id }}','{{ $item->nome }}','{{ $item->preco }}');">COMPRAR</button>
                    {{--href="{{ route('admin.pedidos') }}/{{ $item->id }}/comprar"--}}
                </div>
            </div>
        </div>

        @php
            $i = $i+1;
        @endphp

        @if ($i == 4)
             </div>
             @php
                $i = 0;
             @endphp
        @endif

    @endforeach

    </div>

    {{-- aqui é um modal pra galera comrpar--}}

    <div class="modal fade" role="dialog" tabindex="-1" id="modal-pedir">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Fazer pedido</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('site.pedir') }}">
                        @csrf
                        <div class="mb-3"><input id="pedidoid" class="form-control" type="text" name="produtoid" readonly></div>
                        <div class="mb-3"><input id="pedidonome" class="form-control" type="text" name="produtonome" readonly></div>
                        <div class="mb-3"><input id="pedidopreco" class="form-control" type="text" name="produtovalor" readonly></div>
                        <div class="mb-3"><input class="form-control" type="text" name="nomecompleto" placeholder="Nome completo"></div>
                        <div class="mb-3"><input class="form-control" type="text" oninput="mascaracpf(this);" name="cpf" placeholder="CPF"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="endereco" placeholder="Endereço"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="telefone" placeholder="Telefone"></div>
                        <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: var(--bs-green);">Fazer pedido agora !</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- AQUI É SÓ O FOOTER --}}
    <footer class="footer-basic">
        <div class="social"><a href="https://www.instagram.com/waldemar_bertoldo/"><i class="icon ion-social-instagram"></i></a><a href="https://github.com/skinkairewalker"><i class="icon ion-social-github"></i></a><a href="https://www.linkedin.com/in/waldemar-lima-neto-926774138/"><i class="icon ion-social-linkedin"></i></a><a href="https://www.facebook.com/waldemar.lima.94"><i class="icon ion-social-facebook"></i></a></div>
        <p class="copyright">Loja do Waldemar © 2022</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/utils.js"></script>
</body>

</html>