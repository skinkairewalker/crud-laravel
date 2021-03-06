<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Crud-goiania</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="/assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#">Loja do Waldemar</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.painel') }}">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.pedidos') }}">Pedidos</a></li>
                </ul>
                <form class="me-auto search-form"></form>
                <div class="container" id="user_options">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Bem Vindo, {{$_SESSION['nome']}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><a class="btn btn-light action-button" role="button" href="#" style="color: var(--bs-pink);background: var(--bs-red);">Sair do Painel</a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="alert alert-success" role="alert"><span class="text-loja"><strong>??rea administrativa para visualiza????o dos pedidos</strong></span></div>
    <div id="items_pedidos">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>id do produto</th>
                        <th>Nome do Produto</th>
                        <th>Pre??o</th>
                        <th>Nome Completo</th>
                        <th>CPF</th>
                        <th>Endere??o</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pedidos as $item)

                    <tr>
                        <td id="identificadores">{{$item->id}}</td>
                        <td id="p-id">{{$item->idproduto}}</td>
                        <td id="p-nomeproduto">{{$item->nomeproduto}}</td>
                        <td id="p-precos">{{$item->valorproduto}}</td>
                        <td id="p-nomecliente">{{$item->nomecompleto}}</td>
                        <td id="p-cpf">{{$item->cpf}}</td>
                        <td id="p-endereco">{{$item->endereco}}</td>
                        <td id="p-telefone">{{$item->telefone}}</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <footer class="footer-basic">
        <div class="social"><a href="https://www.instagram.com/waldemar_bertoldo/"><i class="icon ion-social-instagram"></i></a><a href="https://github.com/skinkairewalker"><i class="icon ion-social-github"></i></a><a href="https://www.linkedin.com/in/waldemar-lima-neto-926774138/"><i class="icon ion-social-linkedin"></i></a><a href="https://www.facebook.com/waldemar.lima.94"><i class="icon ion-social-facebook"></i></a></div>
        <p class="copyright">Loja do Waldemar ?? 2022</p>
    </footer>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/utils.js"></script>
</body>

</html>