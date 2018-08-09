<?php 


function crear_ficheroV($abc){
    
    $flujo= fopen('vehiculos.xml','w');
    fputs($flujo,$abc);
    fclose($flujo);    
}

function crear_ficheroR($abc){
    
    $flujo= fopen('reservacion.xml','w');
    fputs($flujo,$abc);
    fclose($flujo);    
}
 //conexion de base de datos
 $db_host="localhost";
 $db_nombrebdd="examen";
 $db_usuario="root";
 $db_contra="";

$dwes=mysqli_connect($db_host,$db_usuario,$db_contra);
if(mysqli_connect_errno($dwes)){
    echo "Comprueba la conexion";
}
else{
    echo "Conexion OK";
    echo "<br/>";
}

mysqli_set_charset($dwes,"utf-8");
mysqli_select_db($dwes,$db_nombrebdd) or die (" Base no se encuentra"); //verificar que la base datos si se encuentra

//recorer la base de datos
//vehivulos
if (isset($dwes))
{

	$a = $sql="SHOW TABLES";
    $xml="<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	$b=mysqli_query($dwes,$a);
	while(($ver=mysqli_fetch_row($b))==true)
	{
	echo $ver[0]." ";
	echo "<br/>";
	$xml .= "\t<".$ver[0].">\n";
    $c= $sql="select *from vehiculos";
    $d=mysqli_query($dwes,$c);
    echo "Datos de la tabla Vehículos";
    echo "<br/>";

		while($fila =mysqli_fetch_array($d,MYSQLI_ASSOC))
		{

            $xml .= "\t\t<vehiculo>\n";

            foreach ($fila as $k => $v) 
			{
                echo "$k : $v.\n";
                echo "<br/>";

                $xml .= "\t\t\t<".$k.">".$v."</".$k.">\n";
            }
            $xml .= "\t\t</vehiculo>\n";
		}
        $xml .= "\t</".$ver[0].">\n";
	
	}
	
	crear_ficheroV($xml); 
}
if (isset($dwes))
{

	$a = $sql="SHOW TABLES";
    $xml="<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	$b=mysqli_query($dwes,$a);
	while(($ver=mysqli_fetch_row($b))==true)
	{
	echo $ver[0]." ";
	echo "<br/>";
	$xml .= "\t<".$ver[0].">\n";
    $c= $sql="select *from reservaciones";
    $d=mysqli_query($dwes,$c);
    echo "Datos de la tabla Reservaciones";
    echo "<br/>";

		while($fila =mysqli_fetch_array($d,MYSQLI_ASSOC))
		{

            $xml .= "\t\t<reservacion>\n";

            foreach ($fila as $k => $v) 
			{
                echo "$k : $v.\n";
                echo "<br/>";

                $xml .= "\t\t\t<".$k.">".$v."</".$k.">\n";
            }
            $xml .= "\t\t</reservacion>\n";
		}
        $xml .= "\t</".$ver[0].">\n";
	
	}
	
	crear_ficheroR($xml); 
}
?>