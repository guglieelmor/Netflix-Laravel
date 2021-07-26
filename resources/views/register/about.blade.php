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
                <form action="{{ route('register') }}" method="post" class="loginContainer c-flex direction-row white" style="min-width: 50%; padding-top: 0;justify-content: space-around;">
                    @csrf
                    <div class="item">
                        <div id="loginForm" class="d-flex direction-column">
                            <input type="text" id="name" name="name" placeholder="Nome"  class="input-form email" style="margin-bottom: 30px; border: solid 1px #e50914 !important;" required/>
                            <input type="text" id="email" name="email" value="{{ $_GET['email_tr'] }}" class="input-form email" />
                            <input type="password" id="password" name="password" value="{{ $_GET['password_tr'] }}" class="input-form" />
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar senha" class="input-form" style="border: solid 1px #e50914 !important;" />
                        </div>
                    </div>
                    <div class="item">
                        <div id="loginForm" class="d-flex direction-column">
                            <input type="file" id="file" name="file" class="input-form"/>
                            <button type="submit" class="button submitButton" id="signInButton" >
                                Finalizar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    @endsection

