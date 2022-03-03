<?php
// require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.html.php");
// require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."menu.html.php");

if(isset($_SESSION[KEY_ERRORS])){
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}

?>

<section class="content-form">
    <form class="connexion-form" id="connexion-form"  name="form" action="<?= WEB_ROOT ?>" method="POST">
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="connexion">
        <div class="libele-form">
            <h2>Login form</h2>
        </div>
        
        <div class="control-group">
            <?php /* gestion des erreurs */  if (isset($errors['connexion'])):?>
                <small class="ERROR-LAY RED-ERROR"><?= $errors['connexion'] ?></small>
            <?php endif; ?>

            <!--//!login -->
            <div class="forms-group">
                <!-- <Label class="label-connexion" for="login"></Label> -->
                <input class="input-connexion" type="text"  name="login" id="login" class="login" placeholder="login">
                <small id="small_login">Erreur login</small>
                <!-- <small class="ic-connexion"><img src="<WEB_PUBLIC."img".DIRECTORY_SEPARATOR."icone".DIRECTORY_SEPARATOR."ic-login.png"?>" alt=""></small> -->
            </div>
            <?php /* gestion des erreurs */ if (isset($errors['login'])):?>
                <small class="ERROR-LAY RED-ERROR"><?= $errors['login'] ?></small>
            <?php endif; ?>

            <!-- //!password -->
            <div class="forms-group">
                <!-- <Label class="label-connexion" for="password" >Passwor</Label> -->
                <input class="input-connexion" type="password"  name="password" id="password" class="password" placeholder="password">
                <!-- <small class="ic-connexion"><img src="<WEB_PUBLIC."img".DIRECTORY_SEPARATOR."icone".DIRECTORY_SEPARATOR."ic-login.png" >" alt=""></small> -->
               <small id="small_password">Error password</small>
            </div>
            <?php /* todogestion des erreurs */  if (isset($errors['password'])):?>
                <small class="ERROR-LAY RED-ERROR"><?= $errors['password'] ?></small>
            <?php endif; ?>

            <!-- //!press on submit button -->
            <div class="last-control">
                <button id="connect" type="submit" onclick="checkEmail()" na >Connexion</button>
                <a href="<?= WEB_ROOT."?controller=securite&action=inscription" ?>">S'inscrire pour jouer</a>
            </div>
        </div>        
    </form>
</section>






