<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu MVC</title>
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>assets/css/bootstrap.min.css" />
</head>
<body>
    <h1>Este Ã© o topo</h1>
    <a href="<?= BASE_URL ?>">Home</a>
    <a href="<?= BASE_URL ?>/galeria">Galeria</a>
    <hr>

    <?php
    $this->loadViewInTemplate($viewName, $viewData);
    ?>

    <script src="<?= BASE_URL ?> assets/js/jquery.js" ></script>
    <script src="<?= BASE_URL ?> assets/js/bootstrap.bundle.js" ></script>
</body>
</html>