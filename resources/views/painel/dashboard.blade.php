@extends('layouts.main')
@section('title', 'Painel')
@section('content')

<div class="container">
    <div class="coluna-5">
        <div class="siderbar">
            <a href="#"><ion-icon name="person-circle-outline"></ion-icon></a>
            <a href="index.html"><ion-icon name="home-outline"></ion-icon></a>
            <a href="monitoramento.html"><ion-icon name="desktop-outline"></ion-icon></a>
            <a href="#"><ion-icon name="settings-outline"></ion-icon></a>
        </div>

        <div class="siderbar-exit">
            <a href="inicio.html"><ion-icon name="exit-outline"></ion-icon></a>
        </div>
    </div>
    <div class="coluna-70">
        <div class="top">
            <div class="texto">
                <div class="title">
                    <h1>Olá, Emerson!</h1>
                    <h3>Lorem Ipsum is simply dummy.</h3>
                </div>
                <div class="itens">
                    <div class="search">
                        <!-- <button type="button" id="btnBusca"><ion-icon name="search-outline"></ion-icon></button> -->
                        <input type="search" name="" id="txtBusca" placeholder="Search anything here...">
                    </div>
                    <div class="notificação">
                        <a href="#"><ion-icon name="notifications-outline"></ion-icon></a>
                    </div>
                </div>      
            </div>

            <div class="card-mapa-row">
                <div class="card-mapa">
                    <div id="map_div" style="width: 100%; height: 200px"></div>
                </div>
            </div>
        </div>
    
        <div class="aviarios">
            <div class="title">
                <h1>Seus Aviários</h1>
                <a href="#">Todos os Aviários</a>
            </div>
            
            <div class="card-aviarios-row">
                <div class="card-aviario">
                    <div class="sub-card-avi">
                        <div class="info-avi">
                            <h1>Aviário 1</h1>
                            <p>Caraúbas - RN</p>
                            <a href="#">Acessar</a>
                        </div>
                        <div class="icon-avi">
                            <img src="img/farm.png" alt="">
                        </div>
                    </div>
                    <div class="dados-monitoramento">
                        <div class="icon-amonia">
                            <div class="icon-amonia-img"><img src="img/poop.png" alt=""></div>
                            <p><span>63</span> PPM</p>
                        </div>

                        <div class="icon-temperatura">
                            <div class="icon-temperatura-img"><img src="img/temperatura-alta.png" alt=""></div>
                            <p><span>63</span> °C</p>
                        </div>
                        <div class="icon-umidade">
                            <div class="icon-umidade-img"><img src="img/umidade.png" alt=""></div>
                        <p><span>63</span> %</p>
                        </div>
                    </div>
                </div>

                <div class="card-aviario">
                    <div class="sub-card-avi">
                        <div class="info-avi">
                            <h1>Aviário 1</h1>
                            <p>Caraúbas - RN</p>
                            <a href="#">Acessar</a>
                        </div>
                        <div class="icon-avi">
                            <img src="img/farm.png" alt="">
                        </div>
                    </div>
                    <div class="dados-monitoramento">
                        <div class="icon-amonia">
                            <div class="icon-amonia-img"><img src="img/poop.png" alt=""></div>
                            <p><span>63</span> PPM</p>
                        </div>

                        <div class="icon-temperatura">
                            <div class="icon-temperatura-img"><img src="img/temperatura-alta.png" alt=""></div>
                            <p><span>63</span> °C</p>
                        </div>
                        <div class="icon-umidade">
                            <div class="icon-umidade-img"><img src="img/umidade.png" alt=""></div>
                        <p><span>63</span> %</p>
                        </div>
                    </div>
                </div>

                <div class="card-aviario">
                    <div class="sub-card-avi">
                        <div class="info-avi">
                            <h1>Aviário 1</h1>
                            <p>Caraúbas - RN</p>
                            <a href="#">Acessar</a>
                        </div>
                        <div class="icon-avi">
                            <img src="img/farm.png" alt="">
                        </div>
                    </div>
                    <div class="dados-monitoramento">
                        <div class="icon-amonia">
                            <div class="icon-amonia-img"><img src="img/poop.png" alt=""></div>
                            <p><span>63</span> PPM</p>
                        </div>

                        <div class="icon-temperatura">
                            <div class="icon-temperatura-img"><img src="img/temperatura-alta.png" alt=""></div>
                            <p><span>63</span> °C</p>
                        </div>
                        <div class="icon-umidade">
                            <div class="icon-umidade-img"><img src="img/umidade.png" alt=""></div>
                        <p><span>63</span> %</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="coluna-25">
        <div class="calendario-row">
            <div class="card-calendario">
                <div id="dycalendar">

                </div>
            </div>
        </div>

        <div class="alertas">
            <h3>Alertas</h3>
            <div class="alertas-row">
                <div class="card-alerta">
                    <div class="aviso">
                        <a><ion-icon name="warning"></ion-icon></a>
                        <h3>Nível de Amônia elevado!</h3>
                    </div>
                    <div class="horario">
                        <p>11:32</p>
                    </div>
                </div>

                <div class="card-alerta">
                    <div class="aviso">
                        <a><ion-icon name="warning"></ion-icon></a>
                        <h3>Nível de Amônia elevado!</h3>
                    </div>
                    <div class="horario">
                        <p>11:32</p>
                    </div>
                </div>

                <div class="card-alerta">
                    <div class="aviso">
                        <a><ion-icon name="warning"></ion-icon></a>
                        <h3>Nível de Amônia elevado!</h3>
                    </div>
                    <div class="horario">
                        <p>11:32</p>
                    </div>
                </div>

                <div class="card-alerta">
                    <div class="aviso">
                        <a><ion-icon name="warning"></ion-icon></a>
                        <h3>Nível de Amônia elevado!</h3>
                    </div>
                    <div class="horario">
                        <p>11:32</p>
                    </div>
                </div>
            </div>

            <div class="link">
                <a href="#">Clique aqui para ver mais</a>
            </div>
        </div>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="/js/dycalendar.js"></script>
<script>
    dycalendar.draw({
        target: '#dycalendar',
        type: 'month',
        dayformat: 'full',
        monthformat: 'full',
        highlighttargetdate: true,
        prevnextbutton: 'show'
    })
</script>

@endsection