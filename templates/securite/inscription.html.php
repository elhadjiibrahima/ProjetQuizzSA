<?php
$_POST['prenom'];

?>
<link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.inscription.css" ?>">

<section class="content-sign-in">
    <!-- // todo check information to sign in -->
    <div class="check-info" id="check-info">
        <!-- // ! libele -->
        <div class="libele-form">
            <h2>Inscription</h2>
            <!-- <small>pour proposer des quizz</small> -->
        </div>
        <!-- // ! the form -->
        <form class="connexion-form-inscrip" id="connexion-form" action="<?= WEB_ROOT?>" method="POST">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="inscription">
            
            
            <div class="control-group">
                <?php /* gestion des erreurs */  if (isset($errors['inscription'])):?>
                     <small class="ERROR-LAY RED-ERROR"><?= $errors['inscription'] ?></small>
                <?php endif; ?>

                <!--//! prenom -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="prenom">Prénom</Label>
                    <input class="input-sign-in" type="text"  name="prenom" id="prenom" class="login" placeholder="entrez votre prenom">
                </div>
                <?php /* gestion des erreurs */ if (isset($errors['prenom'])):?>
                    <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                <?php endif; ?>


                <!--//! nom -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="nom">Nom</Label>
                    <input class="input-sign-in" type="text"  name="nom" id="nom" class="login" placeholder="entrez votre prenom">
                </div>
                <?php /* gestion des erreurs */ if (isset($errors['nom'])):?>
                    <small class="ERROR-LAY RED-ERROR"><?= $errors['nom'] ?></small>
                <?php endif; ?>


                <!--//! login -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="login">Login</Label>
                    <input class="input-sign-in" type="email"  name="login" id="login" class="login" placeholder="entrez votre prenom">
                </div>
                <?php /* gestion des erreurs */ if (isset($errors['login'])):?>
                    <small class="ERROR-LAY RED-ERROR"><?= $errors['login'] ?></small>
                <?php endif; ?>


                <!--//! password1 -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password1">Password</Label>
                    <input class="input-sign-in" type="password"  name="password1" id="password1" class="login" placeholder="mot de passe">
                </div>


                <!--//! password2 -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password2">Confirm password</Label>
                    <input class="input-sign-in" type="password"  name="password2" id="password2" class="login" placeholder="confirmez votre mot de passe">
                </div>
                <?php /* //!gestion des erreurs de validation et de correspondance de deux mots de passe  */
                    if (isset($errors['password'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['password'] ?></small>
                <?php endif; ?>



                    <!--//! password2 -->
                    <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="file">Avatar</Label>
                    <input class="input-sign-in" type="file" name="file" id="file" placeholder="Choississez votre avatar">
                </div>


            

                <!-- //!press on submit button -->
                <div class="last-control">
                    <button id="connect" type="submit">S'inscrire</button>
                </div>
            </div>        
        </form>
    </div>
    <!-- // todo choose your avatar -->
    <!-- <div class="choose-avatar" id="choose-avatar">
        <figure>
            <img src="<?= '' ?>" alt="avatar joueur" srcset="">
            <figcaption>avatar joueur</figcaption>
        </figure>
    </div> -->


</section>
