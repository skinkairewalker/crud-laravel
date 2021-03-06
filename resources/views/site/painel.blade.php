<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Crud-goiania</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
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
                        <div class="col-md-12"><a class="btn btn-light action-button" role="button" href="{{ route('admin.sair') }}" style="color: var(--bs-pink);background: var(--bs-red);">Sair do Painel</a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="alert alert-success" role="alert"><span class="text-loja"><a class="btn btn-primary" role="button" id="btn_criarproduto" style="background: rgb(38,170,83);" onclick="$('#modal-criar').modal('show');">NOVO PRODUTO</a><strong>??rea administrativa para gest??o dos produtos</strong></span></div>
    <div id="items_loja">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Descri????o</th>
                        <th>Pre??o</th>
                        <th>Foto</th>
                        <th style="background: var(--bs-gray-300);">Fun????es</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($produto as $item)
                    
                        <tr>
                            <td id="identificadores"> {{$item->id}}</td>
                            <td>{{$item->nome}}</td>
                            <td id="descricoes">{{$item->descricao}}</td>
                            <td id="precos">{{$item->preco}}</td>
                            <td>{{$item->foto}}</td>
                            <td id="actions" style="background: var(--bs-light);">
                                <div><button class="btn btn-primary" id="btn_editar" type="button" style="background: rgb(176,13,253);" onclick="editar('{{ $item->id }}','{{$item->nome}}','{{$item->descricao}}','{{ $item->preco }}','{{ $item->foto }}');">Editar</button><button class="btn btn-primary" id="btn_deletar" type="button" style="background: rgb(253,27,13);" onclick="deletar('{{$item->id}}')">Deletar</button></div>
                            </td>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-editar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Produto</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.produtos.atualiza')}}">
                        @csrf
                        <div class="mb-3"><input id="prodid" class="form-control" type="text" name="up-pid" value="" readonly=""></div>
                        <div class="mb-3"><input id="prodnome" class="form-control" type="text" name="up-nome" placeholder="Nome do produto"></div>
                        <div class="mb-3"><input id="prodpreco" class="form-control" type="text" name="up-preco" placeholder="Pre??o do produto"><small class="form-text text-danger"></small></div>
                        <div class="mb-3"><textarea id="proddesc" class="form-control" name="up-descricao" placeholder="Descri????o do produto" rows="10" onkeydown="pulsar(event);"></textarea></div>
                        <div class="mb-3"><input id="prodfoto" class="form-control" type="text" name="up-foto" placeholder="Image do produto ( .jpg ou .png )"><small class="form-text text-danger"></small></div>
                        <div class="mb-3"><button class="btn btn-primary" type="submit">Atualizar produto</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-criar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Criar Novo Produto</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.produtos.novo')}}">
                        @csrf
                        <div class="mb-3"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="np-nome" placeholder="Nome do produto"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="np-preco" placeholder="Pre??o do produto ( APENAS INTEIROS ou DECIMAIS )"><small class="form-text text-danger"></small></div>
                        <div class="mb-3"><textarea class="form-control" name="np-descricao" placeholder="Descri????o do produto" rows="10" onkeydown="pulsar(event);"></textarea></div>
                        <div class="mb-3"><input class="form-control" type="text" name="np-foto" placeholder="Image do produto ( .jpg ou .png )"><small class="form-text text-danger"></small></div>
                        <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: var(--bs-green);">Criar produto</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-deletar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deseja realmente deletar ?</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.produtos.deleta')}}">
                        @csrf
                        <div class="mb-3"><input class="form-control" type="text" id="dp-pid" name="dp-pid" readonly></div>
                        <div class="mb-3"><button class="btn btn-primary" id="deleteprod" type="submit" style="background: var(--bs-red);">DELETAR</button></div>
                    </form>
                    <button value="Cancel" class="btn btn-primary" style="background: var(--bs-blue);margin-left 10px;" onclick="hdeletar();" >FECHAR</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/utils.js"></script>
</body>

</html>