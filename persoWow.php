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
        <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
            <fieldset>
                <p>
                    <label for="nameCaracter">Nom du personnage :</label>
                    <input type="text" name="nameCaracter" id="nameCaracter" placeholder="Saisir le nom ici." value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
                </p>
                <label for="local"> </label>
                <select name="local" id="local">
                    <option value="en_GB">en_GB</option>
                    <option value="de_DE">de_DE</option>
                    <option value="es_ES">es_ES</option>
                    <option value="fr_FR">fr_FR</option>
                </select>
                <label for="realm"> </label>
                <select name="local" id="realm">

                </select>
                <br/>
                <label for="pets">Pets</label>
                <input type="checkbox" name="pets" id="pets" value="Car"/>

                <input type="submit" name="submit" value="Search" id="SearchWowCaracter" />
            </fieldset>
        </form>
        <?php
            if(isset($_SESSION["character"]))
            {
                $perso = unserialize($_SESSION["character"]);
                var_dump($perso);
                ?>
        <div class="row ">
            <div class='col-md-12 center-md'>
                nom du personnage : <?php echo($perso->getName())?>
            </div>

        </div>
                <?php
                //unset($_SESSION["character"]);
            }
        ?>

        <?php
            include "footer.php";
        ?>
    </body>
</html>
