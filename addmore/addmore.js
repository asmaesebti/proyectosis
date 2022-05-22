$(document).ready(function(){
	// Swal.fire({
	// 	title: 'Todo funciona correctamente',
	// 	type: 'success'
	// });
	
	$(".add_item_btn").click(function(e){
		e.preventDefault();
		//seleccionar el div con ese id
		$("#show_item").prepend(`<div class="row append_item">
			<div class="col-md-2 mb-2">
			<input type="text" name="nombre[]" class="form-control" placeholder="Nom client" required>
			</div>
			<div class="col-md-3 mb-3">
			<input type="text" name="apellidos[]" class="form-control" placeholder="Prenom client" required>
			</div>
			<div class="col-md-3 mb-3">
			<input type="text" name="email[]" class="form-control" placeholder="Email client" required>
			</div>
			<div class="col-md-2 mb-2">
			<input type="text" name="telefono[]" class="form-control" placeholder="Telephone client" required>
			</div>
			<div class="col-md-2 mb-2 d-grid">
			<button class="btn btn-danger remove_item_btn" >Eliminer Client</button>
			</div>
			</div>`);
	});

	$(document).on('click', '.remove_item_btn', function(e) {
		e.preventDefault();
		//seleccionar el padre del padre del div para eliminar
		let row_item = $(this).parent().parent();
		$(row_item).remove();

});
		//ajax request para insertar datos
		
		$("#add_form").submit(function(e){
			e.preventDefault();
			$("#add_btn").val('Ajoutons les clients......');
			$.ajax({
				url: 'action.php',
				method: 'post',
				data: $(this).serialize(),
				success:function(response){
					// console.log(response);
					$("#add_btn").val("Ajouter");
					$("#add_form")[0].reset();
					$(".append_item").remove();
					$("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`);
				}
			});

		});

	

});