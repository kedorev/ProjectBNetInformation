<?php
/**
 * Created by PhpStorm.
 * User: kedoFixe
 * Date: 19/11/2016
 * Time: 16:03
 */

?>

<header>
    <nav class="menu">
        <ul id="menu-demo2">
            <li><a href="<?php echo URLSite?>">Accueil</a>

            </li>
            <li><a href="#">WOW</a>
                <ul>
                    <li><a href="persoWow.php">Personnage</a></li>
                </ul>
            </li>
            <li><a href="#">Diablo 3</a>
                <ul>
                    <li><a href="#">Personnage</a></li>
                </ul>
            </li>
            <li><a href="#">Starcraft 2</a>
                <ul>
                    <li><a href="#">Lien sous menu 2</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="connexionUser">
        <?php
            if(isset($_SESSION['USER']))
            {
                echo "<p>Bienvenu " . $_SESSION['USER']."</p>";
                echo "<div id='logout'><a href='PHPCall/logout.php'>Deconnexion </a> </div>";
            }
            else
            {
                echo "<div id='login'><a href='login.php'>Connexion</a> </div>";
            }
        ?>
    </div>
</header>
