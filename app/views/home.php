<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL'] . 'app/assets/css/' . $css ?>">
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

                        <select name="estado" class="form-select" id="select-estado">

                            <option value="">Todo o Brasil</option>
                            <option value="df">Distrito Federal</option>
                            <option value="go">Goiás</option>
                            <option value="go">Rio Grande do Norte</option>
                        
                        </select>
                    </div>

                </div>
                
                <div id="button-box-1" class="subheader-buttons">Buscar vagas</div>

            </div>

            <div id="box-2-subheader">

                <div id="title-area-b2">
                    
                    <div id="num-vagas-b2">100</div>
                    <div id="text-title-b2">vagas de emprego</div>
                    
                </div>

                <div id="text-area-b2">
                    Não perca tempo, envie seu currículo e candita-se gratuitamente!<br>
                    Caso não possua um ainda, crie em nossa plataforma interativa de forma rápida e sem pagar nada.
                </div>

                <div id="button-area-b2">

                    <div id="button-b2" class="subheader-buttons">Criar currículo</div>
                        
                </div>

            </div>

        </div>
        
        <div id="box-buttons">

            <div class="bb-area">
                <div id="bb-1" class="subheader-buttons">Buscar vagas</div>
            </div>

            <div class="bb-area">
                <div id="bb-2" class="subheader-buttons">Criar currículo</div>
            </div>
            
        </div>

    </div>

    <div id="about-site">
        <div class="about-site-inv">
            <div id="title-about-area">
                <h4>Conheça a <span>Quero Emprego</span></h4>
            </div>

            <div id="carroussel-about-area">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption d-none d-md-block c-area row">
                                <div class="c-box1 col-lg-6">
                                    <div>
                                        <h4>1. Lorem Ipsum is simply dummy</h4>
                                    </div>

                                    <div class="c-text">
                                        Lorem Ipsum is simply dummy text of 
                                        the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's 
                                        standard dummy text ever since the 1500s, 
                                        when an unknown printer took a galley of 
                                        type and scrambled it to make a type specimen book.
                                    </div>

                                    <div class="btn-area">
                                        <button class="btn btn-success mt-3 btnzin">Acessar</button>
                                    </div>
                                </div>

                                <div class="c-box2 col-lg-6">
                                    <img src="<?=$_ENV['BASE_URL'].'app/assets/imgs/c-img-1.png'?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-none d-md-block c-area row">
                                <div class="c-box1 col-lg-6">
                                    <div>
                                        <h4>1. Lorem Ipsum is simply dummy</h4>
                                    </div>

                                    <div class="c-text">
                                        Lorem Ipsum is simply dummy text of 
                                        the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's 
                                        standard dummy text ever since the 1500s, 
                                        when an unknown printer took a galley of 
                                        type and scrambled it to make a type specimen book.
                                    </div>
                                </div>

                                <div class="c-box2 col-lg-6">
                                    <img src="<?=$_ENV['BASE_URL'].'app/assets/imgs/c-img-1.png'?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-none d-md-block c-area row">
                                <div class="c-box1 col-lg-6">
                                    <div>
                                        <h4>1. Lorem Ipsum is simply dummy</h4>
                                    </div>

                                    <div class="c-text">
                                        Lorem Ipsum is simply dummy text of 
                                        the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's 
                                        standard dummy text ever since the 1500s, 
                                        when an unknown printer took a galley of 
                                        type and scrambled it to make a type specimen book.
                                    </div>
                                </div>

                                <div class="c-box2 col-lg-6">
                                    <img src="<?=$_ENV['BASE_URL'].'app/assets/imgs/c-img-1.png'?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>