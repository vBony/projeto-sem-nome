<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL']?>app/assets/css/template.css">
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL']?>app/assets/css/<?=$css?>">
    <script src="<?=$_ENV['BASE_URL']?>app/assets/js/jquery.js"></script>
    <script src="<?=$_ENV['BASE_URL']?>app/assets/js/template.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="<?=$_ENV['BASE_URL']?>/app/assets/libraries/bootstrap.css" rel="stylesheet">
    <link href="<?=$_ENV['BASE_URL']?>/app/assets/css/homolog-header.css" rel="stylesheet">
    <script src="<?=$_ENV['BASE_URL']?>app/assets/libraries/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="<?=$_ENV['BASE_URL']?>app/assets/favicon/favicon.ico" sizes="16x16" type="image/png">
</head>
<body>
    <header id="header_inv">
        
        <div id="box-header">

            <div id="logo-area" onclick="window.location.href = '  <?= $_ENV['BASE_URL'] ?> ' ">
                <div id="img-logo">
                    <img src="<?=$_ENV['BASE_URL']?>app/assets/imgs/logo-pink.png" alt="">
                </div>
                <div id="txt-logo">Quero <span>Emprego</span></div>
            </div>

            <div id="buttons-area">

                <div id="button-login">

                    <div id="icon-login-box">
                        <i id="icon-login" class="fas fa-user-alt"></i>
                    </div>

                    <div id="button-login-text">
                        Entrar
                    </div>

                </div>

                <div id="button-register">Cadastre-se</div>

            </div>

        </div>
        
    </header>

    <?php $this->loadViewInTemplate($viewName, $viewData)?>

    <footer id="footer">
        <div id="footer-inv">
            <div id="fi-box-logo" class=fi-box>
                <div id="logo"><img src="<?= $_ENV["BASE_URL"] . "app/assets/imgs/logo-footer.png" ?>"></div>
                <div id="copyright">Quero emprego, inc. © 2021</div>
            </div>

            <div id="fi-box-termos" class=fi-box>
                <ul>
                    <li>Termos de Serviço</li>
                    <li class="fib-point">•</li>
                    <li>Política de Uso</li>
                    <li class="fib-point">•</li>
                    <li>Política de Privacidade</li>
                </ul>
            </div>
            <div class=fi-box>
                <div id="redes-sociais">
                    <ul>
                        <li><i class="fab fa-facebook-square"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><i class="fab fa-twitter-square"></i></li>
                    </ul>
                    
                    

                </div>
            </div>
        </div>
    </footer>

    <input type="hidden" id="base_url" value="<?= $_ENV['BASE_URL'] ?>">

</body>
</html>