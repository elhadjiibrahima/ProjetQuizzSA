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
    <div class="container">
        <div class="bord">
            <div class="avatar"></div>
            <div class="tb">
                <div class="lab">
                    <label for="">Liste  Question</label>
                    <img src="<?=WEB_ROOT."/img/listeque.png"?>" alt="">
                </div>
                <div class="lab">
                    <label for="">Liste Joueur</label>
                    <img src="<?=WEB_ROOT."/img/listejoueur.png"?>" alt="">
                </div>
                <div class="lab">
                    <label for="">creer Questions</label>
                    <img src="<?=WEB_ROOT."/img/question.png"?>" alt="">
                </div>
                <div class="lab">
                    <label for=""> Creer admin</label>
                    <img src="<?=WEB_ROOT."/img/admin.png"?>" alt="">
                </div>
            </div>
        </div>
        </div>
<?php
//! footer of html
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>