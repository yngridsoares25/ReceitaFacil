<?php   


            $id=$_GET["id"];

			$nome_servidor="35.205.150.43";
			$nome_usuario = "root";
			$senha = "c8h2p6m5";
			 $conecta = new mysqli($nome_servidor,$nome_usuario,$senha);
			 if($conecta ->connect_error){
				 die("Conexão falhou:".$conecta->connet_error."<br>");
			 }
	
	
			$sql = "SELECT imgReceita FROM cadastro_form.receita  where idReceita=  " . $id;
		    $resultado = $conecta->query($sql);

		   
			if ($resultado->num_rows > 0) {
                $followingdata = $resultado->fetch_assoc();    
                header('Content-type: image/jpg');
                echo $followingdata['imgReceita'];


			} else {
				header('Location: ../index.php?mensagem=Usuário não cadastrado!');
			}



?>        