<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Cadastro de usuário </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
   <title>Live Dinner Restaurant - Responsive HTML5 Template</title>  
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">    
    <!-- Site CSS -->   
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
  <link href="css/style.css" rel="stylesheet">

</head>
<?php 
      session_start();
      //echo $_SESSION['username'];
       if(!isset($_SESSION['username'])){
          header('Location: ../index.php?mensagem=Usuário não logado!');
       }


?>

<body>
    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
			<div class="container col-md-11">

       
				<a class="navbar-brand" href="principal.php">
  
          <h1 class="logo-name">RF+</h1>
   
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="principal.php">Home</a></li><br>
            <li class="nav-item "><a class="nav-link" href="principal.php">Todas as Receitas</a></li><br>
            <li class="nav-item "><a class="nav-link" href="principal.php">Doces</a></li><br>
            <li class="nav-item "><a class="nav-link" href="principal.php">Massas</a></li><br>
            <li class="nav-item "><a class="nav-link" href="principal.php">Carnes</a></li><br>
            <li class="nav-item "><a class="nav-link" href="principal.php">Saladas</a></li><br>
            <li class="nav-item "><a class="nav-link" href="principal.php">Guarnições</a></li><br>
            <li class="nav-item "><a class="nav-link" href="principal.php">Drinks</a></li><br>
            <li class="nav-item"><a class="nav-link" href="principal.php">Contato</a></li><br>
            <li class="nav-item"><a class="nav-link" href="../index.php">Sair</a></li><br>
            <li>
                          <div class="dropdown profile-element">
                          <img alt="image" class="rounded-circle" src="../img/profile_small.jpg"/></br>
                          <span class="block m-t-xs font-bold"> <?php echo $_SESSION['nome']?> </span>
                          </div>
            </li>             
        
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bem vindo ao  <br> Receita fácil</strong></h1>
							<p class="m-b-40">Aqui você compartilha aquela receita deliciosa! <br> 
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="CadastroReceita.php">Postar uma receita</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
            <h1 class="m-b-20"><strong>Bem vindo ao  <br> Receita fácil</strong></h1>
							<p class="m-b-40">Aproveita as receitas de outras pessoas ! <br> 
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Ver receitas</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
              <h1 class="m-b-20"><strong>Bem vindo ao  <br> Receita fácil</strong></h1>
							<p class="m-b-40">Disperte o chefe que há dentro de você ! <br> 
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Avaliar</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>