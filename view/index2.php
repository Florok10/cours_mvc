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


				<form action="../controller/controller.php" id="form_register" method="post">
					<h3>S'inscrire</h3>
					<div class="col-auto">
						<input type="text" placeholder="Nom" class="col-sm-2 col-form-label col-form-label-lg" name="nom">
						<input type="text" placeholder="Prénom" class="col-sm-2 col-form-label col-form-label-lg" name="prenom">
					</div>
					<div class="col-auto">
						<input type="text" placeholder="Adresse mail" class="col-sm-3 col-form-label col-form-label-lg" name="email">
                        <div id="emailHelp" class="form-text">Nous ne divulgerons pas votre adresse email</div>
					</div>
					<div class="col-auto">
						<input type="number" min="1" max="135"  name="age" class="col-sm-1 col-form-label col-form-label">
					</div>
					<div class="col-auto">
						<input type="password" placeholder="Mot de passe" maxlength="25" class="col-sm-2 col-form-label col-form-label-lg" name="passwordUser">
					</div>
					<!-- <div class="col-auto">
						<input type="password" placeholder="Confirmer le mot de passe" maxlength="25" class="col-sm-2 col-form-label col-form-label-lg" name="passwordUserConfirm" for="form_register">
					</div> -->
					<div class="col-auto">
                        <label for="cgu_checkbox">Veuillez accepter nos <a href="#">CGU</a></label>
						<input type="checkbox" class="form-check-input" id="cgu_checkbox" required>
					</div>
					<button type="submit" for="form_register" name="submit" class="btn btn-primary">S'enregistrer</a>
					</button>

				</form>


		
	</body>
</html>