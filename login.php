<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 05/12/16
 * Time: 12:26
 */


include "include.php";

?>

<html>
<?php
include  "header.php";
?>
<body>
<?php
include "menu.php";
?>
<form action="PHPCall/Login.php" method="post">
    <fieldset>
        <p>
            <label for="login">Identifiant :</label>
            <input type="text" name="login" id="login" placeholder="Saisir votre identifiant ici." value="<?php if(isset($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
        </p>
        <p>
            <label for="password">Mot de passe :</label>
            <input type="password" name="motDePasse" id="password" value="" />
            <input type="submit" name="submit" value="Identification" />
        </p>
    </fieldset>
</form>
<?php
include "footer.php";
?>
</body>
</html>
