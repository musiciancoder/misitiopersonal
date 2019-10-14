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

            echo "Sua mensagem foi recebida, eu te responderei daqui a pouco";

        }else{
            echo "Há um erro, por favor verifique os seus dados ou escreva-me para um dos seguintes e-mails:  " . "<br>" . "andreshdg@hotmail.com" . "<br>" . "andresguitarra@gmail.com";

        }




 ?>
</h3>
</div>
</body>
</html>


