<?php

class Webservices{

    private $pdo;
  //----------------------------------------CONEXÃO COM BANCO DE DADOS ---------------------------------------------

    public function __construct($host, $dbname, $user, $senha)
    {
        try
         {           
            $this->pdo = new PDO('mysql:host=;'.$host. ';dbaname='.$dbname, $user, $senha);
         }
        catch (PDOException $e) 
        {
            echo "Erro relacionado ao Banco de Dados : ".$e->getMessage();
            exit();
        }
        catch (Exception $e)
        {
            echo "Erro Genérico, sem relação com o Banco de Dados : ".$e->getMessage();
            exit();
        }
    }
//----------------------------------------------FIM DO BLOCO DE CONEXÃO---------------------------------------------



        public function buscarDados()
        {
            $res = array();
            $cmd = $this->pdo->query("SELECT * FROM dbo.Usuario ORDER BY loginUsuario");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
        

//---------------------------------------------BLOCO COM FUNÇÃO CADASTRAR-------------------------------------------
        public function cadastrar($login, $senha)
        {
            
            $cmd = $this->pdo->prepare("SELECT codUsuario FROM dbo.Usuario WHERE loginUsuario = :l");
            $cmd->bindValue(":l",$login);
            $cmd->execute();
            if($cmd->rowCount() > 0)//Nome do cliente já existe...
            {
                return false;
            }
            else
            {
                $cmd = $this->pdo->prepare("INSERT INTO dbo.Usuario (loginUsuario, senha) VALUES (:l, :s)");
                $cmd->bindValue(":l", $login);
                $cmd->bindValue(":s", $senha);
                $cmd->execute();
                return true;
            }    
        }
//----------------------------------------FIM DO BLOCO DE CADASTRO------------------------------------------        

//-----------------------------------------BLOCO COM FUNÇÃO EXCLUIR-----------------------------------------    
        
        public function excluirTms($id)//UTILIZANDO O PARAMETRO DELETE

        {
                $cmd = $this->pdo->prepare("DELETE FROM tms WHERE id = :id");
                $cmd->bindValue(":id", $id);
                $cmd->execute();
        }
    }

//----------------------------------------FIM DO BLOCO EXCLUIR----------------------------------------------



?>