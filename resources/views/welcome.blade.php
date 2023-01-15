@extends('layouts.main-init')

@section('title', 'Página Inicial')

@section('content')

<header>
    <div id="title">
        <h1>Emerson Braga</h1>
        <h4>Developer</h4>
    </div>
    <ul>
        <li><a>Sobre</a></li>
        <li><a>Produto</a></li>
        <li><a>Contato</a></li>
        <li><a href="/entrar"><span>Entrar</span></a></li>
    </ul>
</header>
<section class="top">
    <div class="texto-top">
        <h1>A segurança de suas Aves a um clique de você!</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    </div>
    <div class="img-top">
        <img src="/img/icon-inicial.png" alt="">
    </div>
</section>

<section class="produto">
    <div class="top-produto">
        <h1>Produto</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <div class="card-produto-row">
        <div class="ponto-produto">
            <div class="card-ponto-mobile">
                <img src="/img/mobile.png" alt="">
            </div>
            <p>aaaaaaaaaaaaaaaaaaaaaa</p>
        </div>

        <div class="ponto-produto">
            <div class="card-ponto-produto"></div>
            <p>aaaaaaaaaaaaaaaaaaaaaa</p>
        </div>

        <div class="ponto-produto">
            <div class="card-ponto-produto"></div>
            <p>aaaaaaaaaaaaaaaaaaaaaa</p>
        </div>

        <div class="ponto-produto">
            <div class="card-ponto-produto"></div>
            <p>aaaaaaaaaaaaaaaaaaaaaa</p>
        </div>
    </div>
</section>

@endsection