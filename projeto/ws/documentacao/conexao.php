<?php

// Conexão como o banco de dados
try {

    $pdo = new PDO("mysql:dbname=webservices; host=localhost", "root","");
} 

catch (PDOException $e) {
    echo "Erro com o banco de dados". $e->getMessage();
}   
catch (Exception $e){
    echo "Erro genérico". $e->getMessage();;
}
//1ª FORMA PARA INSERÇÃO DE DADOS NO SISTEMA DE CRUD

$res = $pdo->prepare("INSERT INTO tms(nome, tms, nota) VALUES (:n, :t, :o)"); // passamos um parametro
$res->bindValue(":n","Juan");
$res->bindValue(":t", "Alka 3");
$res->bindValue(":o", "testejvamos testar sfasdfasdfasdfasdfasjfasstestestestes"); //aceita valores diretamente
$res->execute();



//---------------------------------------------------------------------DELETE E UPDATE----------------------------------------------------------

//$cmd = $pdo->prepare("DELETE FROM tms WHERE id = :id");
//$id = 11;
//$cmd->bindValue(":id", $id);
//$cmd->execute();

//$cmd = $pdo->query("DELETE FROM tms WHERE id = '10' ");

//$cmd = $pdo->prepare("UPDATE tms SET tms =  :t WHERE id = :id");
//$cmd->bindValue(":t", "SSW");
//$cmd->bindValue(":id",4);
//$cmd->execute();

//$cmd = $pdo->query("UPDATE  tms SET tms = 'BRUNDAM' WHERE id = '7'");

//-------------------------------------------------------------------------SELECT---------------------------------------------------------------

//$cmd = $pdo->prepare("SELECT * FROM tms WHERE id = :id");
//$cmd->bindValue(":id", 8);
//$cmd->execute();
//$resultado = $cmd->fetch(PDO::FETCH_ASSOC);

//foreach ($resultado as $key => $value) {
  //      echo $key.":".$value."<br>";    

//}
//---------------------------------------------------------------------------TESTES-------------------------------------------------------------

?>