<?php
$conexion = new SQLite3('chat.db');
$resultado = $conexion->query("SELECT * FROM mensajes ORDER BY utc DESC LIMIT 5;");
while($fila = $resultado->fetchArray()){
								echo $fila['utc'];
								echo ' - ';
								echo $fila['autor'];
								echo ' - ';
								echo $fila['mensaje'];			
								echo "<br>";				
						 }
$conexion->close();
?>
