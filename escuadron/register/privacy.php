<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Aviso de privacidad simplificadovv  </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  
  <link rel='stylesheet' href='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.css'>
<link rel='stylesheet' href='http://localhost:8080/docs.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div ng-controller="DemoCtrl" ng-cloak="" class="md-inline-form" ng-app="MyApp" layout="column" layout-sm="row" layout-align="center center" layout-align-sm="start start" layout-fill>
		<md-content id="SignupContent" class="md-whiteframe-10dp" flex-sm>
				<md-toolbar flex id="materialToolbar">
						<div class="md-toolbar-tools"> <span flex=""></span> <span class="md-headline" align="center">Aviso de privacidad simplificado</span> <span flex=""></span> </div>
				</md-toolbar>
				<div layout-padding="">
						<div>
						Bienvenido <?php echo $_POST["name"]; ?><br></div>
						<form name="userForm" method="POST" action="" ng-submit="user.submit(userForm.$valid)" enctype="multipart/form-data">
								<input type="hidden" name="action" value="signup" />
								 
							 
								<div  >
<p>El Colectivo Escuadron Canabico, es el responsable del tratamiento de los datos personales que nos proporcione.</p>
<p style="text-align: justify;">Sus datos personales ser&aacute;n utilizados para mantener el control de el registro y ventas de quienes se registran al protocolo de investigacion y este tratamiento forma parte de las medidas de seguridad adoptadas, por lo que, se comunica que no se efectuar&aacute;n tratamientos adicionales.</p>
<p style="text-align: justify;">Se informa que no realizar&aacute;n transferencias que requieran su consentimiento, salvo aquellas que sean necesarias para atender requerimientos de informaci&oacute;n de una autoridad competente, debidamente fundados y motivados.</p>
<p style="text-align: justify;">Usted podr&aacute; solicitar el aviso de privacidad integral en el sitio virtual del colectivo.</p>
<p style="text-align: justify;">Este documento esta sujeto a cambios sin previo aviso.</p>
<p></p>
<p><strong>Acuerdos del paciente.</strong></p>
<ul>
<li>Soy Ciudadano Mexicano en pleno uso de mis facultades mentales.</li>
<li>Estoy dispuesto a participar del protocolo de investigaci&oacute;n a trav&eacute;s de un uso responsable del tratamiento homeop&aacute;tico que se me asigne.</li>
<li>Acepto que la informaci&oacute;n aqu&iacute; aportada es ver&iacute;dica y comprobable</li>
<li>&nbsp;Estoy de acuerdo y seguir&eacute; las recomendaciones que de este protocola me sean dictadas.</li>
<li>Estoy conforme con el uso que se les d&eacute; a mis datos siempre que sean para los fines exclusivos de este Protocolo de Investigaci&oacute;n y del Escuadr&oacute;n Cannabico.</li>
</ul>


								</div>
								<md-button class="md-raised md-primary" ng-href="index.html" style="width:100%; margin: 0px 0px;" type="submit" ng-disabled="userForm.$invalid" name="submit">Continuar el registro</md-button>
								<md-button class="md-raised md-primary" ng-href="../"  style="width:100%; margin: 15px 0px 0px 0px;">Volver al sitio</md-button>
						</form>
				</div>
		</md-content>
</div>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-animate.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-route.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-aria.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-messages.min.js'></script>
<script src='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/assets-cache.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
