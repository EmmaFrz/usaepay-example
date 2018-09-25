<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Payment</title>
  </head>
  <body>
	<div class="container">
    	<h1>Payment Process</h1>
    	<a href="index.php" class="btn btn-success">Pay with Credit cards</a>
			<form action="process2.php" method="post" class="needs-validation" novalidate>
				<div class="row">
					<div class="form-group col-6">
						<label for="NameOnCheck">Name On Check</label>
						<input required type="text" name="NameOnCheck" class="form-control" id="NameOnCheck">
						<div class="invalid-tooltip">
							Please provide a valid Name
						</div>
						<div class="valid-feedback">
							Looks good
						</div>
						<small class="form-text text-muted">
							Your Card number must be only alphabetic characters, and must not contain special characters. 
						</small>
					</div>	
					<div class="form-group col-6">
						<label for="RoutingNumber">Routing Number</label>
						<input required type="number" name="RoutingNumber" class="form-control" id="RoutingNumber">
						<div class="invalid-tooltip">
							Please provide a valid routing number
						</div>
						<div class="valid-feedback">
							Looks good
						</div>
						<small class="form-text text-muted">
							Your routing number must be 9 characters long, only numbers, and must not contain spaces or special characters.
						</small>
					</div>
					<div class="form-group col-6">
						<label for="AccNumber">Account Number</label>
						<input required type="number" name="AccNumber" class="form-control" id="AccNumber">
						<div class="invalid-tooltip">
							Please provide a valid account number
						</div>
						<div class="valid-feedback">
							Looks good
						</div>
						<div class="form-text text-muted">
							Your routing number must be 12 characters long, only numbers, and must not contain spaces or special characters.
						</div>
					</div>
					<div class="form-group col-6">
						<label for="CheckNumber">Check Number</label>
						<input required type="number" name="CheckNumber" class="form-control" id="CheckNumber">
						<div class="invalid-tooltip">
							Please provide a valid check number	
						</div>
						<div class="valid-feedback">
							Looks good
						</div>
						<div class="form-text text-muted">
							Your routing number must be 3 characters long, only numbers, and must not contain spaces or special characters.
						</div>
					</div>
					<div class="form-group col-6">
						<label for="SSNumber">Social Security Number</label>
						<input required type="number" name="SSNumber" class="form-control" id="SSNumber">
						<div class="invalid-tooltip">
							Please provide a valid social secure number
						</div>
						<div class="valid-feedback">
							Looks good
						</div>
						<div class="form-text text-muted">
							Your routing number must be 9 characters long, only numbers, and must not contain spaces or special characters.
						</div>
					</div>	
					<div class="form-group col-6">
						<label for="Amount">Amount</label>
						<input required type="text" name="Amount" class="form-control" id="Amount" value='<?= $price = random_int(1, 50) ?>' readonly>
					</div>	
					<div class="form-group col-12">
						<button type="submit" class="btn btn-primary">Payment</button>
					</div>	
				</div>		
			</form>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
		    // Fetch all the forms we want to apply custom Bootstrap validation styles to
		    var forms = document.getElementsByClassName('needs-validation');
		    // Loop over them and prevent submission
		    var validation = Array.prototype.filter.call(forms, function(form) {
		      form.addEventListener('submit', function(event) {
		        if (form.checkValidity() === false) {
		          event.preventDefault();
		          event.stopPropagation();
		        }
		        form.classList.add('was-validated');
		      }, false);
		    });
		  }, false);
		})();
	</script>
</html>