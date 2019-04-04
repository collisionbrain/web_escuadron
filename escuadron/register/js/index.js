

var app = angular.module('MyApp');
app.controller('DemoCtrl', function($scope,$http,$window, $mdDialog) {
		$scope.user = {
				nombre_completo: '',
				genero: '',
				correo: '',
				telefono: '',
				fecha_nacimiento: '',
				fecha_diagnostico: '',
				product: '',
				patology: ''
				
				
				
		};
		
	$scope.items = ["Cancer","Epilepsia", "Diabetes", "Migrañas", "Fibromalgia", "Reumas","Lesion primer grado","Lesion segundo grado","Lesion por contusion"];
    $scope.selectedItem = undefined;
	$scope.createCode = function(code) {
		console.log("########### RESPONSE ###########")
		console.log(code)
		//$window.location.href = "/register/js/qr/index.php?codigo="+code;
		 
		
    };
	$scope.formsubmit = function(isValid) {
				console.log("######################")
				console.log($scope.user)
				console.log(isValid)
			 $mdDialog.show({
					  controller: DialogController,
					  templateUrl: '/escuadron/register/js/qr/index.php?codigo="1221312dasajtheway6',
					  parent: angular.element(document.body),
					  targetEvent: isValid,
					  clickOutsideToClose:true
					})
			/*
		    if (isValid) {
				 	
			   $http({
					  method: 'POST',
					  url: './php/registro_web.php',
					  headers: {'Content-Type': 'application/x-www-form-urlencoded'},
					  data: $scope.user
					}).then(
						function (response) {
							var data = response.data;
							
							$scope.createCode(data); 
						}, function (error) {
							var data = error.data; 
					});
									 

								  
					}else{
						  $scope.showSpinner = false;
						  alert('Form is not valid');
					}
					*/
				  
				
				
    };
	

    $scope.getSelectedText = function () {
      if ($scope.selectedItem !== undefined) {
        return "You have selected:" + $scope.selectedItem;
      } else {
        return "Please select an item";
      }
    };
	
 function DialogController($scope, $mdDialog) {
    $scope.hide = function() {
      $mdDialog.hide();
    };

    $scope.cancel = function() {
      $mdDialog.cancel();
    };

    $scope.answer = function(answer) {
      $mdDialog.hide(answer);
    };
  }
});
app.directive("compareTo", function() {
		return {
				require: "ngModel",
				scope: {
						otherModelValue: "=compareTo"
				},
				link: function(scope, element, attributes, ngModel) {

						ngModel.$validators.compareTo = function(modelValue) {
								return modelValue == scope.otherModelValue;
						};

						scope.$watch("otherModelValue", function() {
								ngModel.$validate();
						});
				}
		};
});
 