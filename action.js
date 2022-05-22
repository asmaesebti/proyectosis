		
		$(document).ready(function(){


			mostrarTodosLosUsuarios();

			function mostrarTodosLosUsuarios(){
				$.ajax({
					url: "action.php",
					type: "POST",
					data: {action:"view"},
					success:function(response){
							// console.log(response);
							$("#showUser").html(response);
							$("table").DataTable();
							order: [0, 'desc']
						}
					});
			}

				// insertar ajax request

				$("#insert").click(function(e){
					if ($("#form-data")[0].checkValidity()) {
						e.preventDefault();
						$.ajax({
							url:"action.php",
							type: "POST",
							data: $("#form-data").serialize() + "&action=insert",
							success:function(response){
								//console.log(response);
								Swal.fire({
									title: 'Client ajouté correctemant',
									type: 'success'
								})
								$('#addModal').modal('hide');
								$("#form-data")[0].reset();
								mostrarTodosLosUsuarios();
							}
						});
					}
				});

				//Modificar usuario
				$("body").on("click", ".editBtn" , function(e){
					// console.log("working");
					e.preventDefault();
					edit_id =$(this).attr('id');
					$.ajax({
						url: "action.php",
						type: "POST",
						data:{edit_id:edit_id},
						success:function(response){
							// console.log(response);
							
							data =JSON.parse(response);
							//console.log(data); 
							$("#id").val(data.id);
							$("#nombre").val(data.nombre);
							$("#apellidos").val(data.apellidos);
							$("#email").val(data.email);
							$("#telefono").val(data.telefono);
						}
					});
				});

						// modificar ajax request

						$("#update").click(function(e){
							if ($("#edit-form-data")[0].checkValidity()) {
								e.preventDefault();
								$.ajax({
									url:"action.php",
									type: "POST",
									data: $("#edit-form-data").serialize() + "&action=update",
									success:function(response){
								//console.log(response);
								Swal.fire({
									title: 'Usuario modificado correctamente',
									type: 'success'
								})
								$('#editModal').modal('hide');
								$("#edit-form-data")[0].reset();
								mostrarTodosLosUsuarios();
							}
						});
							}
						});

				//Eliminar ajax request
				
				$("body").on("click", ".delBtn", function(e){
					e.preventDefault();
					var tr = $(this).closest('tr');
					del_id = $(this).attr('id');

					Swal.fire({
						title: 'Are you sure?',
						text: "You won't be able to revert this!",
						icon: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Yes, delete it!'
					}).then((result) => {
						if (result.value) {
							$.ajax({
								url:"action.php",
								type:"POST",
								data:{del_id:del_id},
								success:function(response){
								//	console.log(response);
								tr.css('background-color','#ff6666');
								Swal.fire(
									'Eliminado',
									'Usuario eliminado correctamente',
									'success'
									)

								mostrarTodosLosUsuarios();
							}
						});
						}
					});
				});

				//mostrar informacion del usuario
				$("body").on("click", ".infoBtn", function(e){
					e.preventDefault();
					info_id = $(this).attr('id');
					$.ajax({
						url:"action.php",
						type:"POST",
						data:{info_id:info_id},
						success:function(response){
							// console.log(response);
							data = JSON.parse(response);
							Swal.fire({
								title:'<strong>Information du client : ID('+ data.id +')</strong>',
								icon: 'info',
								html: '<b>Nom : </b>' + data.nombre + '<br><b>Prenom : </b>' + data.apellidos + '<br><b>Email  : </b>' + data.email + '<br><b>Telephone : </b>' + data.telefono,
								showCancelButton: true,
								
							})
						}

					});
				});
				$("#mostrarTabla").hide();
				$("#ocultarTabla").click(function(e){
					$(".ocultar").hide();
					$("#ocultarTabla").hide();
					$("#mostrarTabla").show();
					$("#content").hide();
				});
				$("#mostrarTabla").click(function(e){
					$(".ocultar").show();
					$("#ocultarTabla").show();
					$("#mostrarTabla").hide();
				});

				$("body").on("click", "#generarPDFJS", function(e){
					e.preventDefault();
					var doc = new jsPDF();
					

					// Optional - set properties on the document
					doc.setProperties({
						title: 'Title',
						subject: 'This is the subject',
						author: 'James Hall',
						keywords: 'generated, javascript, web 2.0, ajax',
						creator: 'MEEE'
					});

					doc.setFontSize(12);
					doc.text(20, 5, 'This PDF has a title, subject, author, keywords and a creator.');

					doc.setFontSize(16);
					doc.text(20, 10, 'This is some normal sized text underneath.');

					doc.setTextColor(0,255,0);
					doc.text(20, 15, 'This is green.');
					doc.text( 'This text is centered\raround\rthis point.', 140, 120, 'center' );

					doc.setDrawColor(0);
					doc.setFillColor(255, 255, 255);
					doc.roundedRect(140, 20, 10, 10, 3, 3, 'FD'); //  Black square with rounded corners

					doc.text(20, 20, 'This is the default font.');

					doc.setFont("courier");
					doc.text(20, 30, 'This is courier normal.');

					doc.setFont("times");
					doc.setFontType("italic");
					doc.text(20, 40, 'This is times italic.');

					doc.setFont("helvetica");
					doc.setFontType("bold");
					doc.text(20, 50, 'This is helvetica bold.');

					doc.setFont("courier");
					doc.setFontType("bolditalic");
					doc.text(20, 60, 'This is courier bolditalic.');

					doc.setTextColor(100);
					doc.text(20, 65, 'This is gray.');

					doc.setTextColor(150);
					doc.text(20, 70, 'This is light gray.');

					doc.setTextColor(255,0,0);
					doc.text(20, 75, 'This is red.');

					doc.setTextColor(0,255,0);
					doc.text(20, 80, 'This is green.');

					doc.setTextColor(0,0,255);
					doc.text(20, 85, 'This is blue.');

					doc.text( 'This text is normally\raligned.', 120, 50 );

					doc.text( 'This text is centered\raround\rthis point.', 70, 120, 'center' );

					doc.text( 'This text is rotated\rand centered around\rthis point.', 80, 200, 45, 'center' );

					doc.text( 'This text is\raligned to the\rright.', 120, 220, 'right' );

					doc.text( 'This text is\raligned to the\rright.', 70, 250, 45, 'right' );

					doc.text( 'This single line is centered', 160, 150, 'center' );

					doc.text( 'This right aligned text\r\rhas an empty line.', 160, 200, 'right' );

					// doc.addPage("credit-card","portrait")

					// doc.addPage("government-letter","landscape")

					// doc.addPage("letter","landscape")

					// doc.addPage("tabloid","portrait")

					doc.addPage("a4")

					doc.rect(20, 20, 10, 10); // empty square

					doc.rect(40, 20, 10, 10, 'F'); // filled square

					doc.setDrawColor(255,0,0);
					doc.rect(60, 20, 10, 10); // empty red square

					doc.setDrawColor(255,0,0);
					doc.rect(80, 20, 10, 10, 'FD'); // filled square with red borders

					doc.setDrawColor(0);
					doc.setFillColor(255,0,0);
					doc.rect(100, 20, 10, 10, 'F'); // filled red square

					doc.setDrawColor(0);
					doc.setFillColor(255,0,0);
					doc.rect(120, 20, 10, 10, 'FD'); // filled red square with black borders

					doc.setDrawColor(0);
					doc.setFillColor(255, 255, 255);
					doc.roundedRect(140, 20, 10, 10, 3, 3, 'FD'); //  Black square with rounded corners

					doc.addPage("a4")

					doc.line(20, 20, 60, 20); // horizontal line

					doc.setLineWidth(0.5);
					doc.line(20, 25, 60, 25);

					doc.setLineWidth(1);
					doc.line(20, 30, 60, 30);

					doc.setLineWidth(1.5);
					doc.line(20, 35, 60, 35);

					doc.setDrawColor(255,0,0); // draw red lines

					doc.setLineWidth(0.1);
					doc.line(100, 20, 100, 60); // vertical line

					doc.setLineWidth(0.5);
					doc.line(105, 20, 105, 60);

					doc.setLineWidth(1);
					doc.line(110, 20, 110, 60);

					doc.setLineWidth(1.5);
					doc.line(115, 20, 115, 60);

					doc.addPage("a4")

					doc.ellipse(40, 20, 10, 5);

					doc.setFillColor(0,0,255);
					doc.ellipse(80, 20, 10, 5, 'F');

					doc.setLineWidth(1);
					doc.setDrawColor(0);
					doc.setFillColor(255,0,0);
					doc.circle(120, 20, 5, 'FD');

					doc.addPage("a4")

					doc.triangle(60, 100, 60, 120, 80, 110, 'FD');

					doc.setLineWidth(1);
					doc.setDrawColor(255,0,0);
					doc.setFillColor(0,0,255);
					doc.triangle(100, 100, 110, 100, 120, 130, 'FD');


					// Output as Data URI
					doc.save('Test.pdf');
				});




});