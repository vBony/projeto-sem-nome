<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?=$_ENV['BASE_URL'] . 'app/assets/js/jquery.js'?>"></script>
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL'] . 'app/assets/libraries/bootstrap.css'?>">
    <script src="<?=$_ENV['BASE_URL'] . 'app/assets/libraries/bootstrap.js'?>"></script>
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL'] . 'app/assets/css/user-register.css'?>">
    <link rel="icon" href="<?=$_ENV['BASE_URL']?>app/assets/imgs/logo-mini.png" type="image/png" sizes="16x16">
    <script src="<?=$_ENV['BASE_URL'] . 'app/assets/js/user-register.js'?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quero emprego - Registro ✏</title>
    
</head>
<body>
    <div id="box">
        <div id="title-area">Registro de candidato</div>

        <form id="register-area">

            <div class="input-area-group w100-mobile">
            
                <div class="w47">
                    <div class="input-label required">Nome</div>
                    <input required class="input" type="text">
                    <div class="invalid-msg"></div>
                </div>
                
                <div class="w47">
                    <div class="input-label">Sobrenome</div>
                    <input class="input" type="text">
                    <div class="invalid-msg"></div>
                </div>

            </div>

            <div class="input-area">
                <div class="input-label required">Nº de telefone</div>
                <input required class="input" type="text">
                <div class="invalid-msg"></div>
            </div>

            <div class="input-area">
                <div class="input-label required">Email</div>
                <input required class="input" type="email">
                <div class="invalid-msg"></div>
            </div>

            <div class="input-area-group">
            
                <div class="w30" >
                    <div class="input-label required">Estado</div>
                    <select required class="input">
                        <option value="">DF</option>
                        <option value="">GO</option>
                        <option value="">SP</option>
                    </select>
                    <div class="invalid-msg"></div>
                </div>
                
                <div class="w64">
                    <div class="input-label">Cidade</div>
                    <select class="input">
                        <option value="">Brasilia</option>
                        <option value="">Goiânia</option>
                        <option value="">Guarulhos</option>
                    </select>
                    <div class="invalid-msg"></div>
                </div>

            </div>
            
            <div class="input-area-group w100-mobile">
            
                <div class="w47">
                    <div class="input-label required">Senha</div>
                    <input required class="input" type="password">
                    <div class="invalid-msg"></div>
                </div>
                
                <div class="w47">
                    <div class="input-label required">Repetir senha</div>
                    <input required class="input" type="password">
                    <div class="invalid-msg"></div>
                </div>

            </div>
            
            <div id="checkbox-area">
                <label class="form-text">
                    <input class="form-check-input" type="checkbox">
                    Aceite os termos e condições.
                </label>
                <div class="invalid-msg"></div>
            </div>

            <div id="buttons-area">
                <input type="submit" value="Registrar-se">
            </div>
            <div id="redirect-area">
                <div class="ra empresa">&#8249; Registra-se como empresa</div>
                <div class="ra login">Login &#8250;</div>
            </div>

        </form>
    </div>

    <input type="hidden" id="base_url" value="<?= $_ENV["BASE_URL"]?>">
</body>
</html>