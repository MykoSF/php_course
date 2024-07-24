<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processamento.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Preencha seu nome aqui!">
        </div>
        <div>
            <input type="text" name="idade" placeholder="Preencha sua idade aqui!">
        </div>
        <div>
            <input type="text" name="Adendo" placeholder="OBS">
        </div>
        <div>
            <input type="checkbox" name="vivo[]" placeholder="Preencha sua idade aqui!"> Vivo
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>