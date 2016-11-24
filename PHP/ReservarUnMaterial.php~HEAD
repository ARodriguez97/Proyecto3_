<?php

		//realizamos la conexión
			$conexion = mysqli_connect('localhost', 'root','', 'bd_bicis');
			$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

			if (!$conexion) {
					echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
					echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
					exit;
			}
			$usuario = $_POST['usuario'];
			$usuarios = "SELECT * FROM tbl_usuario WHERE nombre_usuario = $usuario";
			$sql = mysqli_query($conexion, $sql);
			if(mysqli_num_rows($usuarios>0){
				echo "Número de reservas: " . mysqli_num_rows($usuarios) . "<br/><br/>";
			while($usuario = mysqli_fetch_array($usuarios)){
				$id_usuario = $usuario['id_usuario']
			}
			$sin_nada = 0 ;
			extract($_REQUEST);
      $hoy = date("Y-m-d H:i:s");
      $material=$_POST['materiales'];
      $sql = "INSERT INTO bd_educayaprende.tbl_reserva (fecha_reserva, fechaF_reserva, estado_reserva , id_usuario) VALUES ($hoy ,'0000-00-00 00:00:00', '0' , $id_usuario);"
      $sql= mysqli_query($conexion, $sql);
      echo "Se ha efectuado su reserva";
    mysqli_close($conexion);
		?>
