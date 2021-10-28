<?php
require_once('conexao.php');

    class Usuario {
        private $codUsuario;
        private $login;
        private $senha;
       
        public function setCodUsuario($cod) {
            $this -> codUsuario = $cod;
        }

        public function getCodUsuario() {
            return $this -> codUsuario;
        }

        public function setLogin($login) {
            $this -> login = $login;
        }

        public function getLogin() {
            return $this -> login;
        }

        public function setSenha($senha) {
            $this -> senha = $senha;
        }

        public function getSenha() {
            return $this -> senha;
        }
        public function logar($login, $senha)
        {
            global $pdo;
            // verificar se o email e senha estão cadastrado, se sim...
            $sql = $pdo->prepare("SELECT codUsuario FROM usuario WHERE
                loginUsuario =:l AND senha =:s");
                $sql->bindValue(":l",$loginUsuario);
                $sql->bindValue(":s",$senha);
                $sql->execute();
            if($sql->rowCount() > 0)
            {
                // entrar no sistema (sessão)
                $dado = $sql->fetch();
                session_start();
                $_SESSION['codUsuario'] = $dado['codUsuario'];
                header("Location: index.php");
                return true; // logado com sucesso
            }
            else
            {
                return false; // acessso negado
                echo 'Usuário e/ou senha inválido';
            }    
        }
    }
?>