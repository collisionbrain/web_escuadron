<?php

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Registro</title> 
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 
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
  <style type="text/css">
         
        .datepicker {
            font-size: 0.875em;
        }
         
        
    </style>
<script type="text/javascript">
     
	 function getPostalData(zip)
	  {
		 $.ajax({
			  url: "location.php",
			  type: "get", //send it through get method
			  data: { 
				cp: zip 
			  },
			  success: function(response) {
				  console.log(response);
				  console.log("#########################");
				  $('#municipal').children().remove();
				  $('#estate').children().remove();
				  var json = $.parseJSON(response); 
				
				 $('#municipal').append(new Option(json.municipio, 0, true, true));
				 $('#state').append(new Option(json.estado, 0, true, true));
				 
				/*  var jsonArray = $.parseJSON(json.colonias);
				  var nc=jsonArray.length;
				  if(nc>1){
				   for(var a=0;a<=jsonArray.length;a++){
					    console.log("#########################");
						console.log(jsonArray[a]);
						if(jsonArray[a]!==undefined){
							$('#municipal').append(new Option(jsonArray[a], a, true, true));
						}
				     
				   }
				  }else{
					  $('#municipal').append(new Option(jsonArray[0], 0, true, true));
					  $('#state').append(new Option(jsonArray[0], 0, true, true));
				  }
				  */
				   
			  },
			  error: function(xhr) {
				//Do Something to handle error
			  }
			});
						
		 
	
	  }
	  
	  function zipFunction(){
		    var edValue = document.getElementById("zip");
			var s = edValue.value; 
			if(s.length>=5){
				getPostalData(s);
			}
			
	  }
	  
	  function getBase64(file) {
		   var reader = new FileReader();
		   reader.readAsDataURL(file);
		   reader.onload = function () {
			 console.log(reader.result);
		   };
		   reader.onerror = function (error) {
			 console.log('Error: ', error);
		   };
		}
	 function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if ( (charCode > 31 && charCode < 48) || charCode > 57) {
				return false;
			}
			return true;
		}
		
		function submitRegister(){
			var name=$('#firstName').val();
			var lastName=$('#lastName').val();
			var gender=$('#gender option:selected' ).text();
			var phone=$('#phone').val();
			var email=$('#email').val();
			var diagnostico=$('#diagnostico').val();
			var identificacion=$('#identificacion').val();
			var comprobante=$('#comprobante').val();
			var zip=$('#zip').val();
			var municipal=$('#municipal option:selected' ).text();
			var state=$('#state option:selected' ).text();
			var patology=$('#patology option:selected' ).text(); 
			var fehca_nacimiento=$('#dayn').val()+"/"+$('#monthn').val()+"/"+$('#yearn').val();
			var fehca_diagnostico=$('#day').val()+"/"+$('#month').val()+"/"+$('#year').val();
			var patology=$('#password').val();
			var password_confirm=$('#password_confirm').val();
			
			
		}
</script>
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/logo.jpg" alt="" width="72" height="72">
    <h2>Registro de paciente.</h2> 
  </div>

 <div class="container">
      <h4 class="mb-3">Informacion personal.</h4>
      <form id="formRegister" class="needs-validation" action="save.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
             El nombre es requerido.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellidos</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
             Los Apellidos son requeridos.
            </div>
          </div>
        </div>
     <div class="mb-3">
                <label for="state">Genero</label>
                <select class="custom-select d-block w-100" id="gender" name="gender"  required>
                  <option value=""></option>
                  <option value="Masculino">Masculino</option>
				  <option value="Femenino">Femenino</option>
				  <option value="Otro">Otro</option>
                </select>
                <div class="invalid-feedback">
                 Por favor selecciona tu genero.
                </div>
              </div>
        <div class="mb-3">
          <label for="username">Telefono de contacto</label>
          <input type="tel" class="form-control" maxlength="10"  name="phone"  id="phone" onkeypress="return isNumber(event)"  placeholder="" required>
            <div class="invalid-feedback" style="width: 100%;">
              El telefono es requerido.
            </div>
        </div>

        <div class="mb-3">
          <label for="email">Correo electronico  </label>
          <input type="email" class="form-control" id="email" name="email" pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$"  required >
          <div class="invalid-feedback">
           El correo electronico es requerido.
          </div>
        </div>
		 <div class="mb-3">
          <label for="email">Documentación</label>
           <div class="input-group">
		  
		</div>
		<div class="input-group">
		  <div class="input-group-prepend">
			<span class="input-group-text" id="inputGroupFileAddon01">Diagnostico Médico</span>
		  </div>
		  <div class="custom-file">
			<input type="file" class="custom-file-input" id="diagnostico" name="diagnostico" aria-describedby="inputGroupFileAddon01">
			<label class="custom-file-label" for="inputGroupFile01"></label>
		  </div>
		</div>
		<br>
		<div class="input-group">
		  <div class="input-group-prepend">
			<span class="input-group-text" id="inputGroupFileAddon01">Indentifición Oficial</span>
		  </div>
		  <div class="custom-file">
			<input type="file" class="custom-file-input" id="identificacion" name="identificacion" aria-describedby="inputGroupFileAddon01">
			<label class="custom-file-label" for="inputGroupFile01"></label>
		  </div>
		</div>
		<br>
		<div class="input-group">
		  <div class="input-group-prepend">
			<span class="input-group-text" id="inputGroupFileAddon01">Comprobante de Domicilio</span>
		  </div>
		  <br>
		  <div class="custom-file">
			<input type="file" class="custom-file-input" id="comprobante" name="comprobante"  aria-describedby="inputGroupFileAddon01">
			<label class="custom-file-label" for="inputGroupFile01"></label>
		  </div>
		</div>
		<br>
		
        </div>	
		 <div class="col-md-3">
		  <label>Fecha de nacimiento</label>
		  
		 </div>
        <div class="row">
		
				
			
           <div class="col-md-3 col-md-3">     
            <select class="custom-select d-block w-100" id="dayn"  name="dayn" required>
                <option value="">Dia...</option>
				<option value="01">	01	</option>
                <option value="02">	02	</option>
				<option value="03">	03	</option>
				<option value="04">	04	</option>
				<option value="05">	05	</option>
				<option value="06">	06	</option>
				<option value="07">	07	</option>
				<option value="08">	08	</option>
				<option value="09">	09	</option>
				<option value="10">	10	</option>
				<option value="11">	11	</option>
				<option value="12">	12	</option>
				<option value="13">	13	</option>
				<option value="14">	14	</option>
				<option value="15">	15	</option>
				<option value="16">	16	</option>
				<option value="17">	17	</option>
				<option value="18">	18	</option>
				<option value="19">	19	</option>
				<option value="20">	20	</option>
				<option value="21">	21	</option>
				<option value="22">	22	</option>
				<option value="23">	23	</option>
				<option value="24">	24	</option>
				<option value="25">	25	</option>
				<option value="26">	26	</option>
				<option value="27">	27	</option>
				<option value="28">	28	</option>
				<option value="29">	29	</option>
				<option value="30">	30	</option>
				<option value="31">	31	</option>

            </select>
             <div class="invalid-feedback">
				Selecciona tu dia de nacimiento.
			</div>
          </div>
		   <div class="col-md-5 col-md-3">  
            <select class="custom-select d-block w-100" id="monthn" name="monthn" required>
            <option value="">Mes...</option>
            <option value="Enero">Enero</option>
			<option value="Febrero">Febrero</option>
			<option value="Marzo">Marzo</option>
			<option value="Abril">Abril</option>
			<option value="Mayo">Mayo</option>
			<option value="Junio">Junio</option>
			<option value="Julio">Julio</option>
			<option value="Agosto">Agosto</option>
			<option value="Septiembre">Septiembre</option>
			<option value="Octubre">Octubre</option>
			<option value="Noviembre">Noviembre</option>
			<option value="Diciembre">Diciembre</option> 
            </select value="">
            <div class="invalid-feedback">
				Selecciona tu mes de nacimiento.
			</div>
          </div>		  
		   <div class="col-md-4 col-md-3"> 
            <input type="text" class="form-control"  maxlength="4"  id="yearn" name="yearn"  required pattern="[0-9]+" placeholder="Año...">
            <div class="invalid-feedback">
              Ingresa tu año de nacimiento.
            </div> 
          </div> 
    </div>

		
	 <br>
	 <div class="row">
              <div class="col-md-3 mb-3">
                <label for="country">Codigo postal</label>
				 <input type="text" class="form-control" id="zip" name="zip" onInput="zipFunction()" maxlength="5"  onkeypress="return isNumber(event)" placeholder="" required>
                <div class="invalid-feedback">
                  Ingresa tu codigo postal.
                </div>
                
              </div>
              <div class="col-md-5 mb-3">
                <label for="state">Municipio</label>
                <select class="custom-select d-block w-100" id="municipal" name="municipal" required>
                  <option value="">Choose...</option>  
                </select>
                
              </div>
              <div class="col-md-4 mb-3">
                <label for="zip">Estado</label>
               <select class="custom-select d-block w-100" id="state" name="state" required>
                  <option value=""></option> 
                </select>
               
              </div>
            </div>
			

	 <div class="row">
          <div class="col-md-3">
		  <br>
		  <h4 class="mb-3">Informacion medica.</h4>  
		  </div>
		  </div>
		   
		    <div class="mb-3">
                <label for="state">Patologia</label>
                <select class="custom-select d-block w-100" id="patology"  name="patology"required>
                  <option value="">Selecciona...</option>
                  <option value="Cancer">Cancer</option>
				  <option value="Diabetes">Diabetes</option>
				  <option value="Epilepsia">Epilepsia</option>
				  <option value="Fibromalgia">Fibromalgia</option>
				  <option value="Autismo">Autismo</option>
				  <option value="Ansieda">Ansieda</option>
				  <option value="Estres">Estres</option>
                </select>
                <div class="invalid-feedback">
                  Por favor selecciona una opcion.
                </div>
              </div>
		  
		<div class="col-md-3">
		  <label>  Fecha de diagnostico</label>
		 </div>
        <div class="row"> 
           <div class="col-md-3 col-md-3">     
            <select class="custom-select d-block w-100" id="day" name="day" required>
                <option value="">Dia...</option>
				<option value="01">	01	</option>
                <option value="02">	02	</option>
				<option value="03">	03	</option>
				<option value="04">	04	</option>
				<option value="05">	05	</option>
				<option value="06">	06	</option>
				<option value="07">	07	</option>
				<option value="08">	08	</option>
				<option value="09">	09	</option>
				<option value="10">	10	</option>
				<option value="11">	11	</option>
				<option value="12">	12	</option>
				<option value="13">	13	</option>
				<option value="14">	14	</option>
				<option value="15">	15	</option>
				<option value="16">	16	</option>
				<option value="17">	17	</option>
				<option value="18">	18	</option>
				<option value="19">	19	</option>
				<option value="20">	20	</option>
				<option value="21">	21	</option>
				<option value="22">	22	</option>
				<option value="23">	23	</option>
				<option value="24">	24	</option>
				<option value="25">	25	</option>
				<option value="26">	26	</option>
				<option value="27">	27	</option>
				<option value="28">	28	</option>
				<option value="29">	29	</option>
				<option value="30">	30	</option>
				<option value="31">	31	</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
			 
          </div>
		   <div class="col-md-5 col-md-3">  
            <select class="custom-select d-block w-100" id="month" name="month" required>
              <option value="">Mes...</option>
            <option value="Enero">Enero</option>
			<option value="Febrero">Febrero</option>
			<option value="Marzo">Marzo</option>
			<option value="Abril">Abril</option>
			<option value="Mayo">Mayo</option>
			<option value="Junio">Junio</option>
			<option value="Julio">Julio</option>
			<option value="Agosto">Agosto</option>
			<option value="Septiembre">Septiembre</option>
			<option value="Octubre">Octubre</option>
			<option value="Noviembre">Noviembre</option>
			<option value="Diciembre">Diciembre</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div> 
          </div>		  
		   <div class="col-md-4 col-md-3"> 
            <input type="text" class="form-control"  maxlength="4"  id="year"  name="year"   onkeypress="return isNumber(event)" placeholder="Año...">
            <div class="invalid-feedback">
              Please select a valid country.
            </div> 
          </div>
		  
    </div>
       

       
        <hr class="mb-4">
 	 <div class="row">
          <div class="col-md-3">
		  <br>
		  <h4 class="mb-3">Cuenta de acceso.</h4>  
		  </div>
		  </div>
		   <div class="mb-3">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password"
				data-bv-identical="true"
                data-bv-identical-field="confirmPassword"
                data-bv-identical-message="The password and its confirm are not the same"		  >
		  
          </div>
	  <div class="mb-3">
          <label for="password">Confirma tu contraseña</label>
          <input type="password" class="form-control" id="password_confirm" name="password_confirm"
				data-bv-identical="true"
                data-bv-identical-field="password"
                data-bv-identical-message="The password and its confirm are not the same">
		   
          </div>
        
           
          
        </div>
        <br>
        <button class="btn btn-primary btn-lg btn-block" onclick="submitRegister()" type="submit">Registrar</button>
      </form>
    </div>
 
<script>
$(document).ready(function() {
    $('#formRegister').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            password: {
                validators: {
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
});
</script>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 Escuadron cannabico</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="aviso_privacidad.php">Aviso de privacidad</a></li>
      
    </ul>
  </footer>
</div>
</body>
</html>