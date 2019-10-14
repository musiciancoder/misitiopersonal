<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>



<div style="text-align:center; margin-top:15px"><h3>

        <?php


        $destino="andresguitarra1980@gmail.com";
        $nombre= $_POST["nombre"];
        $apellido= $_POST["apellido"];
        $quienloenvia=$_POST["email"];
        $asunto= $_POST["asunto"];
        $comentarios= $_POST["comentarios"];
        $contenido= "Nombre: " . $nombre . " Correo de quien lo envia: " . $quienloenvia . " Mensaje: " . $comentarios;
        $exito=mail($destino,"Contacto desde mi Sitio Web",$contenido);

        if($exito) {

            echo "Mensaje enviado con éxito, dentro de poco me contactaré contigo";

        }else{
            echo "Ha habido un error, por favor verifique sus datos de contacto o escriba directamente a alguno de estos correos: " . "<br>" . "andreshdg@hotmail.com" . "<br>" . "andresguitarra@gmail.com";

        }




 ?>
</h3>
</div>
</body>
</html>