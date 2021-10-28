<?php

if(isset($_POST['loginUsuario']) && !empty($_POST['loginUsuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'conexao.php';
    require 'Usuarioclass.php';

    $u = new Usuario();

        $loginUsuario = addslashes($_POST['loginUsuario']);
        $senha = addslashes($_POST['senha']);

        if($u->login($loginUsuario, $senha) == true){
            if(isset($_SESSION['codUsuario'])){
                header("Location: index.php");
            }else{
                
                header("Location: login.php");
               
}
            }else{
                
                header("Location: login.php");
               
        }

}else{
    
    header("Location: login.php");
   
}

?>