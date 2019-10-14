

<?php

$nombre_usuario=isset($_GET['nombre']) ? $_GET['nombre'] : $_POST['nombre'];
$email_usuario=isset($_GET['email']) ? $_GET['email'] : $_POST['email'];
$comentario_usuario=isset($_GET['comentarios']) ? $_GET['comentarios'] : $_POST['comentarios'];
$para = 'andreshdg@hotmail.com';
$titulo = 'contacto sitio web';
$header = 'From: ' . $email,

if($_GET['submit']){
if (mail($para, $titulo, $header)){
echo "<script language='javascript'>
alert ('¡Mensaje enviado correctamente!)';
window.location.href='http://ahdg80.com';
</script>"
}else{
echo '¡Fallo el envio!'
}
}
?>