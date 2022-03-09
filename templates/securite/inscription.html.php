<!--  <link rel="stylesheet" href="<= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.inscription.css" ?>">

<section class="content-sign-in">
    // todo check information to sign in 
    <div class="check-info" id="check-info">
         // ! libele 
        <div class="libele-form">
             <h4>S'inscrire</h4> 
            <small>pour proposer des quizz</small>
        </div>
        <!- // ! the form 
        <form class="connexion-form-inscrip" id="connexion-form" action="<?= WEB_ROOT?>" method="POST">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="inscription">
            <div class="control-group">
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="prenom">Prénom</Label>
                    <input class="input-sign-in" type="text"  name="prenom" id="prenom" class="login" placeholder="entrez votre prenom">
                </div>
                <small style="color: black;"> ok</small>
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="nom">Nom</Label>
                    <input class="input-sign-in" type="text"  name="nom" id="nom" class="login" placeholder="entrez votre nom">
                </div>
                <small></small>         
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="login">Login</Label>
                    <input class="input-sign-in" type="text"  name="login" id="login" class="login" placeholder="entrez votre login">
                </div>
                <small></small>          
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password1">Password</Label>
                    <input class="input-sign-in" type="password"  name="password1" id="password1" class="password" placeholder="password">
                </div>
                <small></small>         
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password2">Confirm Password</Label>
                    <input class="input-sign-in" type="password"  name="password2" id="password2" class="password" placeholder="password">
                </div>
                <small></small>           
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="file">Avatar</Label>
                    <input class="input-sign-in" type="file" name="file" id="file" placeholder="Choississez votre avatar">
                </div>
                <div class="last-control">
                    <button id="connect" type="submit" onclick="checkemail()">S'inscrire</button>
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

<script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.inscription.js"?>"></script> 

<div class="inscription_joueur">
    <div class="formulaire">
        <div class="titre">
            <h2>S'inscrire</h2>
            <small>Pour tester votre niveau de culture generale</small>
        </div>
        <form action="<?=WEB_ROOT?>" class="form">
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="inscription">
            <div class="first_controle"> 
            <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="nom"> 
            </div>
            <div class="first_controle"> 
                <label for="nom">Prenom</label>
                <input type="text" name="prenom" id="prenom" placeholder="prenom"> 
            </div>
            <div class="first_controle"> 
            <label for="nom">Login</label>
                <input type="login" name="login" id="login" placeholder="login"> 
            </div>
            <div class="first_controle"> 
            <label for="nom">Password</label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="first_controle"> 
            <label for="nom">Confirm password</label>
                <input type="password" name="password2" id="password2" placeholder="password">
              </div>
              <div class="last_controle">
                  <label for="file">Avatar</label>
                  <input type="file" name="file" id="file">
              </div>
              <div class="button"><input type="submit" value="Creer un compte" name="btn" id="btn"></div>
        </form>
    </div>
    <div class="a_vatar">
    <figure>
            <img src="<?=WEB_ROOT."/img/Mimo.jpg"?>" >
            <figcaption style="color: black;">avatar du joueur</figcaption>
        </figure>
    </div>
</div>
