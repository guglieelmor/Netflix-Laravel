<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="/favicon.png">
</head>
<body>
<main style="padding: 0px 10px;">
    <header class="d-flex space-between middle-align">
        <a href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" viewBox="0 0 1024 276.742"><path d="M140.803 258.904c-15.404 2.705-31.079 3.516-47.294 5.676l-49.458-144.856v151.073c-15.404 1.621-29.457 3.783-44.051 5.945v-276.742h41.08l56.212 157.021v-157.021h43.511v258.904zm85.131-157.558c16.757 0 42.431-.811 57.835-.811v43.24c-19.189 0-41.619 0-57.835.811v64.322c25.405-1.621 50.809-3.785 76.482-4.596v41.617l-119.724 9.461v-255.39h119.724v43.241h-76.482v58.105zm237.284-58.104h-44.862v198.908c-14.594 0-29.188 0-43.239.539v-199.447h-44.862v-43.242h132.965l-.002 43.242zm70.266 55.132h59.187v43.24h-59.187v98.104h-42.433v-239.718h120.808v43.241h-78.375v55.133zm148.641 103.507c24.594.539 49.456 2.434 73.51 3.783v42.701c-38.646-2.434-77.293-4.863-116.75-5.676v-242.689h43.24v201.881zm109.994 49.457c13.783.812 28.377 1.623 42.43 3.242v-254.58h-42.43v251.338zm231.881-251.338l-54.863 131.615 54.863 145.127c-16.217-2.162-32.432-5.135-48.648-7.838l-31.078-79.994-31.617 73.51c-15.678-2.705-30.812-3.516-46.484-5.678l55.672-126.75-50.269-129.992h46.482l28.377 72.699 30.27-72.699h47.295z" fill="#d81f26"/></svg>
        </a>
        <a class="button" href="{{ route('login') }}"> Entrar </a>
    </header>
    <section id="landing-hero-section" class=" d-flex direction-column flex-center middle-align">
        <h1>Filmes, séries e muito mais. Sem limites.</h1>
        <h2>Assista onde quiser. Cancele quando quiser.</h2>

        <form class="email-form d-flex" id="email-form" method="get" action="{{ route('registration') }}">
            @csrf
            <h3 class="email-form-title">Pronto para assistir? Informe seu email para criar ou reiniciar sua assinatura.</h3>
            <p id="email-error" style="color: #e50914; font-weight: 600; display: none;">Enter correct email</p>
            <div class="email-form-lockup d-flex">
                <div>
                    <input type="email" name="email" class="emailField" id="id_email" value="" tabindex="0"
                           autocomplete="email" maxlength="50" minlength="5" placeholder="Email"
                           onchange="validateEmail()" />
                </div>
                <button class="button submit" type="submit" id="submitbutton" tabindex="0" disabled="disabled">
                    <span class="hero-cta-btn-txt">Vamos lá</span><span>
                                <svg version="1.1" id="right-icon" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175"
                                     style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                                            c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"
                                            fill="white" />
                                    </g>
                                </svg>
                            </span>
                </button>
            </div>
        </form>
    </section>
</main>
<script>
    function validateEmail() {
        let email = document.getElementById('id_email').value;
        let re = /\S+@\S+\.\S+/;
        let result = re.test(email);
        if (result) {
            document.getElementById('email-error').style.display = "none";
            document.getElementById('submitbutton').disabled = false;
            // document.getElementById("email-form").submit();
        }
        else {
            document.getElementById('email-error').style.display = "block";
            document.getElementById('submitbutton').disabled = true;
        }
    }
</script>
</body>
</html>
