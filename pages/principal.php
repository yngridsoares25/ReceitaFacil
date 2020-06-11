<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Cadastro de usuário </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<?php 
      session_start();
      echo $_SESSION['username'];
       if(!isset($_SESSION['username'])){
          header('Location: index.php?mensagem=Usuário não logado!');
       }


?>

<body style="background-color: #4b23528c;">
    <div class="container">
        <h3>Mapa</h3>
        <div class="row align-items-center">
        <div class="col">  
                <iframe
                    width="600"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBsTkJZ65tIlUg2zAd2_zyt8ADm4fQnxNM
                    &q=Brasilia+DF" allowfullscreen>
                   </iframe>
        </div>
    </div>
    
    <div class="container">
        <div class="row align-items-center">
             <div class="col"> 
                  <a href="paginaInserir.php" class="btn btn-primary">Novo Usuário</a>
             
             </div>
            
            
             <div class="col">
                    <h3>Cadastro de Usuário</h3>
             </div>
             <div class="col">
                 
            </div    >  


        </div> 
    </div>    
<div class="container" style="background-color: #afafafb8;">
              
 <div class="row align-items-center">
     
 </div>

</div>
    <div class="container">
        
        <div class="row align-items-center">
             
             <div class="col">
                    <h3>Pesquisar</h3>
                  
             </div>
      
        </div> 
    </div>
     <div class="container" style="background-color: #afafafb8;">
        <div class="row align-items-center">
            
             <div class="col">
               
                     <form action="principal.php" method="GET" class="form-group">
        
                        <div class="form-group">
                         <label for="exampleInputEmail1">Digite seu nome</label>
                         <input type="text" name="nomePesquisa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Nome">

                        </div> 

                      <button type="submit" class="btn btn-primary">Pesquisar</button>
                     
                    </form>
                   
             </div>
            
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                  </tr>
                </thead>
                <tbody>

                       <?php

                              if(isset($_GET['nomePesquisa'])) {   

                                      $nome = $_GET['nomePesquisa'];



                                      $nome_servidor="35.205.150.43";
                                      $nome_usuario = "root";
                                      $senha = "c8h2p6m5";
                                       $conecta = new mysqli($nome_servidor,$nome_usuario,$senha);
                                       if($conecta ->connect_error){
                                           die("Conexão falhou:".$conecta->connet_error."<br>");
                                       }

                                        if($nome==""){  
                                          $sql = "SELECT id, nome, email FROM cadastro_form.dados_pessoais";
                                        }else{
                                          $sql = "SELECT id, nome, email FROM cadastro_form.dados_pessoais where nome like'%" .$nome . "%'"   ;
                                        }

                                      $resultado = $conecta->query($sql);
                                      if ($resultado->num_rows > 0) {
                                      // saída dos dados
                                      while($linha = $resultado->fetch_assoc()) {
                                       echo "<tr><th scope='row'>". $linha["id"]."</th>" ;  
                                               echo "<td>" . $linha["nome"]. "</td> <td>" . $linha["email"]. "</td><td><a  href='excluirDados.php?id=" .$linha["id"]. "'  class='btn btn-primary'  role='button'>Excluir</a>&nbsp<a  href='alterarDados.php?id=" .$linha["id"]. "&nome=".$linha["nome"]."&email=".$linha["email"]."'  class='btn btn-primary'  role='button'>Alterar</a></td>";
                                       echo "</tr>";
                                       }
                                      } else {
                                      echo "0 results";
                                      }

                                      $conecta->close();
                              }         
                      // header('Location: index.php');
               ?>


                </tbody>
              </table>
        </div> 
    </div>
</body>

</html>