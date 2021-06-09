<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$_ENV['BASE_URL'] . 'app/assets/css/user-login.css'?>">
    <title>Quero emprego - login</title>
</head>
<body>
<div class="container-login">
    <div id="login-box">
        <h1 class="text-center titulo">Login <br> Quero emprego</h1>

        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Jamais compartilhe seu email com ninguém.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-block  btn-success">Enviar</button>
        </form>
    </div>
    
</div>
    
</body>
</html>