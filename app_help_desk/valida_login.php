<?php 

    session_start();

    print_r($_SESSION);
    echo '<hr>';

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;


    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');

    //usuarios do sistema
    $usuarios_app = array(
        array('id'=> 1, 'email' => 'adm@teste.com.br', 'senha' => '123', 'perfil_id' => 1 ),
        array('id'=> 2, 'email' => 'user@teste.com.br' ,'senha' => '123' , 'perfil_id' => 1),
        array('id'=> 3, 'email' => 'jose@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
        array('id'=> 4, 'email' => 'maria@teste.com.br' ,'senha' => '123', 'perfil_id' => 2)
    );

    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */

    //loop para pegar o array com os usuasrios
    foreach($usuarios_app as $user){
        //se o email e senha do usuario for igual a o email e senha submetido pelo form
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            //pegando o id do user e transferindo para o ususario id
            $usuario_id = $user['id'];
            //pegando o id do perfil do user e transferindo para usuario perfil id
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        //criei o id na sessão para fazer controle usando o mesmo id de usuario
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        (header('location: home.php'));
    }else{
        $_SESSION['autenticado'] = 'NAO';
        //envia como get para ser recuperado login=erro
        (header('location: index.php?login=erro'));
    };
    /*print_r($_POST);
    echo '<br>';

    echo $_POST['email'];
    echo $_POST['senha'];
    */
?>