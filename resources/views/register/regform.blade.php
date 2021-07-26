@extends('layout.register-html')
    @section('body')
        <section id="login-form-section">
            <div class="loginContainer d-flex direction-column white" style="max-width: 370px;">
                <div class="rememberMe">
                    <label for="rememberMe"><span class="login-remember-me-label-text black">PASSO 2 DE 3</span></label>
                </div>
                <h2 class="formtitle black" style="font-size: 32px;">
                    Crie uma senha para iniciar sua assinatura
                </h2>
                <label for="rememberMe" style="padding-bottom: 18px;"><span class="login-remember-me-label-text black">Faltam só mais alguns passos! Nós também detestamos formulários.</span></label>
                <form action="{{ route('about') }}" id="loginForm" class="d-flex direction-column" method="get" name="loginForm">
                    @csrf

                    @if(!isset($_GET['email_er']))
                        <input type="text" name="email_tr" id="email_tr" class="input-form email" placeholder="Email ou número de telefone" onchange="validateEmail()" required/>
                    @else
                        <input type="text" name="email_tr" value="{{ $_GET['email_er'] }}" id="email_tr" class="input-form email" placeholder="Email ou número de telefone" onchange="validateEmail()" required/>
                    @endif

                    <p id="errorEmail">Email</p>
                    <input type="password" class="input-form" name="password_tr" id="password_tr" placeholder="Senha"  required/>
                    <p id="errorPassword">Your password must contain between 4 and 60 characters.</p>
                    <button type="submit" class="button submitButton" id="signInButton" >
                        Próxima
                    </button>
                </form>
            </div>
        </section>
    @endsection

    @section('script')
        <script>
            document.getElementById('errorEmail').style.display = "none";
            document.getElementById('errorPassword').style.display = "none";
            function validateEmail() {
                let email = document.getElementById('email').value;
                let re = /\S+@\S+\.\S+/;
                let result = re.test(email);
                if (result) {
                    document.getElementById('errorEmail').style.display = "none";
                    document.getElementById('signInButton').disabled = false;
                    // document.getElementById("email-form").submit();
                }
                else {
                    document.getElementById('errorEmail').style.display = "block";
                    document.getElementById('signInButton').disabled = true;
                }
            }
        </script>
    @endsection

