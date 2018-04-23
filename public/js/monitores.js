$(document).ready(function() {

			

			$('#monitors-table tbody').on( 'click', 'tr', function () {
			        //$("#table1 tbody tr").css("background-color", "white");
			        //$(this).css("background-color", "#87CEFA");

			        var id = $(this).attr('id');

			        $(this).each(function () {
			            $(this).children("td").each(function (index2) {
			                switch (index2) {
			                    case 0:
			                        nombres = $(this).text();
			                    break;
			                }
			            });
			        });

			        $.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});

					var idmonitor = {id:id}

					$('#monitorias-table').dataTable({
		            	"bDestroy": true
		        	});

					var tablamonitorias = $('#monitorias-table').DataTable({
						"ajax":{
							"method":"POST",
							"url":"listarmonitorias",
							"data":idmonitor,
							"dataSrc": ""
						},
						"columns":[
							{"data":"IdMonitor"},
							{"data":"materia"},
							{"data":"fecha"},
							{"data":"salon"},
							{"data":"created_at"}
						],
						"bDestroy": true,
						"scrollY":"200px",
		      			"scrollX":"200px",
		      			"scrollCollapse": true,
		      			"paging": false,
		      			"lengthChange": false,
		      			"searching": false,
		      			"ordering": false,
		      			"info": true,
		      			"autoWidth": false
					});			
									
			});



			/*$('#accion').on( 'click', 'tr', function () {*/

		    /*$('#monitors-table tbody').on( 'click', 'tr', function () {
		        //$("#table1 tbody tr").css("background-color", "white");
		        //$(this).css("background-color", "#87CEFA");

		        var id = $(this).attr('id');

		        $(this).each(function () {
		            $(this).children("td").each(function (index2) {
		                switch (index2) {
		                    case 0:
		                        nombres = $(this).text();
		                    break;
		                }
		            });
		        });

		        alert(nombres);
		        alert(id);
								
		    });*/

		    //Tabla2 Sede
		    /*$('#table2 tbody').on( 'click', 'tr', function () {
					  
				var id = $(this).attr('id'); //captura el id del tr
					    	
		        //$("#table1 tbody tr").css("background-color", "white");
		        //$(this).css("background-color", "#87CEFA");
		        $(this).each(function () {
		            $(this).children("td").each(function (index3) {

		                switch (index3) {
		                    case 0:
		                        sede = $(this).text();
		                    break;
		                }
		            });
		        });
	        	
					$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});
		        	
		        	var dataString = {idsede:id};

					$('#cargando').removeClass('hide');
		        	$('#table3 tbody').html('');
		        	$('#table4 tbody').html('');
		        	
		        	//Envia y recibe por medio de ajax al controlador (funcion listarservicios)
		        	$.ajax({
		        		type: "POST",
		        		url: "listarservicios",
		        		data: dataString,
		        		success: function(data){
		        			//(json data) data.sedes accede al json sedes contenido dentro de el
		        			$sedes=data.sedes;

		        			//recorro data que es el json que recibo desde el controlador
							$.each($sedes, function(i,item){
								//lleno tabla3 servicios
								$('#table3').append('<tr id="'+$sedes[i].id_ser+'"><td>'+$sedes[i].nombre+'</td></tr>')
								idbodega =  $sedes[i].bodega;
							});
							$('#cargando').addClass('hide');

							//console.log(idbodega);
							//se llena table4 con las fechas disponible

							$horarios=data.horarios;

							$.each($horarios, function(i,item){
								
								var dateformat = my_date_format2($horarios[i].fecha);

								$('#table4').append('<tr id="'+$horarios[i].fecha+'"><td>'+dateformat+'</td></tr>')
								
							});												
		        		}
		        	});
		        
		        	$('#form_paso_b').addClass('hide');
					$('#form_paso_c').removeClass('hide');

					$('#banner2').addClass('hide');
					$('#banner3').removeClass('hide');

					$('#paso_c').addClass('negritas');
					window.scrollTo(0,0);
		    });

		    //Tabla3 Servicios
		    $('#table3 tbody').on( 'click', 'tr', function () {

		    	idservicio = $(this).attr('id'); //captura el id del tr

		        //$("#table1 tbody tr").css("background-color", "white");
		        //$(this).css("background-color", "#87CEFA");
		        $(this).each(function () {
		            $(this).children("td").each(function (index5) {
		                switch (index5) {
		                    case 0:
		                        servicio = $(this).text();
		                    break;
		                }
		            });
		        });
		        	$('#form_paso_c').addClass('hide');
					$('#form_paso_d').removeClass('hide');

					$('#banner3').addClass('hide');
					$('#banner4').removeClass('hide');

					$('#paso_d').addClass('negritas');
					window.scrollTo(0,0);
		    });

		    //Tabla4 Servicios
		    $('#table4 tbody').on( 'click', 'tr', function () {
		        //$("#table1 tbody tr").css("background-color", "white");
		        //$(this).css("background-color", "#87CEFA");

		        var fechaescogida = $(this).attr('id');

		        $(this).each(function () {
		            $(this).children("td").each(function (index6) {
		                switch (index6) {
		                    case 0:
		                        fecha = $(this).text();
		                    break;
		                }
		            });
		        });

					$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});
		        	
		        	var datafechaescogida = {idbodega1:idbodega,fechaescogidausuario:fechaescogida};

					$('#cargando1').removeClass('hide');
		        	$('#table5 tbody').html('');

		        	//Envia y recibe por medio de ajax al controlador (funcion listarservicios)
		        	$.ajax({
		        		type: "POST",
		        		url: "horasyasesores",
		        		data: datafechaescogida,
		        		success: function(data){

							$.each(data, function(i,item){
								var dateformat = my_date_format(data[i].fecha_hora);
								$('#table5').append('<tr id2="'+data[i].jefe+'" id="'+data[i].fecha_hora+'"><td>'+dateformat+' - '+data[i].descripcion+'</td></tr>');
							});		

							$('#cargando1').addClass('hide');

		        			console.log(data);

		        		}
		        	});

		        	$('#form_paso_d').addClass('hide');
					$('#form_paso_e').removeClass('hide');

					$('#banner4').addClass('hide');
					$('#banner5').removeClass('hide');

					$('#paso_e').addClass('negritas');
					window.scrollTo(0,0);
		    });

		    $('#table5 tbody').on( 'click', 'tr', function () {
		        //$("#table1 tbody tr").css("background-color", "white");
		        //$(this).css("background-color", "#87CEFA");

		        idfechahora = $(this).attr('id');
		        idjefe = $(this).attr('id2');		        

		        $(this).each(function () {
		            $(this).children("td").each(function (index7) {
		                switch (index7) {
		                    case 0:
		                        hora = $(this).text();
		                    break;
		                }
		            });
		        });
		        	$('#form_paso_e').addClass('hide');
					$('#form_paso_f').removeClass('hide');

					$('#banner5').addClass('hide');
					$('#banner6').removeClass('hide');

					$('#paso_f').addClass('negritas');
					window.scrollTo(0,0);
		    });

			//Detectar que boton se esta accionando
			$('body').on('click','#cont_formularios a',function(elemento){

				elemento.preventDefault();
				//alert($(this).attr('id'));
				mostrar = $(this).attr('id');

				//Seleccionar la seccion a mostrar
				if (mostrar == 'back_paso_a') {
					$('#form_paso_b').addClass('hide');
					$('#form_paso_a').removeClass('hide');

					$('#banner2').addClass('hide');
					$('#banner1').removeClass('hide');

					window.scrollTo(0,0);

					$('#paso_a').addClass('negritas');
					$('#paso_b').removeClass('negritas');
				}else if (mostrar == 'back_paso_b') {
					$('#form_paso_c').addClass('hide');
					$('#form_paso_b').removeClass('hide');

					$('#banner3').addClass('hide');
					$('#banner2').removeClass('hide');

					window.scrollTo(0,0);

					$('#paso_b').addClass('negritas');
					$('#paso_c').removeClass('negritas');
				}else if (mostrar == 'back_paso_c') {
					$('#form_paso_d').addClass('hide');
					$('#form_paso_c').removeClass('hide');

					$('#banner4').addClass('hide');
					$('#banner3').removeClass('hide');	

					window.scrollTo(0,0);

					$('#paso_c').addClass('negritas');
					$('#paso_d').removeClass('negritas');
				}else if (mostrar == 'back_paso_d') {
					$('#form_paso_e').addClass('hide');
					$('#form_paso_d').removeClass('hide');

					$('#banner5').addClass('hide');
					$('#banner4').removeClass('hide');	

					window.scrollTo(0,0);

					$('#paso_d').addClass('negritas');
					$('#paso_e').removeClass('negritas');
				}else if (mostrar == 'back_paso_e') {
					$('#form_paso_f').addClass('hide');
					$('#form_paso_e').removeClass('hide');

					$('#banner6').addClass('hide');
					$('#banner5').removeClass('hide');	

					window.scrollTo(0,0);

					$('#paso_e').addClass('negritas');
					$('#paso_f').removeClass('negritas');
				}else if (mostrar == 'back_paso_f') {

					$('#form_paso_g').addClass('hide');
					$('#form_paso_f').removeClass('hide');
					$('#paso_f').addClass('negritas');
					$('#paso_g').removeClass('negritas');

					window.scrollTo(0,0);
				}else if (mostrar == 'go_terminar') {

					//Codigo Ajax
					$.ajaxSetup({
					    headers: {
					        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
					});
		        	var dataString1 = { cedula:cedula, placa:placa, nombre:nombre, nombre2:nombre2, apellido:apellido, apellido2:apellido2, direccion:direccion, email:email, celular:celular, telefonocontacto:telefonocontacto, telefonoficina:telefonoficina, solicitud:solicitud, vehiculo:vehiculo, sede:sede, idbodega:idbodega, idservicio:idservicio, idfechahora:idfechahora, servicio:servicio, idjefe:idjefe};
		        	
		        	$('#cargandofinal').removeClass('hide');

		        	//Envia y recibe por medio de ajax al controlador funcion store (ruta almacenarregistros)
		        	$.ajax({
		        		type: "POST",
		        		url: "almacenarregistros",
		        		data: dataString1,
		        		success: function(data){
		        			
		        			$('#cargandofinal').addClass('hide');

		        			if (data == 'usuarionuevo') {
		        				//Cliente no existe se le envia correo electronico a contact center lo cree en nuestro sistema
		        				alert('Gracias por agendar tu cita, en los próximos 10 minutos un agente de nuestro contact center se comunicará con usted');
		        				location.reload(true);			        				

		        			}else if (data == 'noenviocorreo') {
		        				//Error al enviar el correo electronico
		        				alert('Se ha producido un error, por favor intentelo mas tarde');
		        				location.reload(true);

		        			}else if(data == 'yaexistecita'){
		        				//Cliente no existe se le envia correo electronico a contact center lo cree en nuestro sistema
		        				alert('Apreciado cliente no se pudo agendar su cita debido a que usted ya presenta una cita en nuestro sistema, gracias por preferirnos.');
		        				location.reload(true);	

		        			}else{	
		        				//Existe el cliente se agendo correctamente en DMS
		        				alert('Felicidades! Su cita ha sido agendada en nuestro sistema con exito, tu ID de cita en DMS es '+data+', te enviamos un correo electronico con la informacion de la cita agendada');
		        				location.reload(true);
		        				
		        			}

		        			console.log(data);	
		        		}
		        	}).fail(function() {
    						alert("Se ha producido un error, por favor intentelo mas tarde");
  					});			
				}
			});		

			$('#form_f').validate({

				submitHandler: function(){

					// Serializamos formularios
					var datosForm = $('#form_a, #form_b, #form_c, #form_d, #form_e, #form_f').serialize();

					// Cargamos los datos de los campos a variables
					cedula 				= $('#reg_cedula').val();
					placa 				= $('#reg_placa').val();
					nombre 				= $('#reg_nombre').val();
					nombre2 			= $('#reg_nombre2').val();
					apellido 			= $('#reg_apellido').val();
					apellido2 			= $('#reg_apellido2').val();
					direccion 			= $('#direccion').val();
					email 				= $('#email').val();
					celular 			= $('#celular').val();
					telefonocontacto	= $('#telefonocontacto').val();
					telefonoficina 		= $('#telefonoficina').val();
					solicitud 			= $('#solicitud').val();
					expresion 			= /\w+@\w+\.+[A-Z]/;
					condiciones			= $('#condiciones').is(":checked");

					if (cedula === "" || placa === "" || nombre === "" || apellido === "" ||
						apellido2 === "" || direccion === "" || email === "" || celular === "" ||
						telefonocontacto === "" || vehiculo === "" || sede === "" || servicio === "" ||
						fecha === "" || hora === "" || solicitud === "") {

						alert("Por favor completa los campos obligatorios");
						return false;

					}else if (isNaN(cedula)) {
						alert("El campo cedula debe contener numeros");
						return false;
					}else if (!expresion.test(email)) {
						alert("Por favor introduce un correo valido");
						return false;
					}else if (isNaN(celular)) {
						alert("El campo celular debe contener numeros");
						return false;
					}else if (isNaN(telefonocontacto)) {
						alert("El campo telefono de contacto debe contener numeros");
						return false;
					}else if (isNaN(telefonoficina)) {
						alert("El campo telefono de oficina debe contener numeros");
						return false;
					}else if(!condiciones){
						alert("Por favor acepta los términos y condiciones de tratamiento de datos.");
						return false;
					}else if (cedula.length<3 || cedula.length>10) {
						alert("El campo cedula debe contener minimo 3 caracteres y maximo 10 caracteres");
						return false;
					}else if (placa.length<6 || placa.length>6) {
						alert("El campo placa debe contener 6 caracteres");
						return false;
					}else if (nombre.length<3 || nombre.length>20) {
						alert("El campo nombre debe contener minimo 3 caracteres y maximo 20 caracteres");
						return false;
					}else if (nombre2.length>20) {
						alert("El campo segundo nombre debe contener maximo 20 caracteres");
						return false;
					}else if (apellido.length<3 || apellido.length>20) {
						alert("El campo apellido debe contener minimo 3 caracteres y maximo 20 caracteres");
						return false;
					}else if (apellido2.length<3 || apellido2.length>20) {
						alert("El campo segundo apellido debe contener minimo 3 caracteres y maximo 20 caracteres");
						return false;
					}else if (direccion.length<7 || direccion.length>100) {
						alert("El campo direccion debe contener minimo 7 caracteres y maximo 100 caracteres");
						return false;
					}else if (email.length<5 || email.length>50) {
						alert("El campo email debe contener minimo 5 caracteres y maximo 50 caracteres");
						return false;
					}else if (celular.length<10 || celular.length>15) {
						alert("El campo celular debe contener minimo 10 caracteres y maximo 15 caracteres");
						return false;
					}else if (telefonocontacto.length<7 || telefonocontacto.length>15) {
						alert("El campo telefono de contacto debe contener minimo 7 caracteres y maximo 15 caracteres");
						return false;
					}else if (telefonoficina.length>15) {
						alert("El campo telefono de oficina debe contener maximo 15 caracteres");
						return false;
					}else if (solicitud.length<5 || solicitud.length>100) {
						alert("El campo solicitud debe contener minimo 5 caracteres y maximo 100 caracteres");
						return false;
					}else{
						// llenamos la lista en pantalla
						$('#txt_vehiculo').text("VEHICULO: "+vehiculo);
						$('#txt_sede').text("SEDE: "+sede);
						$('#txt_servicio').text("SERVICIO: "+servicio);
						$('#txt_fecha').text("FECHA: "+fecha);
						$('#txt_hora').text("HORA Y ASESOR DE SERVICIO: "+hora);
						$('#txt_cedula').text("CEDULA: "+cedula);
						$('#txt_placa').text("PLACA: "+placa);
						$('#txt_nombre').text("NOMBRE: "+nombre);
						$('#txt_nombre2').text("SEGUNDO NOMBRE: "+nombre2);
						$('#txt_apellido').text("APELLIDO: "+apellido);
						$('#txt_apellido2').text("SEGUNDO APELLIDO: "+apellido2);
						$('#txt_direccion').text("DIRECCION: "+direccion);
						$('#txt_email').text("E-MAIL: "+email);
						$('#txt_celular').text("CELULAR: "+celular);
						$('#txt_telefonocontacto').text("TELEFONO CONTACTO: "+telefonocontacto);
						$('#txt_telefonoficina').text("TELEFONO OFICINA: "+telefonoficina);
						$('#txt_solicitud').text("OBSERVACIONES: "+solicitud);		

						// mostramos y ocultamos areas
						$('#form_paso_g').removeClass('hide');
						$('#form_paso_f').addClass('hide');

						$('#paso_g').addClass('negritas');

						window.scrollTo(0,0);

						return false;	
					}

				},
				errorPlacement: function(error, element) {
					error.appendTo(element.parent().append());
				}
			});			
		});

		function AbrirTratamientoDeDatos() {
   			window.open('http://jannamotors.com/legal.pdf', '_blank');;
		}

		var my_date_format = function(input){
			
			var d = new Date(input);
			
			var month = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];
			var day = ['DOMINGO', 'LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO'];

			var date = day[d.getDay()] + " " + d.getDate() + " " + month[d.getMonth()] + " " +    d.getFullYear()+ ", ";
			var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+):[\d]+(\s\w+)/g, "$1$2");
			//alert(date + " " + time);
			return (time);  

		};	

		var my_date_format2 = function(input){
			
			var d = new Date(input);
			
			var month = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];
			var day = ['DOMINGO', 'LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO'];

			//UTC para establecer la zona horaria, en php solo es definir la zona horaria al inicio del codigo
			var date = day[d.getUTCDay()] + " " + d.getUTCDate() + " " + month[d.getUTCMonth()] + " " +    d.getUTCFullYear();
			return (date); 	*/

}); //fin