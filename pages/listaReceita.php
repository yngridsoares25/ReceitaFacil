<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Cadastro de usuário </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  <script>

	setTimeout(function() { 
		$(".alert").alert('close');
	}, 5000);

	</script>
</head>
<?php 
      session_start();
      //echo $_SESSION['username'];
       if(!isset($_SESSION['username'])){
          header('Location: ../index.php?mensagem=Usuário não logado!');
       }
	   
	   if(isset($_GET['mensagem'])){
		echo "<div class='alert alert-warning' role='alert'>"  .$_GET['mensagem']."</div>";
		}

		if(isset($_GET['mensagemOK'])){
				echo "<div class='alert alert-success' role='alert'>"  .$_GET['mensagemOK']."</div>";
		}


?>

<body>
    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<?php 	if(isset($_GET["filtro"])){ $filtroMenu = $_GET["filtro"];}else{$filtroMenu = 0;}?>
			<div class="container col-md-11">

       
				<a class="navbar-brand" href="principal.php">
  
          <h1 class="logo-name">RF+</h1>
	
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
            <li class="nav-item "><a class="nav-link" href="principal.php">Home</a></li><br>
            <li class="nav-item <?php if( $filtroMenu == 0 ){ echo 'active';}?>"><a class="nav-link" href="../pages/listaReceita.php">Todas as Receitas</a></li><br>
            <li class="nav-item <?php if( $filtroMenu == 1 ){ echo 'active';}?>"><a class="nav-link" href="../pages/listaReceita.php?filtro=1">Doces</a></li><br>
            <li class="nav-item <?php if( $filtroMenu == 2 ){ echo 'active';}?>"><a class="nav-link" href="../pages/listaReceita.php?filtro=2">Massas</a></li><br>
			<li class="nav-item <?php if( $filtroMenu == 4 ) { echo 'active';}?>"><a class="nav-link" href="../pages/listaReceita.php?filtro=4">Saladas</a></li><br>
            <li class="nav-item <?php if( $filtroMenu == 5 ) { echo 'active';}?>"><a class="nav-link" href="../pages/listaReceita.php?filtro=5">Guarnições</a></li><br>
            <li class="nav-item <?php if( $filtroMenu == 6 ) { echo 'active';}?>"><a class="nav-link" href="../pages/listaReceita.php?filtro=6">Drinks</a></li><br>
            <li class="nav-item"><a class="nav-link" href="principal.php">Contato</a></li><br>
            <li class="nav-item"><a class="nav-link" href="../index.php?sair=1">Sair</a></li><br>
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
					<h1>Lista de Receitas</h1>
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
						<h2>Lista de Receitas</h2>
					</div>
				</div>
			</div>
			
			<?php 
				
				if(isset($_GET["filtro"])){
					$filtro = $_GET["filtro"];	
					consultarReceita($filtro);
				}else{
					consultarReceita(null);
				}	
			?>
		</div>
	</div>
	<!-- End slides -->
	

	<!-- ALL JS FILES -->
	<?php
	
	
		function imprimirReceita($nomeReceita, $qtdPorcaoPessoa, $codCategoria,$tempoPreparo, $codTipoPreparo,$txtDescricaoReceita, $nomeUsuarioCriador,$id){

			
				echo "<div class='row feedStyle'> ";
				echo "	<div class='col-lg-8 col-md-8 col-8'>" ;
				echo "		<div class='blog-box-inner'> ";
							
				echo "			<a class='lightbox' href='images/gallery-img-01.jpg'>";
				echo "				<img class='img-fluid' src='getImages.php?id=".$id ."' alt='Gallery Images'> ";
				echo "			</a>";
							
				echo "			<div class='blog-detail'> ";
				echo "				<h4>". $nomeReceita ."</h4> ";
				echo "				<ul> ";
				echo "					<li><span>Criado por: " .$nomeUsuarioCriador . "</span></li> ";
				echo "					<li>|</li> ";
				echo "					<li><span>Tempo de preparo:".$tempoPreparo . "</span></li> ";
				echo "				</ul> ";
				echo "				<p>" . $txtDescricaoReceita  . "</p> ";
				echo "			</div> ";
				echo "		</div> ";
				echo "	</div> " ;
				echo "</div> " ;

		
		}

	

		function consultarReceita($filtro){
			$nome_servidor="35.205.150.43";
			$nome_usuario = "root";
			$senha = "c8h2p6m5";
			 $conecta = new mysqli($nome_servidor,$nome_usuario,$senha);
			 if($conecta ->connect_error){
				 die("Conexão falhou:".$conecta->connet_error."<br>");
			 }
	
		   
			if($filtro != null )
				 $sql = "SELECT * FROM cadastro_form.receita  as rc join cadastro_form.dados_pessoais as  dp on dp.id = rc.idUsuarioCriador  where codCategoria = " .$filtro ;
			else
				$sql = "SELECT * FROM cadastro_form.receita  as rc join cadastro_form.dados_pessoais as  dp on dp.id = rc.idUsuarioCriador ";
			
				
				
		   $resultado = $conecta->query($sql);
			 
		   
			if ($resultado->num_rows > 0) {

				for ($i=1; $i <= $resultado->num_rows; $i++) {
		
					$followingdata = $resultado->fetch_assoc();
					imprimirReceita($followingdata['nomeReceita'], $followingdata['qtdPorcaoPessoa'], $followingdata['codCategoria'],$followingdata['tempoPreparo'], $followingdata['codTipoPreparo'],$followingdata['txtDescricaoReceita'], $followingdata['nome'],$followingdata['idReceita']);
					
				}

			} else {
				echo "<div class='alert alert-warning' role='alert'>Não existem receitas para essa categoria!</div>";
			}



		}

		
	
	?>

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