<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 300px; margin: auto; background-color: #999; padding: 30px;" >
        <h1>Este é um cabealho <?= rand(0, 9999); ?></h1>
        <form method="post">
            <input type="text" placeholder="E-mail" /><br><br>

            <input type="password" placeholder="Senha" /><br><br>

            <input type="submit" value="Entrar" />
        </form>
    </div>
</body>
</html>