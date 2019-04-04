<?php
 
$producto=$_GET['producto'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Aviso de Privacidad</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  <script>
function realizaProceso(){
        var parametros = {
                "producto" : <?php echo $producto; ?>,
                "aviso_aceptado" : true
        };
        var qs = $.param(parametros);
		window.location = 'registro_online.php?' + qs;
        
}
</script> 
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-justify">
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
	<form >
	<button class="btn btn-primary btn-lg btn-block" type="button" onclick="realizaProceso()">Continuar con registro</button>
	<br>
	<button class="btn btn-primary btn-lg btn-block" type="submit" >Volver al sitio</button>
	<br>
    </form>
  </html>