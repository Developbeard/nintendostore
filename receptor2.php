<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
$dest = 'giasendo@gmail.com';
$head = "From: ".$_POST['txtEmail']."\r\n";
// Ahora creamos el cuerpo del mensaje
$msg = "------------------------------- \n";
$msg.= " Comentarios \n";
$msg.= "------------------------------- \n";
$msg.= "NOMBRE: ".$_REQUEST['txtNombre']."\n";
$msg.= "EMAIL: ".$_REQUEST['txtEmail']."\n";
$msg.= "TELEFONO: ".$_REQUEST['txtTelf.esy.es/']."\n";
$msg.= "HORA: ".date("h:i:s a ")."\n";
$msg.= "FECHA: ".date("D, d M Y")."\n";
$msg.= "------------------------------- \n\n";
$msg.= $_REQUEST['txtMensaje']."\n\n";
$msg.= "------------------------------- \n";

// Finalmente enviamos el mensaje
if (mail($dest, "Comentarios", $msg, $head)) {
echo "rpta=ok";
} else {
echo "rpta=error";
}
?>
</body>
</html>