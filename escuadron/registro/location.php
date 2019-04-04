<?php
include 'db.php';
   
$data =filter_var ( $_GET['cp']  , FILTER_SANITIZE_NUMBER_INT );
$sql = "SELECT cp,colonia,municipio,estado FROM  codigos_postales  WHERE cp='".$data."'";
mysqli_set_charset($conn,"utf8");
$result = mysqli_query($conn,$sql); 

 

   
while( $row = mysqli_fetch_array($result) ){
	
		$colonies = explode(";",$row['colonia']);
		$size=count($colonies);
		$items=array();		
		for($x=0; $x<$size; $x++){
				$items[$x]=$colonies[$x];
				
			} 
		 
		 $cp =  $row['cp'];
		 $municipio =  $row['municipio'];
		 $colonia =  json_encode($items,JSON_UNESCAPED_UNICODE);
		  $estado =  $row['estado'];
		 
		 $shirt =[
			'cp' => $cp,
			'colonias' =>$colonia,
			'municipio' => $municipio,
			'estado' =>$estado
		];

		echo json_encode($shirt,JSON_UNESCAPED_UNICODE);	
		 
	
   
    
}
  
?>