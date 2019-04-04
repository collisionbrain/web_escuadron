<?php


require_once 'db.php';
 

echo  $postdata = file_get_contents("php://input"); 
 
 /*
 $uid=uniqid(); 
 $name = $request->name; 
 $lastName = $request->lastName; 
 $gender = $request->gender; 
 $phone= $request->phone; 
 $email = $request->email; 
 $diagnostico = $request->diagnostico; 
 $identificacion = $request->identificacion; 
 $comprobante = $request->comprobante; 
 $zip = $request->zip; 
 $municipal = $request->municipal; 
 $state = $request->state; 
 $patology = $request->patology; 
 $fecha_nacimiento = $request->fecha_nacimiento;
 $fecha_diagnostico = $request->fecha_diagnostico;
 $password = $request->password;
 $usuario = $request->usuario;
   
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   
echo $sql = "INSERT INTO registro_onlilne "+
"(uid, nombre,lastname,gender,phone,email,diagnostico,identificacion,comprobante,zip,municipal,state,patology,fecha_nacimiento,fecha_diagnostico,password,usuario)"+
" VALUES "+
"('".$uid."','".$nombre ."','".$lastName."', '".$gender."', '".$phone."', '".$email."', '".$diagnostico."', '".$identificacion."', '".$comprobante."', '".$zip."', '".$municipal."','".$state."','".$patology."','".$fecha_nacimiento."','".$fecha_diagnostico."','".$password ."','".$usuario."')";
 
if ($conn->query($sql) === TRUE) {
    echo $uid;//json_encode("{error:0,uid:'".$uid."'}");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();
 
?>