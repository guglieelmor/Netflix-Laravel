<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="/favicon.png">
    <style type="text/css">
        body::before{
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.9) 100%),url('/assets/img/fundo.jpg');

        }
    </style>
</head>
<body>
<main>
    <header class="d-flex space-between middle-align">
        <a href="/br">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" viewBox="0 0 1024 276.742"><path d="M140.803 258.904c-15.404 2.705-31.079 3.516-47.294 5.676l-49.458-144.856v151.073c-15.404 1.621-29.457 3.783-44.051 5.945v-276.742h41.08l56.212 157.021v-157.021h43.511v258.904zm85.131-157.558c16.757 0 42.431-.811 57.835-.811v43.24c-19.189 0-41.619 0-57.835.811v64.322c25.405-1.621 50.809-3.785 76.482-4.596v41.617l-119.724 9.461v-255.39h119.724v43.241h-76.482v58.105zm237.284-58.104h-44.862v198.908c-14.594 0-29.188 0-43.239.539v-199.447h-44.862v-43.242h132.965l-.002 43.242zm70.266 55.132h59.187v43.24h-59.187v98.104h-42.433v-239.718h120.808v43.241h-78.375v55.133zm148.641 103.507c24.594.539 49.456 2.434 73.51 3.783v42.701c-38.646-2.434-77.293-4.863-116.75-5.676v-242.689h43.24v201.881zm109.994 49.457c13.783.812 28.377 1.623 42.43 3.242v-254.58h-42.43v251.338zm231.881-251.338l-54.863 131.615 54.863 145.127c-16.217-2.162-32.432-5.135-48.648-7.838l-31.078-79.994-31.617 73.51c-15.678-2.705-30.812-3.516-46.484-5.678l55.672-126.75-50.269-129.992h46.482l28.377 72.699 30.27-72.699h47.295z" fill="#d81f26"/></svg>
        </a>
    </header>
    <section id="login-form-section">
        <div class="loginContainer d-flex direction-column">
            <h2 class="formtitle">
                Entrar
            </h2>

            @if($errors->all())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif


            <form action="{{ route('login') }}" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                @csrf
                <input type="text" name="email" id="email" class="email {{isset($error) ? 'required' : ''}}" placeholder="Email ou número de telefone" value="{{old('email')}}" onchange="validateEmail()"/>
                <p id="errorEmail">Email</p>

                <input type="password" name="password" id="password" class="{{isset($error) ? 'required' : ''}}" placeholder="Senha" />
                <p id="errorPassword">Your password must contain between 4 and 60 characters.</p>

                <button type="submit" class="button submitButton" id="signInButton" >
                    Entrar
                </button>
                <div class="rememberMe">
                    <input type="checkbox" name="rememberMe" id="rememberMe" class="rememberMe">
                    <label for="rememberMe"><span class="login-remember-me-label-text">Lembre-se de mim</span></label>
                </div>
                <p style="padding-top: 60px;padding-bottom: 0; margin: 0;">
                    <img style="width: 18px" src="/assets/img/facebook.png" alt=""> <span style="font-size: 13px; color: #8c8c8c; ">Conectar com Facebook</span>
                </p>
                <p class="signUpText para">
                    Novo por aqui? <span class="signUp"><a href="{{ route('regform') }}"> Assine agora.</a></span>
                </p>
                <p style="padding-bottom: 60px;">
                    <span style="font-size: 13px; color: #8c8c8c; ">Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. Saiba mais.</span>
                </p>
            </form>
        </div>
    </section>
</main>
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
</body>
</html>

