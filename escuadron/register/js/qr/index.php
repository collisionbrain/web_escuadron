<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  <link rel='stylesheet' href='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.css'>  
  
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="qrcode.js"></script>

</head>

<body>

  <div ng-controller="CodeCtrl" ng-cloak="" class="md-inline-form" ng-app="MyApp" layout="column" layout-sm="row" layout-align="center center" layout-align-sm="start start" layout-fill>
		<md-content  class="md-whiteframe-10dp" flex-sm>
				<md-toolbar flex id="materialToolbar">
						<div class="md-toolbar-tools"> <span class="md-headline" align="center">Codigo de identificación</span> <span flex=""></span> </div>
				</md-toolbar>
				<div>
				 <br><br><br><br><br><br>
				  <div id="qrcode" style="width:200px; height:200px;  margin:0 auto;" ></div>
				 
				 <br><br><br><br><br>
				 <div style="width:50%; height:150px;  margin:0 auto; margin:0 auto;" >
				  <p>Este codigo te servira para indetificarte en las actividades del Escuadrón cannabico.</p>
				  <p>Este codigo es intransferible y deber presentarse junto con una identificación oficial.</p>
				  <p>Este codigo es intransferible y deber presentarse junto con una Identificacion oficial.</p>
				 <br><br><br>
				 <h4 onclick="window.print();"> Imprimir </h4>
				</div>
				<br><br><br>
				</div>
		</md-content>

<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-animate.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-route.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-aria.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-messages.min.js'></script>
<script src='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/assets-cache.js'></script> 
<script  src="js/index.js"></script>

<script type="text/javascript">
<?php 
$codigo=$_GET['codigo'];
 ?>
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 150,
	height : 150
});

function makeCode () {		
	 
	var code='<?php echo $codigo;?>'
    qrcode.makeCode(code);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>


</body>

</html>



 