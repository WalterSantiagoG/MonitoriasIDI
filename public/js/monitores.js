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

}); //fin