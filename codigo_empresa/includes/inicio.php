<?php
include ("../connections/connection.php");
session_start();
if($_POST["inicio"]);{

//inicia sesion para los usuarios
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];




///Consultamos el ususario la clave
$con="SELECT * FROM `usuario` WHERE `documento` = '$usuario' and password = '$clave'";
$query = mysqli_query ($mysqli,$con);
$fila=mysqli_fetch_assoc($query);


if($fila)
    {
            ////si el usuario y la clave son correctas, creamos las sesiones 
            $_SESSION['usuario'] = $fila['documento'];
            $_SESSION['tipo']=$fila['id_tipo_usuario'];

            //depediendo del tipo de usuario lo redireccionamos a una pagina 
            //si es un cliente de 
            if($_SESSION['tipo'] == 1 )
                {
                        header('Location: ../vista/administrador/index.html');
                        exit();
                }
                if($_SESSION['tipo'] ==2 ){
                    header('Location: ../vista/usuario/index.html');
                    exit();
                }
             }
            else
            {
                //si el usuario y clave son incorrectos lo lleva a la pagiana de index.php
                header('Location: ../index.html');
            }

    }
?>