<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tu Cuenta</title>
	<link rel="icon" href="img/logo.png" type="image/x-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="admin.css">

</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Real Pasion <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="img/doña1.png" alt="UserIcon">
					<figcaption class="text-center text-titles">Camila</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="admin.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
				<li>
					<a href="categoriaAdm.html" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Jugadores
					</a>
					
				</li>
				
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<br><br>

		<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="titulo1">Subir Imágen</h1>
                <hr>
                <br>
                
                <form action="Backend/subir.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="my-input">Selecciona Una Imágen</label>
                    <input id="my-input" type="file" name="imagen" class="archivo">
                </div>
                <br>

                <div class="form-group">
                    <label for="my-input">Título De La Imágen</label>
                    <input id="my-input" class="form-control" type="text" name="titulo">  
                </div>
          

                  <?php  if(isset ($_SESSION['mensaje'])){ ?>
                  <div class="alert alert-<php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['mensaje']; ?> </strong> 
                    
                    <button  type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" >
                    </button>
            
                  </div>
                    <?php session_unset(); } ?>
                    <br>
                    <input type="submit" value="Guardar" class="boton" name="Guardar" >
                </form>
            </div>
            
            </div> 
        </div>
        
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



		</div>
		
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"> <small></small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<a href="categoriaAdm.html"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Jugadores
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">21</p>
					<small>Registrados</small>
				</div>
			</article></a>
			<a href="entrenadores.html"><article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Entrenadores
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">8</p>
					<small>Register</small>
				</div>
			</article></a>
		</div>
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Horarios<small></small></h1>
			</div>
			<section id="cd-timeline" class="cd-container">
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="img/doña1.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">1 - Carla (Entrenadora)</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                        </p>
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/204</span>
                    </div>
                </div>  
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="img/doña1.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">2 - Laura (Entrenadora)</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                        </p>
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2024</span>
                    </div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="img/doña1.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">3 - Santiago (Entrenador)</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                        </p>
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2024</span>
                    </div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="img/doña1.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">4 - Daniel (Entrenador)</h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                        </p>
                        <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2024</span>
                    </div>
                </div>   
            </section>

			<?php
Include('Backend/conexion.php');
$query= "select * from imagenes2";
$resultado = mysqli_query($conn,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
   <link rel="stylesheet" href="galeria.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />

  <body>

   <br>


	</section>

	
	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Notificacion</h4>
				      	<p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Notificacion</h4>
				      	<p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Notificacion</h4>
				      	<p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Notificacion</h4>
				      	<p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Ayuda</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>

    
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>