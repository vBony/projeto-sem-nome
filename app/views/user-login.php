<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?=$_ENV['BASE_URL'] . 'app/assets/js/jquery.js'?>"></script>
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL'] . 'app/assets/libraries/bootstrap.css'?>">
    <script src="<?=$_ENV['BASE_URL'] . 'app/assets/libraries/bootstrap.js'?>"></script>
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL'] . 'app/assets/css/user-login.css'?>">
    <link rel="icon" href="<?=$_ENV['BASE_URL']?>app/assets/imgs/logo-mini.png" type="image/png" sizes="16x16">
    <script src="<?=$_ENV['BASE_URL'] . 'app/assets/js/user-login.js'?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quero emprego - Login 🔐</title>
    
</head>
<body>
    <div id="app">
        <div id="box">
        
            <div id="title-area">Login como candidato</div>
            <form id="login-area" method="post">

                <div class="input-area">
                    <div class="label-input">Email</div>
                    <input required id="email" type="email" name="email">
                    <div class="invalid-msg" id="email-msg"></div>
                </div>

                <div class="input-area">
                    <div class="label-input">Senha</div>
                    <input required id="senha" type="password" name="senha">
                    <div class="invalid-msg" id="senha-msg"></div>
                </div>
                <div id="esq-area">
                    <div id="esqueci">Esqueci a senha</div>
                </div>
                <div id="buttons-area">
                    <input type="submit" value="Enviar">
                    <div class="hr-sect">OU</div>
                    <div id="sociais-area">
                        <div class="social-btn">
                            <div class="sb-icon"><i class="fab fa-google"></i></div>
                            <div class="sb-text">Google</div>
                        </div>
                        <div class="social-btn">
                            <div class="sb-icon"><i class="fab fa-linkedin"></i></div>
                            <div class="sb-text">Linkedin</div>
                        </div>
                    </div>

                </div>

            </form>

            <div id="redirect-area">
                <div class="ra empresa">&#8249; Sou empresa</div>
                <div class="ra registrar"> Registrar-se &#8250;</div>
            </div>
            
            

        </div>

    </div>
</body>
</html>