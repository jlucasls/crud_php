<?php
    require 'conexao.php';

    //Criar um vetor para receber o resultado da pesquisa

    $sql= $pdo -> query("SELECT * FROM usuario");

    $lista = [];
    $lista = $sql -> fetchAll(PDO::FETCH_ASSOC);


    // if ($sql -> rowCount()>0){
    // $lista = $sql -> fetchAll(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de dados</title>
</head>
<body>

    <h2>TABELA DO MEU BANCO DE DADOS</h2>

    <table style="width:100%" border="1px">

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>AÇÕES</th>
        </tr>

        <?php foreach($lista as $dados): ?>
        <tr>
            <td><?php echo $dados['id']; ?></td>
            <td><?= $dados ['nome']; ?></td>
            <td><?php echo $dados['email']; ?></td>
        </tr>
        <?php endforeach; ?>
    
    </table>
    
</body>
</html>