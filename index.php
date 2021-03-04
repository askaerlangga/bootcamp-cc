<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>

	


	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col formlogin">
			<h1 class="judul">Login</h1>
			<form action="cek_login.php" method="post">
				<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
						echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>Username dan Password tidak sesuai !<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
					}
				}
				?>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Username</label>
					<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" required="required">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
				</div>
				
				<div class="d-grid gap-2">
				<button type="submit" class="btn buttonlogin">Login</button>
				</div>
				
			</form>
			</div>
			<div class="col"></div>
		</div>
	</div>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
	</script>
</body>

</html>