<?php
    require_once 'classetms.php';
    $p = new Webservices("webservices", "localhost", "root", "");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" href="../images/ferramentas.png">
    <title>Krona T.I. | Ferramentas de controle de TMS...</title>
</head>
<body>
    
    <section id="esquerda">
           <form method="POST">
            <h2>Cadastrar TMS</h2>
            <label for="nome">Nome do Cliente</label>
            <input type="text" name="nome" id="nome" value="<?php if(isset($res)){echo $res['nome'];}?>">
            <label for="tms">Serviço de TMS</label>
            <input type="text" name="tms" id="tms" value="<?php if(isset($res)){echo $res['tms'];}?>">
            <label for="nota">Informativo</label>
            <textarea name="nota" id="nota" width="338px" height="87px" value="<?php if(isset($res)){echo $res['nota'];}?>"></textarea>
            <input type="submit" value="Cadastrar">
        </form>
    </section>
    <section id="direita">
    <table>
               <tr id="titulo">
                   <td>Cliente</td>
                   <td>TMS</td>
                   <td colspan="2">Informativo</td>
               </tr>
           </table>
    </section> 
</body>
</html>
    