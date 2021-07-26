@extends('layout.register-html')
    @section('body')
        <section id="login-form-section">
            <div class="loginContainer d-flex direction-column white" style="max-width: 370px;">
                <img src="/assets/img/devices.png" alt="" style="width: 345px; padding-bottom: 20px">
                <div class="rememberMe" style="text-align: center">
                    <label for="rememberMe"><span class="login-remember-me-label-text black">PASSO 1 DE 3</span></label>
                </div>
                <h2 class="formtitle black" style="font-size: 32px; text-align: center">
                    Termine de configurar sua conta
                </h2>
                <label for="rememberMe" style="padding-bottom: 18px; text-align: center"><span class="login-remember-me-label-text black">A Netflix é personalizada para você. Crie uma senha para assistir em qualquer aparelho quando quiser.</span></label>
                <form action="{{ route('regform') }}" id="loginForm" class="d-flex direction-column" method="get" name="loginForm">
                    @csrf
                    <input type="hidden" value="{{ $_GET['email'] }}" name="email_er" id="email_er">
                    <button type="submit" class="button submitButton" id="signInButton">
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
