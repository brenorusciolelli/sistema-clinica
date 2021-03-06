<?php

$url = 'http://localhost/system/views/';

$head = '<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EunaClinica</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="pt-br" />
    <link rel="stylesheet" href="'.$url.'../css/style.css">
</head>

<body>
<div class="wrapper">
    <div class="container">';

$header ='<header class="header">
<div class="logo">
    <img src="../img/logo-login.jpg" alt="logotipo">
</div>
<div class="icon-menu">
    <svg  width="30" height="12" viewBox="10 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="0" y1="1.36365" x2="30" y2="1.36365" stroke="black" />
        <line y1="6.5" x2="30" y2="6.5" stroke="black" />
        <line y1="11.5" x2="30" y2="11.5" stroke="black" />
    </svg>
</div><!-- Fim Logo-->

<!-- As a heading -->
<nav class="rede-social">
    <a class="link-social" href="http://facebook.com.br">
        <li class="icon-social">
            <i class="fab fa-facebook-f"></i>
        </li>
    </a>
    
    <a class="link-social" href="http://instagram.com.br">
        <li class="icon-social">
            <i class="fab fa-instagram"></i>
        </li>
    </a>
</nav>

</header><!-- Fim header --->

<div class="menu">
<nav class="navigation-menu">
    <div class="profile">
        <span class="profile-img">
            <img src="'.$foto.'" alt="profile img">
        </span>
        <span>
            <p class="name">'.$usuario.'</p>
            <p class="status">Online</p>
        </span>
    </div>

    <ul>
        <li class="header-menu">MENU PRINCIPAL</li>

        <li class="item-nav">
            <a class="link-nav link-nav-arrow " href="#">
                <i class="fas fa-city icon"></i>
                Administrativo
            </a>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="#">
                        <i class="fa fa-circle-o icon"></i>
                        Cadastrar Usuario
                    </a>
                </li>
            </ul>
        </li>

        <li class="item-nav">
            <a class="link-nav link-nav-arrow " href="#">
                <i class="fas fa-building icon"></i>
                Empresas
            </a>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="'.$url.'empresas/">
                        <i class="fa fa-circle-o icon"></i>
                        Cadastrar Empresa
                    </a>
                </li>
            </ul>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="#">
                        Consultar Empresa
                    </a>
                </li>
            </ul>
        </li>

        <li class="item-nav">

            <a class="link-nav link-nav-arrow" href="#">
                <i class="fas fa-user-md icon"></i>
                Medicos
            </a>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="#">
                        Adicionar Medicos
                    </a>
                </li>
            </ul>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="#">
                        Consultar Medicos
                    </a>
                </li>
            </ul>
        </li>

        <li class="item-nav">

            <a class="link-nav link-nav-arrow" href="#">
                <i class="fas fa-briefcase-medical icon"></i>
                Exames

            </a>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="#">
                        Cadastrar Exames
                    </a>
                </li>
            </ul>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="#">
                        Consultar Exames
                    </a>
                </li>
            </ul>
        </li>

        <li class="item-nav">

            <a class="link-nav link-nav-arrow " href="#">
                <i class="fas fa-money-bill-alt icon"></i>
                Financeiro
            </a>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="#">
                        Faturamento
                    </a>
                </li>
            </ul>
        </li>

        <li class="item-nav">

            <a class="link-nav link-nav-arrow" href="#">
                <i class="fas fa-user icon"></i>
                Colaboradores
            </a>
            <ul class="list-nav-second hide">
                <li class="item-nav-second">
                    <a href="#">
                        Novo Colaborador
                    </a>
                </li>
            </ul>
    </ul>
    </li>
    </ul>
</nav> <!-- fim nav-->
</div> <!-- fim menu-->
<div class="content">
<h1>Conteudo</h1>
</div>
</div>

</div>
</div>
';

$footer = '<!-- Footer --->
<footer class="page-footer">
    <div class="container">
        © 2021 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">Site - Verssão Beta</a>
    </div>
</footer>';

$javascript = '<script src="https://kit.fontawesome.com/892399f368.js" crossorigin="anonymous"></script>
<script src="../js/app.js"></script>

</body>

</html>';