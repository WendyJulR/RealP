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
    <title>Post2</title>
   
   <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="categorias.css">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />

  <body>

   <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                

                  <?php if(isset ($_SESSION['mensaje'])){ ?>
                  <div class="alert alert-<php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['mensaje']; ?> </strong> 
                    
                    <button  type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" >
                    </button>
            
                  </div>
                    <?php session_unset(); } ?>
                    <br>
                    
                </form>
            </div>
            <div class="col-lg-8">
                <h1 class="galeria"> Galería De Imágenes</h1>
            
                <hr>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php foreach($resultado as $row){ ?>
                    <div class="col">
                      <div class="card">
                        <img src="Backend/imagenes2/<?php echo $row ['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><strong><?php echo $row['nombre']; ?> </strong></h5>
              
                        </div>
                    
                      </div>
                      <?php }?>  
                    </div>
            </div> 
        </div>
        
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>