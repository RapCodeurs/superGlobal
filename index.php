<?php

$user = "maurel@joumessi.com";
$mot_de_pass = "user123";

echo "<form method='POST'>
<label>Username :</label>
<input type='text' name='username'><br>
<label>Mot de passe :</label>
<input type='password' name='password'><br>
<input type='submit' value='Se connecter'>
</form>";

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification des identifiants
    if($username === $user && $password === $mot_de_pass) {
	    header('location:index1.php');
        echo "Bienvenue, $user !";
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
} ;


