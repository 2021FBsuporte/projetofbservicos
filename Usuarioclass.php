<?php

    class Usuario{

        public function login($loginUsuario, $senha){
            global $pdo;

            $sql = "SELECT * FROM usuario WHERE loginUsuario = :loginUsuario AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":loginUsuario", $loginUsuario);
            $sql->bindValue(":senha", $senha);
            $sql->execute();

                if($sql->rowCount() > 0){
                    $dado = $sql->fetch();

                    $_SESSION['codUsuario'] = $dado['codUsuario'];

                     return true;
                }else{
                    return false;
                }





        }


    }




?>