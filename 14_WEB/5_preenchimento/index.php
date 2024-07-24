<?php   

$usuario = [
    'nome' => 'Maykon',
    'profissao' => 'Programador',
    'idade' => 18,
];

if($usuario) {
    $nome = $usuario['nome'];
    $profissao = $usuario['profissao'];
    $idade = $usuario['idade'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="nome" placeholder="Digite seu nome!" value="<?= $nome ?>"> 
        <br>
        <input type="text" name="idade" placeholder="Digite sua idade!" value="<?= $idade ?>"> 
        <br>
        <input type="text" name="profissao" placeholder="Digite sua profissao!" value="<?= $profissao ?>"> 
        <br>
        <input type="submit">
    </form> 
</body>
</html>