<h1 id="form">Bienvenue sur le formulaire pour vendre un article</h1>
	<form class="form-horizontal" method="post" action="#">
		<fieldset>
			<legend>Informations personnelles</legend>
					<label for="sexe">Civilité</label>
					<select class="form-control" name="sexe">
						<option value="f" selected="selected"
							<?php if((isset($_POST['sexe']))&&($_POST['sexe'])=='f') echo 'checked="checked"'; ?>>Madame</option>
						<option value="h"
						<?php if((isset($_POST['sexe']))&&($_POST['sexe'])=='h') echo 'checked="checked"'; ?>>Monsieur</option>
					</select>
				
					<label for="nom">Nom</label>
					<input type="text" class="form-control" id="nom" name="nom" required="required"
					value="<?php if(isset($_POST['nom']))  echo $_POST['nom'];?>">
				
					<label for="prenom">Prénom</label>
					<input type="text" class="form-control" id="prenom" name="prenom" required="required"
					value="<?php if(isset($_POST['prenom']))  echo $_POST['prenom'];?>">
					
					<label for="pays">Pays</label>
					<input type="list" class="form-control" id="pays" name="pays" list="pays" 
					value="<?php if(isset($_POST['pays']))  echo $_POST['pays'];?>">
					<datalist id="pays">
						<option value="Allemagne"></option>
						<option value="France"></option>
						<option value="Luxembourg"></option>
						<option value="Espagne"></option>
						<option value="Portugal"></option>
						<option value="Belgique"></option>
						<option value="Pays-Bas"></option>
						<option value="Pologne"></option>
						<option value="Chine"></option>
						<option value="Japon"></option>
					</datalist>
				
					<label for="tel">N° Telephone</label> 
					<input type="text" class="form-control" id="tel" name="tel" 
					value="<?php if(isset($_POST['tel']))  echo $_POST['tel']; ?>">		

					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email"
					value="<?php if(isset($_POST['email']))  echo $_POST['email']; ?>">
				
					<label for="contact">Être contacter par:</label> 
					<label class="radio"><input type="radio" name="contact" value="email" checked="checked"
					<?php if((isset($_POST['contact']))&&($_POST['contact'])=='email') echo 'checked="checked"';?>>Email</label>
					<label class="radio"><input type="radio" name="contact" 	value="tel"
					<?php if((isset($_POST['contact']))&&($_POST['contact'])=='tel') echo 'checked="checked"'; ?>>Telephone</label>
		</fieldset>
		<fieldset>
			<legend>Description de l'article</legend>
				
					<label for="categorie">Categorie:</label>
					<label class="radio"><input type="radio" name="categorie" value="vetement" checked="checked"
					<?php if((isset($_POST['categorie']))&&($_POST['categorie'])=='vetement') echo 'checked="checked"'; ?>>Vétements</label>
					<label class="radio"><input type="radio" name="categorie" value="cuisine"
						<?php if((isset($_POST['categorie']))&&($_POST['categorie'])=='cuisine') echo 'checked="checked"'; ?>>Utils de Cuisine</label>
					<label class="radio"><input type="radio" name="categorie" value="maison"
						<?php if((isset($_POST['categorie']))&&($_POST['categorie'])=='maison') echo 'checked="checked"'; ?>>Essentiel domestique</label></br>
					
					<input type="file" class="custom-file-input" id="fichier" name="fichier" accept="image/png, image/jpeg,image/jpg image/gif"
					required="required">
			
					<label for="price">Prix souhaité en Euro </label> 
					<input type="number" class="form-control" id="prix" name="prix" min="0"
					value="<?php if(isset($_POST['prix']))  echo $_POST['prix']; ?>">
				
					<label for="message">Donner une petite description de l'article:</label>
					<textarea class="form-control" rows="5" id="message" name="message" text="hello" ><?php if(isset($_POST['message'])) echo $_POST['message'];?>
					</textarea>
				
		</fieldset>
		
		<div class="form-group">
			<input type="reset" class="<?php if(isset($_POST['submit'])) echo "btn btn-warning disabled"; else echo "btn btn-warning active";?>" name="reset" value="RESET">
			<input type="submit" class="btn btn-primary" name="submit" value="ENVOYER"/>
		</div>
	
	</form>