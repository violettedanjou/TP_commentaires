<?php $title = "Connexion"; 

ob_start(); ?>

<h1>PAGE DE CONNEXION</h1>

<div id="form-connexion">
	<form action="index.php?action=validConnection" method="post">
	    <label for="pseudo">Pseudo :</label><input type="text" name="pseudo" required class="input-connexion" /><br/>
	    <label for="pass">Mot de passe :</label><input type="password" name="pass" required class="input-connexion"/><br/>
	    <input type="submit" name="connexion" value="Se connecter" id="button_signin">
	</form>
</div>

<?php $content = ob_get_clean(); 
require('template.php');
?>