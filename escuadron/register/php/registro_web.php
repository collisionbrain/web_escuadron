<?php


require_once 'db.php';
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

 $uid=uniqid();
 $nombre_completo = $request->nombre_completo; 
 $telefono = $request->telefono; 
 $genero = $request->genero; 
 $correo= $request->correo; 
 $fecha_nacimiento = $request->fecha_nacimiento; 
 $fecha_nacimiento= substr($fecha_nacimiento,0,10);
 $fecha_diagnostico = $request->fecha_diagnostico;  
 $fecha_diagnostico= substr($fecha_diagnostico,0,10);
 $product = $request->product; 
 $patology = $request->patology; 
 $desc_patology = $request->desc_patology; 
 $id_estado=0;
 $id_municipio=0;
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   
echo $sql = "INSERT INTO ec_registro_web  (uid, nombre_completo,genero,telefono, correo,fecha_nacimiento,fecha_diagnostico,producto,patologia,desc_patologia,id_estado,id_municipio) VALUES ('".$uid."','".$nombre_completo ."','".$genero."', '".$telefono."', '".$correo."', '".$fecha_nacimiento."', '".$fecha_diagnostico."', '".$product."', '".$patology."', '".$desc_patology."', '".$id_estado."', '".$id_municipio."')";
  
if ($conn->query($sql) === TRUE) {
    echo $uid;//json_encode("{error:0,uid:'".$uid."'}");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>