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
    	<a href="check.php" class="btn btn-success">Pay with checks</a>
			<form action="process.php" method="post" class="needs-validation" novalidate>
				<div class="row">
					<div class="form-group col-6">
						<label for="CardNumber">Card Number</label>
						<input required type="number" name="CardNumber" class="form-control " id="CardNumber" maxlength="16">
						<small class="form-text text-muted">
  							Your Card number must be 13-16 characters long, only numbers, and must not contain spaces or special characters.
						</small>
						<div class="invalid-tooltip">
							Please provide a valid card number
						</div>
						<div class="valid-feedback">
							Looks good
						</div>
					</div>
					<div class="form-group col-6">
						<label for="ExpDate">Expedition Date</label>
						<input required type="date" name="ExpDate" class="form-control " id="ExpDate">
						<div class="invalid-tooltip">
							Please provide a valid Date
						</div>
						<div class="valid-feedback">
							Looks good
						</div>
					</div>
					<div class="form-group col-12">
						<label for="CardHolder">Card Holder</label>
						<input required type="text" name="CardHolder" class="form-control " id="CardHolder">
						<small class="form-text text-muted">
							Your Card number must be only alphabetic characters, and must not contain special characters.
						</small>
						<div class="invalid-tooltip">
							Please provide a valid Card Holder
						</div>
						<div class="valid-feedback">
							Looks good
						</div>
					</div>	
					<div class="form-group col-12">
						<label for="StreetAdress">Adress</label>
						<input required type="text" name="StreetAdress" class="form-control " id="StreetAdress">
						<div class="invalid-tooltip">
        					Please provide a valid address.
      					</div>	
      					<div class="valid-feedback">
      						Looks good
      					</div>					
					</div>
					<div class="form-group col">
						<label for="ZipCode">ZIP Code</label>
						<input required type="number" name="ZipCode" class="form-control " id="ZipCode">
						<div class="invalid-tooltip">
        					Please provide a valid zip code.
      					</div>
      					<div class="valid-feedback">
      						Looks good
      					</div>
					</div>	
					<div class="form-group col">
						<label for="CCV">CCV 2</label>
						<input required type="number" name="CCV" class="form-control " id="CCV">
						<div class="invalid-tooltip">
        					Please provide a valid CCV code.
      					</div>
      					<div class="valid-feedback">
      						Looks good
      					</div>						
					</div>	
					<div class="form-group col-md-4 mb-3">
						<label for="Amount">Amount</label>
						<div class="input-group">
					        <div class="input-group-prepend">
					          <span class="input-group-text" id="inputGroupPrepend">USD</span>
					        </div>							
							<input required type="text" name="Amount" class="form-control" id="Amount" value='<?= $price = random_int(1, 50) ?>' readonly>
						</div>
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
  </body>
</html>