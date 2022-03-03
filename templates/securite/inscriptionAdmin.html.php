<link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.inscription.css" ?>">

<section class="content-sign-in">
    <!-- // todo check information to sign in -->
    <div class="check-info" id="check-info">
        <!-- // ! libele -->
        <div class="libele-form">
            <!-- <h4>S'inscrire</h4> -->
            <small>pour proposer des quizz</small>
        </div>
        <!-- // ! the form -->
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


</section>
