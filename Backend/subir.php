<?php
include('conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp = $_FILES['imagen']['tmp_name'];

        if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo, 'webp') || strpos($tipo, 'png') ))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp, png';
            $_SESSION['tipo'] = 'danger';
            header('location:../index.php');

        }else{
            $query = "INSERT INTO imagenes2(imagen,nombre) values('$imagen', '$nombre')";
            $resultado = mysqli_query($conn, $query);
            if($resultado){
                move_uploaded_file($temp, 'imagenes2/'.$imagen);
                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                header('location:../Admin.php');
            }else{
                $_SESSION['mensaje'] ='ocurrió un error en el servidor';
                $_SESSION['tipo'] = 'danger';
            }
        }
    }
}

?>