<?php
$conexion = new SQLite3('chat.db');
$resultado = $conexion->query("INSERT INTO mensajes VALUES ('".date('U')."','jesus ferrer','".$_GET['mensaje']."');");
$conexion->close();

echo '<meta http-equiv="REFRESH" content="0;url=index.php">';
?>
