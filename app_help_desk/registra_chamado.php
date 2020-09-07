<?php

    session_start();

    //tipo de arquivo, oque fazer com o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');

    //aqui estamos trabalhando na montagem do texto
    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);

    $texto = $_SESSION['id'] . '#'. $titulo .'#'.  $categoria .'#'. $descricao . PHP_EOL;

    //primeiro parametro[abertura do arquivo]
    //segundo parametro[oque deseja gravar]
    fwrite($arquivo, $texto);

    //fechamento do arquivo
    fclose($arquivo);

    //echo $texto;

    header('location: abrir_chamado.php');

?>