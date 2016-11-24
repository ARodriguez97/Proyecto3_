<?php

				//realizamos la conexión
					$conexion = mysqli_connect('localhost', 'root','', 'bd_alejandrorodriguez');
					$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

					if (!$conexion) {
							echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
							echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
							exit;
					}
					$sin_nada = 0 ;

					extract($_REQUEST);
					$material = $_GET['reservar'];
					echo $material;
		    mysqli_close($conexion);
				?>
