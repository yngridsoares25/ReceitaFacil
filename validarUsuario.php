<?php
    
$senhaUsuario = $_GET['senha'];
$email = $_GET['email'];


        $nome_servidor="35.205.150.43";
        $nome_usuario = "root";
        $senha = "c8h2p6m5";
         $conecta = new mysqli($nome_servidor,$nome_usuario,$senha);
         if($conecta ->connect_error){
             die("Conexão falhou:".$conecta->connet_error."<br>");
         }

       $sql = "SELECT id, nome, email,senha FROM cadastro_form.dados_pessoais where email like'%" .$email . "%'"   ;
       $resultado = $conecta->query($sql);
       
       
        if ($resultado->num_rows > 0) {
            $resultado = $resultado->fetch_assoc();
           if( $resultado["senha"] == $senhaUsuario){
               header('Location: principal.php');
           }else{
               header('Location: index.php?mensagem=Senha inválida');
           }

        } else {
        echo "0 results";
        }
        // header('Location: index.php');
 ?>

