<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/css/template.css">
    <link rel="stylesheet" href="<?=BASE_URL?>app/assets/css/<?=$css?>">
    <script src="<?=BASE_URL?>app/assets/js/jquery.js"></script>
    <script src="<?=BASE_URL?>app/assets/js/template.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
</head>
<body>
    <header id="header_inv">
       <p>menu do site</p>
       <hr>
    </header>

    <?php $this->loadViewInTemplate($viewName, $viewData)?>

    <footer id="footer_bg">
        <hr>
        <p>rodape do site</p>
    </footer>
</body>
</html>