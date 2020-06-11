<?php
    
$nome = $_GET['nome'];
$senhaUsuario = $_GET['senha'];
$email = $_GET['email'];

        echo $nome,$senhaUsuario,$email;

        $nome_servidor="35.205.150.43";
        $nome_usuario = "root";
         $senha = "c8h2p6m5";
         $conecta = new mysqli($nome_servidor,$nome_usuario,$senha);
         if($conecta ->connect_error){
             die("Conexão falhou:".$conecta->connet_error."<br>");
             echo "ERRO NA CONEXECAO";
         }

        $sql = "INSERT INTO cadastro_form.dados_pessoais (nome, senha, email) VALUES ('$nome', '$senhaUsuario', '$email')";
        if ($conecta->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
        }
        $conecta->close();

         header('Location: index.php');
 ?>
