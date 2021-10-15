<?php
    require_once 'classeLoginUsuario.php';
    $p = new Webservices("KRONA-02336","personalite_aruan", "anderson.bastos", "Filhos#04");
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
    <?php
        if(isset($_POST['nome']))//CLICOU NO BOTÃO DE CADASTRAR OU DE EDITAR
        {//----------------------------------BOTÃO EDITAR-----------------------------------------------------------
            if(isset($_GET['id_up']) && !empty($_GET['id_up']))
            {
                $id_upd = addslashes($_GET['id_up']);
                $nome = addslashes($_POST['nome']);
                $tms = addslashes($_POST['tms']);
                $nota = addslashes($_POST['nota']);
                    if(!empty($nome) && !empty($tms) && !empty($nota))
                    {
                        $p->atualizarTms($id_upd, $nome, $tms, $nota);
                        header("location: index.php");
                    }    
                    else
                    {
    ?>
                    <div class="aviso">
                        <img src="../images/aviso.png">
                        <h4>Por favor preencha todos os campos!</h4>
                    </div>
    <?php
                    }
            {
                $nome = addslashes($_POST['nome']);
                $tms = addslashes($_POST['tms']);
                $nota = addslashes($_POST['nota']);
                    if(!empty($nome) && !empty($tms) && !empty($nota))
                {
                    if(!$p->cadastrar($nome, $tms, $nota))
                    {
    ?>
                    <div class="aviso">
                        <img src="../images/aviso.png">
                        <h4>Cliente já cadastrado!</h4>
                    </div>
    <?php
                    }
                }
                else
                {
    ?>
                    <div class="aviso">
                        <img src="../images/aviso.png">
                        <h4>Por favor preencha todos os campos!</h4>
                    </div>
    <?php
                }
            }
            
        }
    }    
    ?>
    <section id="esquerda">
    <?php
            if(isset($_GET['id_up']))
            {
                $id_update = addslashes($_GET['id_up']);
                $res = $p->buscarTms($id_update);
            }
    ?>
        <form method="POST">
            <h2>Cadastrar TMS</h2>
            <label for="nome">Nome do Cliente</label>
            <input type="text" name="nome" id="nome" value="<?php if(isset($res)){echo $res['nome'];}?>">
            <label for="tms">Serviço de TMS</label>
            <input type="text" name="tms" id="tms" value="<?php if(isset($res)){echo $res['tms'];}?>">
            <label for="nota">Informativo</label>
            <textarea name="nota" id="nota" width="338px" height="87px" value="<?php if(isset($res)){echo $res['nota'];}?>"></textarea>
            <input type="submit" value="<?php if(isset($res)){echo "Atualizar";}else{echo "Cadastrar";}?>">
        </form>
    </section>
    <section id="direita">
    <table>
               <tr id="titulo">
                   <td>Cliente</td>
                   <td>TMS</td>
                   <td colspan="2">Informativo</td>
               </tr>
    <?php
           $dados =  $p->buscarDados();
            if(count($dados) > 0)
            {
                for ($i=0; $i < count($dados); $i++) 
                { 
                    echo "<tr>";
                    foreach ($dados[$i] as $k => $v) 
                    {
                        if($k != "id")
                        {
                            echo "<td>".$v."</td>";
                        }
                    }
    ?>
                    <td>
                        <a href="index.php?id_up=<?php  echo $dados[$i]['id'];?>">Editar</a>
                        <a href="index.php?id=<?php  echo $dados[$i]['id'];?>">Excluir</a> </td>
    <?php
                    echo "</tr>";
                }
            }
            else
    ?>
                <div class="aviso">
                    <h4>Ainda não existe cliente cadastrado</h4>
                </div>
            }
        }
           </table>
    </section> 
</body>
</html>
    <?php
                if(isset($_GET['id']))
                {
                    $id_tms = addslashes($_GET['id']);
                    $p->excluirTms($id_tms);
                    header("location: index.php");
                }

    ?>