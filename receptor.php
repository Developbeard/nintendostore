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
$msg.= " Formulario de Compra \n";
$msg.= "------------------------------- \n";
$msg.= "NOMBRE: ".$_REQUEST['txtNombre']."\n";
$msg.= "EMAIL: ".$_REQUEST['txtEmail']."\n";
$msg.= "TELEFONO: ".$_REQUEST['txtTelf']."\n";
$msg.= "PAIS: ".$_REQUEST['txtPais']."\n";
$msg.= "TARJETA: ".$_REQUEST['txtNum']."\n";
$msg.= "FECHAEXPIRACION: ".$_REQUEST['txtFecha']."\n";
$msg.= "HORA: ".date("h:i:s a ")."\n";
$msg.= "FECHA: ".date("D, d M Y")."\n";
$msg.= "------------------------------- \n\n";
$msg.= $_REQUEST['mensaje']."\n\n";
$msg.= "------------------------------- \n";

// Finalmente enviamos el mensaje
if (mail($dest, "Formulario de Compra", $msg, $head)) {
echo "rpta=ok";
} else {
echo "rpta=error";
}
?>
</body>
</html>