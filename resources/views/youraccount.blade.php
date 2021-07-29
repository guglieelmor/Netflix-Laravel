<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
          integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/browse.css">
    <link rel="stylesheet" href="../../assets/css/userprofile.css">

</head>
<body>
<main id="mainContainer" class="p-b-40">

    @include('components.header')

    <!--profile section-->
    <section class="userprofile" id="userprofilecontainer">
        <div>
            <h2 class="heading f-s-40">
                Conta
            </h2>
        </div>
        <div class="line"></div>
        <div class="membership d-flex flex-no-wrap space-between">
            <div class="left">
                <h4 class="headline">
                    ASSINATURA E COBRANÇA
                </h4>
                <button class="button">Cancelar Assinatura</button>
            </div>
            <div class="right">
                <div class="d-flex space-between">
                    <div class="email">
                        <strong>{{ Auth::user()->email }}</strong>
                    </div>
                    <div class="link">
                        <a href="#" class="link-item">
                            Alterar email da conta
                        </a>
                    </div>
                </div>

                <div class="d-flex space-between">
                    <div class="password">
                        Senha: *********
                    </div>
                    <div class="link">
                        <a href="#" class="link-item">
                            Alterar senha
                        </a>
                    </div>
                </div>

                <div class="d-flex space-between">
                    <div class="email">
                        Telefone: {{ Auth::user()->telefone }}
                    </div>
                    <div class="link">
                        <a href="#" class="link-item">
                            Alterar o número de telefone
                        </a>
                    </div>
                </div>
                <div class="line"></div>

                <div class="carddetail d-flex space-between flex-middle">
                    <div class="card">
                        <h4><span class="icon-visa">VISA</span> •••• •••• •••• {{ substr(Auth::user()->cartao, -4) }}</h4>
                    </div>
                    <div class="link">
                        <a href="#" class="link-item">
                            Atualizar informações de pagamento
                        </a>
                        <a href="#" class="link-item">
                            Biling detials
                        </a>
                    </div>
                </div>
                <div class="line"></div>

                <div class="gift-card d-flex direction-column">
                    <a href="#" class="link-item">
                        Resgate seu cartão pré-pago ou promoção
                    </a>
                    <a href="#" class="link-item">
                        Compre seu cartão pré-pago Netflix aqui
                    </a>
                </div>
            </div>
        </div>
        <div class="line"></div>

        <!--plan details-->
        <div class=" plan-details d-flex flex-middle space-between">
            <div class="left">
                <h4 class="headline">DETALHES DO PLANO</h4>
            </div>
            <div class="right d-flex space-between">
                <p>{{ Auth::user()->plano }}</p>
                <a href="#" class="link-item">Alterar plano</a>
            </div>
        </div>
        <div class="line"></div>

        <!--settings-->
        <div class="settings d-flex ">
            <div class="left">
                <h4 class="headline">CONFIGURAÇÕES</h4>
            </div>
            <div class="right d-flex direction-column">
                <a href="#" class="link-item">Participação em testes</a>
                <a href="#" class="link-item">Gerenciar aparelhos de download</a>
                <a href="#" class="link-item">Ativar um aparelho</a>
                <a href="#" class="link-item">Atividade de transmissão recente nos aparelhos</a>
                <a href="#" class="link-item">Encerrar a sessão em todos os aparelhos</a>
                <a href="#" class="link-item">Baixe suas informações pessoais</a>
            </div>
        </div>
        <div class="line"></div>

        <!--parental control-->

        <div class="parental-control d-flex">
            <div class="left">
                <h4 class="headline">PERFIL E CONTROLE DOS PAIS</h4>
            </div>
            <div class="right">
                <div class="">
                    <div class="info-container d-flex flex-middle space-between">
                        <div class="name d-flex">
                            <img src="{{ URL::asset('/assets/img/users/' . Auth::user()->file) }}" alt="user" class="user-icon" />
                            <div class="content">
                                <p class="username">{{ Auth::user()->name }}</p>
                                <p class="maturity">Todas as classificações etárias</p>
                            </div>
                        </div>

                        <div class="righticon">
                            <svg class="chevron-down" viewBox="0 0 18 18">
                                <path fill="#aaa" d="M11.56 5.56L10.5 4.5 6 9l4.5 4.5 1.06-1.06L8.12 9z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </div>


        </div>
    </section>

    <!--footer section and footer fixed menu mobile-->

        @include('components.footer')

</main>

<div class="footer-navigation d-flex space-between">
    <a href="browse.html" class="nav-item active">
        <i class="fa fa-home" aria-hidden="true"></i> </br>
        <span>Home</span>
    </a>
    <a href="search.html" class="nav-item">
        <i class="fa fa-search" aria-hidden="true"></i></br>
        Search
    </a>
    <a href="latest.html" class="nav-item">
        <i class="fa fa-film" aria-hidden="true"></i></br>
        Latest
    </a>
    <a href="user-profile/home.html" class="nav-item">
        <i class="fa fa-user" aria-hidden="true"></i></br>
        Account
    </a>
</div>


</body>

</html>
