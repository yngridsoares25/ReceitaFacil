<?php
    
         include('../classes/Receita.php'); 
         session_start();

        $imagem = $_FILES["foto"];
        $receita = new Receita($_POST['nome'],(int) $_POST['qtdPorcaoPessoa'],(int) $_POST['codCategoria'],$_POST['tempoPreparo'],(int) $_POST['codTipoPreparo'],$_POST['txtDescricaoReceita'],$_SESSION['nome'],$_SESSION['usuarioId']);

  


        $nome_servidor="35.205.150.43";
        $nome_usuario = "root";
         $senha = "c8h2p6m5";
         $conecta = new mysqli($nome_servidor,$nome_usuario,$senha);
         if($conecta ->connect_error){
             die("Conexão falhou:".$conecta->connet_error."<br>");
             echo "ERRO NA CONEXECAO";
         }
         echo $receita->getNome();
         if($imagem != NULL) { 
            $nomeFinal = time().'.jpg';
            if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
                $tamanhoImg = filesize($nomeFinal); 
         
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
            }
        } 
        $sql =  "INSERT INTO cadastro_form.receita (nomeReceita, qtdPorcaoPessoa, codCategoria,tempoPreparo,codTipoPreparo,txtDescricaoReceita,idUsuarioCriador,imgReceita) VALUES ('" . $receita->getNome() . "', '" . $receita->getQtdPorcaoPessoa() . "', '" .$receita->getCodCategoria(). "','" . $receita->getTempoPreparo() ."','" . $receita->getCodTipoPreparo() . "','" . $receita->getTxtDescricaoReceita() . "','" .  $_SESSION['usuarioId'] . "','" .$mysqlImg ."')";
       
     
        if ($conecta->query($sql) === TRUE) {
            header('Location: ../pages/cadastroReceita.php?mensagemOK=Novo registro criado com sucesso');
        } else {
           header('Location: ../pages/cadastroReceita.php?mensagem=Erro ao enviar receita!');
        }
        $conecta->close();

        header('Location: ../pages/cadastroReceita.php?mensagemOK=Novo registro criado com sucesso');
       
 ?>
