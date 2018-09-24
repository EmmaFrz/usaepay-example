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
			<form action="process2.php" method="post">
				<div class="form-group">
				<div class="form-group">
					<label for="NameOnCheck">Name On Check</label>
					<input type="text" name="NameOnCheck" class="form-control" id="NameOnCheck">
				</div>	
					<label for="RoutingNumber">Routing Numbre</label>
					<input type="number" name="RoutingNumber" class="form-control" id="RoutingNumber">
				</div>
				<div class="form-group">
					<label for="AccNumber">Account Number</label>
					<input type="number" name="AccNumber" class="form-control" id="AccNumber">
				</div>
				<div class="form-group">
					<label for="CheckNumber">Check Number</label>
					<input type="number" name="CheckNumber" class="form-control" id="CheckNumber">
				</div>
				<div class="form-group">
					<label for="SSNumber">Social Security Number</label>
					<input type="text" name="SSNumber" class="form-control" id="SSNumber">
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
</html>