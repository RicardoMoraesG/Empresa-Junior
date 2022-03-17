<!DOCTYPE html>
<html lang="pt-br" class="h-100">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="http://<?php echo APP_HOST; ?>/public/css/bootstrap.min.css">
        <!-- Css para o navbar -->
        <link href="http://<?php echo APP_HOST; ?>/public/css/navbar.css" rel="stylesheet"> 
        <!-- Biblioteca de icones fontawesome-->
        <link href="http://<?php echo APP_HOST; ?>/public/fontawesome/css/all.css" rel="stylesheet"> 
        <title><?php echo TITLE; ?></title> 
    </head>
    <body class="d-flex flex-column h-100">
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="http://<?php echo APP_HOST; ?>">Empresa Júnior</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?php if ($viewVar['nameController'] == "HomeController") { ?> active <?php } ?>">
                            <a class="nav-link" href="http://<?php echo APP_HOST; ?>">Início<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php if (($viewVar['nameController'] == "ListarController") AND ( $viewVar['nameAction'] == "listar")) { ?> active <?php } ?>">
                            <a class="nav-link" href="#">Listar</a>
                        </li>
                        <li class="nav-item <?php if (($viewVar['nameController'] == "CadastrarController") AND ( $viewVar['nameAction'] == "cadastrar")) { ?> active <?php } ?>">
                            <a class="nav-link" href="#">Cadastrar</a>
                        </li>
                        <li class="nav-item <?php if ($viewVar['nameController'] == "RelatoriosController") { ?> active <?php } ?>">
                            <a class="nav-link" href="#">Relatórios</a>
                        </li>
                    </ul>

                       
                </div>                
            </nav>
        </header>  

