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
			<form action="process.php" method="post">
				<div class="form-group">
					<label for="CardNumber">Card Number</label>
					<input type="number" name="CardNumber" class="form-control" id="CardNumber">
				</div>
				<div class="form-group">
					<label for="ExpDate">Expedition Date</label>
					<input type="number" name="ExpDate" class="form-control" id="ExpDate">
				</div>
				<div class="form-group">
					<label for="CardHolder">Card Holder</label>
					<input type="text" name="CardHolder" class="form-control" id="CardHolder">
				</div>	
				<div class="form-group">
					<label for="StreetAdress">Adress</label>
					<input type="text" name="StreetAdress" class="form-control" id="StreetAdress">
				</div>
				<div class="form-group">
					<label for="ZipCode">ZIP Code</label>
					<input type="text" name="ZipCode" class="form-control" id="ZipCode">
				</div>	
				<div class="form-group">
					<label for="CCV">CCV 2</label>
					<input type="text" name="CCV" class="form-control" id="CCV">
				</div>	
				<div class="form-group">
					<label for="Amount">Amount</label>
					<input type="text" name="Amount" class="form-control" id="Amount" value='<?= $price = random_int(1, 50) ?>' readonly>
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Payment</button>
				</div>			
			</form>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>