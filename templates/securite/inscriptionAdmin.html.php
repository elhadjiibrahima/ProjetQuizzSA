
<!-- <link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.inscription.css" ?>">
<section class="content-sign-in">
    
   <div class="check-info" id="check-info">
  
   
        <div class="libele-form">
            
            <small>pour proposer des quizz</small>
        </div>
        
        <form class="connexion-form-inscrip" id="connexion-form" action="<?= WEB_ROOT?>" method="POST">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="inscription">
            <div class="control-group">
                <?php   if (isset($errors['inscription'])):?>
                     <small class="ERROR-LAY RED-ERROR"><?= $errors['inscription'] ?></small>
                <?php endif; ?>
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="prenom">Prénom</Label>
                    <input class="input-sign-in" type="text"  name="prenom" id="prenom" class="login" placeholder="entrez votre prenom">
                    <?php  if (isset($errors['prenom'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                        <?php endif; ?>
                </div>
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="nom">Nom</Label>
                    <input class="input-sign-in" type="text"  name="nom" id="nom" class="login" placeholder="entrez votre nom">
                    <?php  if (isset($errors['prenom'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                        <?php endif; ?>           
                </div>
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="login">Login</Label>
                    <input class="input-sign-in" type="text"  name="login" id="login" class="login" placeholder="entrez votre login">
                    <?php  if (isset($errors['prenom'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                        <?php endif; ?>           
                </div>
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password">Password</Label>
                    <input class="input-sign-in" type="password"  name="password" id="password" class="password" placeholder="password">
                    <?php  if (isset($errors['prenom'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                        <?php endif; ?>           
                </div>
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password2">Confirm Password</Label>
                    <input class="input-sign-in" type="password"  name="password2" id="password2" class="password" placeholder="password">
                    <?php  if (isset($errors['prenom'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                        <?php endif; ?>           
                </div>
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="file">Avatar</Label>
                    <input class="input-sign-in" type="file" name="file" id="file" placeholder="Choississez votre avatar">
                </div>
                <div class="las-control">
                    <button id="connec" type="submit"> <a href="<?= WEB_ROOT."?controller=securite&action=inscriptionAdmin"?>">S'inscrire</a> </button>
                </div>
            </div>
        </form>
    </div>
     <div class="choose-avatar" id="choose-avatar">
        <figure>
            <img src="<?=WEB_ROOT."/img/Mimo.jpg"?>" >
            <figcaption>avatar joueur</figcaption>
        </figure>
    </div> 


</section> -->
<?php

if(isset($_SESSION[KEY_ERRORS])){
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}
?>

<div class="inscription_admin">
    <div class="formulair">
        <div class="titr">
            <h2>S'inscrire</h2>
            <span>Pour tester votre niveau de culture generale</span>
        </div>
        <form action="<?=WEB_ROOT."?controller=user&action=accueil"?>" method="post" class="forme" id="forme" name="forme">
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="inscriptionAdmin">
        <?php   if (isset($errors['inscription'])):?>
                 <small class="ERROR-LAY RED-ERROR"><?= $errors['inscription'] ?></small>
                <?php endif; ?>
        <div class="first_control"> 
            <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom"> 
                <small id="small_nom">error</small>
            </div>
            <?php  if (isset($errors['nom'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['nom'] ?></small>
                        <?php endif; ?>
            <div class="first_control"> 
                <label for="nom">Prenom</label>
                <input type="text" name="prenom" id="prenom"> 
                <small id="small_prenom">error</small>
            </div>
            <?php  if (isset($errors['prenom'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                        <?php endif; ?>
            <div class="first_control"> 
            <label for="nom">Login</label>
                <input type="login" name="login" id="login"> 
                <small id="small_login">error</small>
            </div>
            <?php  if (isset($errors['login'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['login'] ?></small>
                        <?php endif; ?>
            <div class="first_control"> 
            <label for="nom">Password</label>
                <input type="password" name="password" id="password">
                <small id="small_password">error</small>
            </div>
            <?php  if (isset($errors['pasword'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['password'] ?></small>
                        <?php endif; ?>
            <div class="first_control"> 
            <label for="nom">Confirm password</label>
                <input type="password" name="password2" id="password2">
                <small id="small_password2">error</small>
              </div>
              <?php  if (isset($errors['passworw2'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['password2'] ?></small>
                        <?php endif; ?>
              <div class="last_control">
                  <label for="file" id="avatarr">Avatar</label>
                  <input type="file" name="file" id="file">
              </div>
              <div class="button">
                  <input type="submit"  value="Creer un compte" name="btn" id="btn">
            </div>
        </form>
    </div>
    <div class="a_vatar-ad" id="a_vatar-ad">
    <figure>
    
            <!-- image uploadé par défaut -->
            <img src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."Mimo.jpg" ?>" id="new-image" alt="" srcset="">
    </figure>
    </div>
</div>


<script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.inscriptionAdmin.js"?>"></script> 