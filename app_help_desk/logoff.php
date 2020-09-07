<?php 
    session_start();

    /*echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';*/
    //remover indices do array de sessão
    //unset()

    //destruir a variavel de sessão

    session_destroy();
    header('location: index.php');

    //unset($_SESSION['x']); //remove só se existir


?>