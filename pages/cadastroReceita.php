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
   <title>INSPINIA | Text Editor</title>


	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/plugins/summernote/summernote-bs4.css" rel="stylesheet">
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
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Enviar uma Receita</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	<!-- Start slides -->	
	
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Enviar uma Receita</h2>
						<p>Cadastre sua receita com o máximo de detalhes possível!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm">
							<div class="row">
								<div class="col-md-6">
									<h3>Informações da Receita</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="nomeReceita" name="nomeReceita" placeholder="Nome da Receita" required data-error="Informe o nome da receita!">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Porção para quantas pessoas?" id="porcaoPessoa" class="form-control" name="porcaoPessoa" required data-error="Informe a quantidade de porções por pessoa!">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>Categoria</option>
											  <option value="1">Alimentação Saudável</option>
											  <option value="2">Doces</option>
											  <option value="3">Massas</option>
											  <option value="4">Carnes</option>
											  <option value="5">Saladas</option>
											  <option value="6">Guarnições</option>
											  <option value="7">Drinks</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>Modo de Preparo</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="tempoPreparo" name="tempoPreparo" placeholder="Tempo de preparo" required data-error="Infome o tempo de preparo!">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
									<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>Tipo de Cozimento</option>
											  <option value="1">Assado</option>
											  <option value="2">Grelhado</option>
											  <option value="3">Crú</option>
											  <option value="4">Ao vapor</option>
											  <option value="5">Defumado</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>  
									</div>
									<div class="col-md-12">
										
									</div>
								</div>
								
							</div> 
							<div class="col-md-12">
								<span>Informe os dados da sua receita ex: 1 - Colher de sopa de sal.</span>
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="ingredientes" placeholder="Ingredientes e mais detalhes" rows="10" data-error="Escreva sobre sua receita" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Enviar Receita</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>           
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End slides -->
	

	<!-- ALL JS FILES -->


	<script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="../js/plugins/summernote/summernote-bs4.js"></script>

    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

       });
    </script>
</body>

</html>