<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	</head>

	<body>


				<form action="../controller/controller.php" name="form_register" id="form_register" method="post">
					<h3>S'inscrire</h3>
					<div class="col-auto">
						<input type="text" placeholder="Nom" class="col-sm-2 col-form-label col-form-label-lg" name="nom" for="form_register">
						<input type="text" placeholder="Prénom" class="col-sm-2 col-form-label col-form-label-lg" name="prenom" for="form_register">
					</div>
					<div class="col-auto">
						<input type="text" placeholder="Adresse mail" class="col-sm-2 col-form-label col-form-label-lg" name="mail" for="form_register">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
					<div class="col-auto">
						<input type="number" min="1" max="135"  name="age" class="col-sm-1 col-form-label col-form-label" for="form_register">
					</div>
					<div class="col-auto">
						<input type="password" placeholder="Mot de passe" maxlength="25" class="col-sm-2 col-form-label col-form-label-lg" name="password_user" for="form_register">
					</div>
					<div class="col-auto">
						<input type="password" placeholder="Confirmer le mot de passe" maxlength="25" class="col-sm-2 col-form-label col-form-label-lg" name="password_user_confirm" for="form_register">
					</div>
					<div class="col-auto">
                        <label for="cgu_checkbox">Veuillez accepter nos <a href="#">CGU</a></label>
						<input type="checkbox" class="form-check-input" value="" name="cgu" id="cgu_checkbox" for="form_register" required>
					</div>
					<button type="submit" for="form_register" name="submit" class="btn btn-primary">S'enregistrer</a>
					</button>

				</form>


		
	</body>
</html>