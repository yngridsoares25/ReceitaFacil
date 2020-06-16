<?php
    
        $id = $_GET['id'];

        $nome_servidor="35.205.150.43";
        $nome_usuario = "root";
         $senha = "c8h2p6m5";
         $conecta = new mysqli($nome_servidor,$nome_usuario,$senha);
         if($conecta ->connect_error){
             die("Conexão falhou:".$conecta->connet_error."<br>");
         }

        $sql = "DELETE FROM cadastro_form.receita where idReceita=" .$id   ;
        if ($conecta->query($sql) === TRUE) {
            header('Location: ../pages/listaReceita.php?MinhasReceita=1&mensagemOK=Registro Excluido  com sucesso');
        } else {
            echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
        }
        $conecta->close();

        header('Location: ../pages/listaReceita.php?MinhasReceita=1&mensagemOK=Registro Excluido  com sucesso');
 ?>
