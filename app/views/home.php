<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL'] . 'app/assets/css/' . $css ?>">
    <title>Quero emprego</title>
</head>
<body>
    <div id="container"> 

        <div class="container-inv">

            <div id="box-1-subheader">

                <div id="title-box-1">Encontre a vaga perfeita para você</div>

                
                <div id="area-search">
                    <div class="input-group mb-3" id="cargo-area-box-1">
                        <span class="input-group-text" id="icon-cargo-box-1">
                            <i class="fas fa-search"></i>
                        </span>

                        <input id="cargo-box-1" type="text" class="form-control" placeholder="Digite o cargo ou área profissional" aria-label="Username" aria-describedby="basic-addon1">
                   
                    </div>

                    <div class="input-group mb-3" id="estado-area-box-1">
                        <span class="input-group-text" id="icon-cargo-box-1">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>

                        <select name="estado" id="select-estado">
                            <option value="">Todo o Brasil</option>
                            <option value="df">Distrito Federal</option>
                            <option value="go">Goiás</option>
                            <option value="go">Rio Grande do Norte</option>
                        
                        </select>
                    </div>

                </div>
                
                <div id="button-box-1" class="subheader-buttons">Buscar vagas</div>

            </div>


        </div>

    </div>
</body>
</html>