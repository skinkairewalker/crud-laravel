<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Crud-goiania</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-clean">
        <form action="{{ route('site.auth') }}" method="post">
            <h2 class="visually-hidden">Login Form</h2>
            {{ isset($erro) && $erro != '' ? 'FALHA AO EFETUAR LOGIN' : '' }}
            <div class="illustration">
                <div class="row">
                    <div class="col" id="logo-icon"><i class="icon ion-ios-navigate"></i></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 id="texto-logo">Painel de Controle (CRUD)</h1>
                    </div>
                </div>
            </div>
            @csrf
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Endereço de Email" value="{{ old('email') }}" ></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Senha de Segurança" value="{{ old('password') }}" ></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Autenticar</button></div><a class="forgot" href="#">Esqueceu a senha ?</a>
        </form>
    </section>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Recuperar senha</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Informe seu email abaixo para recuperar sua senha :</p><input type="text" id="recuperarsenha" class="text-center">
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Fechar</button><button class="btn btn-primary" type="button">Recuperar</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>