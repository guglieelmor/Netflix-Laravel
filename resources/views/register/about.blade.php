@extends('layout.register-html')
    @section('body')
        <section id="login-form-section">
            <div class="loginContainer c-flex direction-row white" style="min-width: 23%; justify-content: center;">
                <div>
                    <div class="rememberMe">
                        <label for="rememberMe"><span class="login-remember-me-label-text black">PASSO 3 DE 3</span></label>
                    </div>
                    <h2 class="formtitle black" style="font-size: 32px;">
                        Crie uma senha para iniciar sua assinatura
                    </h2>
                    <span class="login-remember-me-label-text black">Faltam só mais alguns passos! Nós também detestamos formulários.</span>

                    @if($errors->all())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert" style="margin-top: 1rem;">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
            <div>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="loginContainer c-flex direction-row white" style="min-width: 75%; padding-top: 0;justify-content: space-around;">
                    @csrf
                    <div class="item">
                        <div id="loginForm" class="d-flex direction-column">
                            <input type="text" id="name" name="name" placeholder="Nome" value="{{old('name')}}" class="input-form email" style="margin-bottom: 30px; border: solid 1px #e50914 !important;" required/>
                            <input type="text" id="email" name="email" value="{{ $_GET['email_tr'] }}" class="input-form email" />
                            <input type="password" id="password" name="password" value="{{ $_GET['password_tr'] }}" class="input-form" required/>
                            <input type="password" id="confirm_password" value="{{old('confirm_password')}}"  name="confirm_password" placeholder="Confirmar senha" class="input-form" style="border: solid 1px #e50914 !important;" required />
                        </div>
                    </div>
                    <div class="item">
                        <div id="loginForm" class="d-flex direction-column">
                            <input type="number" id="number" value="{{old('number')}}" name="number" placeholder="Telefone" class="input-form" style="border: solid 1px #e50914 !important;"/>
                            <input type="file" id="img" name="img" class="input-form" style="border: solid 1px #e50914 !important;"/>
                            <input type="text" id="cartao" value="{{old('cartao')}}" name="cartao" placeholder="Cartão de Crédito" class="input-form email" style="margin-bottom: 30px; border: solid 1px #e50914 !important;" required/>
                            <select class="input-form email" name="metodo" id="metodo" style="padding: 14px 3px;">
                                <option value="0" selected>Débito automatico</option>
                                <option value="2">Cancelar depois de um mês</option>
                            </select>
                        </div>
                    </div>
                    <div class="item">
                        <div id="loginForm" class="d-flex direction-column">

                            <div class="in-radio">
                                <input type="radio" id="basico" value="Básico" name="plano">
                                <label style="padding-left: 5px; color: black" for="basico"><b>Básico</b><br><blockquote><em>Boa qualidade de vídeo em SD (480p). Assista em celulares, tablets, computadores ou TVs.</em><br><br><b>R$25,90/mês</b></blockquote></label>
                            </div>
                            <div class="in-radio">
                                <input type="radio" id="padrao" value="Padrão" name="plano">
                                <label style="padding-left: 5px; color: black" for="padrao"><b>Padrão</b><br><blockquote><em>Ótima qualidade de vídeo em Full HD (1080p). Assista em celulares, tablets, computadores ou TVs.</em><br><br><b>R$39,90/mês</b></blockquote></label>
                            </div>
                            <div class="in-radio">
                                <input type="radio" id="premium" value="Premium" name="plano">
                                <label style="padding-left: 5px; color: black" for="premium"><b>Premium</b><br><blockquote><em>Nossa melhor qualidade de vídeo em Ultra HD (4K) e HDR. Assista em celulares, tablets, computadores ou TVs.</em><br><br><b>R$45,90/mês</b></blockquote></label>
                            </div>
                            <button type="submit" class="button submitButton" id="signInButton" >
                                Finalizar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    @endsection

