
@extends('layout.account-html')
@section('account-body')
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
                <button class="button">Cancelar assinatura</button>
            </div>
            <div class="right">
                <div class="d-flex space-between">
                    <div class="email">
                        <strong>rajesh1234@gmail.com</strong>
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
                        Telefone: 095210 21826
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
                        <h4><span class="icon-visa">VISA</span> •••• •••• •••• 5350</h4>
                    </div>
                    <div class="link">
                        <a href="#" class="link-item">
                            Gerenciar informações de pagamento
                        </a>
                        <a href="#" class="link-item">
                            Detalhes de cobrança
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
                <p>Mobile</p>
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

        <div class="parental-control d-flex">
            <div class="left">
                <h4 class="headline">PERFIL E CONTROLE DOS PAIS</h4>
            </div>
            <div class="right">
                <div class="">
                    <div class="info-container d-flex flex-middle space-between">
                        <div class="name d-flex">
                            <img src="/assets/img/icons/user1.png" alt="user" class="user-icon" />
                            <div class="content">
                                <p class="username">Rajesh</p>
                                <p class="maturity">All Maturity Rating</p>
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

                <div class="">
                    <div class="info-container d-flex flex-middle space-between">
                        <div class="name d-flex">
                            <img src="/assets/img/icons/user2.png" alt="user" class="user-icon" />
                            <div class="content">
                                <p class="username">Rajesh</p>
                                <p class="maturity">All Maturity Rating</p>
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

                <div class="">
                    <div class="info-container d-flex flex-middle space-between">
                        <div class="name d-flex">
                            <img src="/assets/img/icons/user3.png" alt="user" class="user-icon" />
                            <div class="content">
                                <p class="username">Rajesh</p>
                                <p class="maturity">All Maturity Rating</p>
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
@endsection

