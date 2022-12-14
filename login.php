<?php
include("conexion.php");
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$tel=$_POST["tel"];
$opi=$_POST["opi"];
$b="";


	//registrar
	if(isset($_POST["subir"])){
					
	
			$sqlgrabar="INSERT INTO t_cacli(nom,correo,telefono,saber) values('$nombre','$correo','$tel','$opi')";
		
			
			mysqli_query($conn,$sqlgrabar);
			echo "<script>alert('Opinion guardada');window.location='index.html'</script>";
			
			
		
    }
?>