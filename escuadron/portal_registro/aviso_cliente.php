<?php

?>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title> 

  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="dist/components/modal.css">
  <script src="assets/library/jquery.min.js"></script>
  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 75%;
    }
  </style>
  
   
</head>
<body>

<div class="ui modal">
    <div  >
    <img class="d-block mx-auto mb-4" src="images/logo.jpg" alt="" width="72" height="72">
    <h2>Aviso de privacidad simplificado.</h2>
     <p>El Colectivo Escuadron Canabico, es el responsable del tratamiento de los datos personales que nos proporcione.</p>
	<p style="text-align: justify;">Sus datos personales ser&aacute;n utilizados para mantener el control de el registro y suministro del producto a los susuarios quienes se registran al protocolo de investigacion y este tratamiento de informacion forma parte de las medidas de seguridad adoptadas, por lo que, se comunica que no se efectuar&aacute;n tratamientos adicionales.</p>
	<p style="text-align: justify;">Se informa que no realizar&aacute;n transferencias que requieran su consentimiento, salvo aquellas que sean necesarias para atender requerimientos de informaci&oacute;n de una autoridad competente, debidamente fundados y motivados.</p>
	<p style="text-align: justify;">Usted podr&aacute; solicitar el aviso de privacidad integral en el sitio virtual del colectivo a traves del correo aviso_privacidad@escuadroncannabico.mx</p>
	<p style="text-align: justify;">Este documento esta sujeto a cambios sin previo aviso.</p>
	<p></p>
	<p><strong>Acuerdos del paciente.</strong></p>
	<ul>
	<li>Soy Ciudadano Mexicano en pleno uso de mis facultades mentales.</li>
	<li>Estoy dispuesto a participar del protocolo de investigaci&oacute;n a trav&eacute;s de un uso responsable del tratamiento homeop&aacute;tico que se me asigne.</li>
	<li>Acepto que la informaci&oacute;n aqu&iacute; aportada es ver&iacute;dica y comprobable</li>
	<li>&nbsp;Estoy de acuerdo y seguir&eacute; las recomendaciones que de este protocol0 me sean dictadas.</li>
	<li>Estoy conforme con el uso que se les d&eacute; a mis datos siempre que sean para los fines exclusivos de este Protocolo de Investigaci&oacute;n y del Escuadr&oacute;n Cannabico.</li>
	</ul>

 </div>
</div>

</body>
<script>
$('.ui.modal')
  .modal()
;
</script>
</html>