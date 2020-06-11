<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <style>
        .classeFundo {
            height: 500px;
            width: 500px;
            background-image: url("../img/footer-bg.jpg");
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <script>

        setTimeout(function() { 
            $(".alert").alert('close');
        }, 5000);

     </script>
</head>
<?php 
       if(isset($_GET['mensagem'])){
           echo "<div class='alert alert-warning' role='alert'>"  .$_GET['mensagem']."</div>";
       }
?>
<body class="gray-bg">

    <div id="fundo-externo">
        <div id="fundo">
            <img src="../img/footer-bg.jpg" alt="" />
        </div>

        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name">RF+</h1>

                </div>
                <h3 style="color: coral;">Crie sua conta no  Receita Fácil+</h3>
                <p style="color: coral;">O portal de receitas mais simplés do Brasil.
                    <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
                </p>
                <p style="color:honeydew">Entrar</p>
                <form class="m-t" role="form" action="../repositorio/inserirDados.php" method="GET" class="form-group">
                
                    <div class="form-group">
                      <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Nome">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="senhaConfirme" name="senhaConfirme" placeholder="Confirme sua senha" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Cadastra-se</button>
                </form>

            </div>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    </div>
</body>

</html>