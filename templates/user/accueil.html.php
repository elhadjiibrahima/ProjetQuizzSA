<?php
// todo !!! layout ou page de présentation
//! header of html
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");

// !MENU
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."menu.inc.html.php");
?>
    


<?php
/*****
**** PARTIE VARIABLE: contenu des vues
*****/
if(isset($content_for_views)){
    echo $content_for_views;
}

/*****
**** 
*****/
?>
    <?php if(is_connect() && is_admin()):?>
    
 <div class="accueil_admin">
     <div class="cc">
     <div class="menuu">
         <h1>Creer et Parametrer vos Quizz</h1>
          <div class="logout">
            <?php /* deconnexion */ if(is_connect()  ):?>
                <h3 id="log-out"><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Déconnexion</a></h3>
            <?php endif; ?> 
     </div>
     </div>
     <div class="container">
        <div class="bord">
            <div class="avatar"><img src="<?=WEB_ROOT."/img/Mimo.jpg"?>">
                                             <h2>Mme <br>Balde </h2>
            </div>
            <div class="tb">
                <div class="lab">
                    <label for=""><a href="<?=WEB_ROOT."?controller=user&action=liste.question"?>"> Liste  Question</a></label>
                    <img src="<?=WEB_ROOT."/img/icone/ic-liste-active.png"?>" alt="">
                </div>
                <div class="lab">
                    <label for=""><a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>">Liste Joueur</a></label>
                    <img src="<?=WEB_ROOT."/img/icone/ic-liste.png"?>" alt="">
                </div>
                <div class="lab">
                    <label for=""><a href="<?= WEB_ROOT."?controller=securite&action=creerquestion" ?>">creer Questions</a></label>
                    <img src="<?=WEB_ROOT."/img/icone/ic-ajout.png"?>" alt="">
                </div>
                <div class="lab">
                    <label for=""><a href="<?= WEB_ROOT."?controller=securite&action=inscriptionAdmin" ?>"> Creer admin</a></label>
                    <img src="<?=WEB_ROOT."/img/icone/ic-ajout.png"?>" alt="">
                </div>
            </div>

        </div>
        
        <div class="conten">
        <?php if(isset($content_for_liste)){
            echo $content_for_liste;
        }  ?>
        </div>
     </div>
 </div>

    <?php endif ?>
<?php
//! footer of html
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>