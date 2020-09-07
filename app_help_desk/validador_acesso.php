<?php  

  session_start();
  //se a sessão não existir ou for diferente de sim manda o erro pro header via get
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    (header('location: index.php?login=erro2'));
  }

?>