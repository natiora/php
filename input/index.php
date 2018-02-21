<!DOCTYPE html>
<html>
<head>
	<title>php</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-sm-4">
			   				<h1 class="text-center">Enregistrement</h1>
					<form action="save.php" method="POST" class="well form-group">
   
						<label>Pseudo:</label><input type="text" class="form-control"  name="pseudo">
						<labe>Email :</label><input type="text" class="form-control"  name="email">
						<label>Password:</label><input type="text" class="form-control"  name="pass">
						<button type="submit" class="btn btn-block btn-success">Terminer</button>
					</form>
		</div>  
			<div class="col-sm-4">
          			<h1 class="text-center">Mis a jour</h1>
					<form action="" method="POST" class="well form-group" >
							<label>Prenom:</label><input type="text" class="form-control"  name="pseudo">
							<labe>Email :</label><input type="text" class="form-control"  name="email">
							<label>Mot de passe:</label><input type="text" class="form-control"  name="pass">
							<button type="submit" class="btn btn-block btn-success">Envoyer</button>
					</form>

			</div>  
		</div>

</body>
</html>