<?php
    session_start();
    require_once('conexao.php');
?>

<doctype html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">

        <title>Login - Personnalité Aruã Cabelo e Estética</title>
    </head>

    <body>
        <?php
           // password_hash(123465, PASSWORD_DEFAULT);

        ?>
        <!--Navbar-->
        <nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!--Img Logo Navbar-->
                <div id="imgLogoNavbar" class="border">
                    <a href="home.html" class="navbar-brand">
                        <img src="" alt="logo">
                    </a>
                </div>
                <!--Img Logo Navbar-->

                <!--Button-->
                <button id="canvas" class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#itens">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Button-->

                <!--Itens/Menu-->
                <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="itens">
                    <!--Canvas Header-->
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title">Personnalité Aruã</h5>
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
                            aria-label="cl"></button>
                    </div>
                    <!--Canvas Header-->

                    <!--Canvas body-->
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="home.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre.html">Sobre</a>
                            </li>


                            <!--Dropdown-->
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Serviços</a>
                                <ul class="dropdown-menu dropdown-menu-dark bg-dark">
                                    <li>
                                        <a href="servicoFem.html" class="dropdown-item text-white">Feminino</a>
                                    </li>
                                    <li>
                                        <a href="servicoMas.html" class="dropdown-item text-white">Masculino</a>
                                    </li>
                                </ul>
                            </li>
                            <!--Dropdown-->

                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!--Canvas body-->
                </div>
                <!--Itens/Menu-->
            </div>
        </nav>
        <!--Navbar-->

        <!--Login-->
        <div id="containerLogin" class="container-fluid">
            <!--Img Logo-->
            <div class="imgLogoLogin">
                <img src="" alt="Logo">
            </div>
            <!--Img Logo-->

            <!--Form Login-->
            <div class="formLogin">


                <form action="logar.php" method="post">
                    <!--Titles-->
                    <h2 class="display-5 text-center mt-4">Login</h2>
                    <p class="lead mb-2 text-center">Faça o login para continuar</p>
                    <!--Titles-->

                    <!--Label/Input-->
                    <label for="labelEmail" class="form-label">
                        Usuário
                    </label>
                    <p>
                        <input type="email" name="loginUsuario" id="labelEmail" placeholder="Digite seu E-mail"
                            class="input p-2">
                    </p>
                    <label for="labelPassword" class="form-label">
                        Senha
                    </label>
                    <p>
                        <input type="password" name="senha" id="labelPassword" placeholder="Digite sua Senha"
                            class="input p-2">
                    </p>
                    <!--Label/Input-->

                    <!--Checkbox/Esqueceu a senha-->
                    <div class="mt-4 mb-4 d-flex align-items-center">
                        <div class="form-check">
                            <input type="checkbox" name="lembrar" id="labelCheck" class="form-check-input">
                            <label for="labelCheck" class="form-check-label">Lembre-me</label>
                        </div>
                        <a href="#" class="text-secondary ms-auto ">Esqueceu a senha</a>
                    </div>
                    <!--Checkbox/Esqueceu a senha-->

                    <!--Button Logar-->
                    <div class="justify-content-center d-flex">
                        <button name="login" type="submit" id="btnLogar" class="btn btn-dark text-center">Logar</button>
                    </div>
                    <!--Button Logar-->

                    <hr class="my-3" />

                    <!--Button Redes Sociais-->
                    <div class="d-flex icons justify-content-around ">
                        <button class="btn btn-primary rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </button>
                        <button class="btn btn-danger rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-google" viewBox="0 0 16 16">
                                <path
                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                            </svg>
                        </button>
                    </div>
                    <!--Button Redes Sociais-->
                </form>
                <!--Create conta-->
                <div id="createConta" class="d-flex align-items-center justify-content-end">
                    <h6 class="text-center m-0 me-2 text-secondary">Ainda não tem conta?</h6>
                    <a href="cadastro.html" class="btn btn-light border me-3">Cadastre-se</a>
                </div>
                <!--Create conta-->
            </div>
            <!--Form Login-->
        </div>
        <!--Login-->



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
        </script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/script.js"></script>

    </body>

    </html>