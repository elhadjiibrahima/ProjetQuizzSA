<header class="main-header">
    <nav class="nav">
        <ul class="navbar">
            <li><a href="" id="logo"><img src=" <?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?> " ></a></li>
            
            <?php /* Accueil */ if(is_connect()):?>
                <li id="home"><a href="<?= WEB_ROOT."?controller=user&action=accueil"?>"></a></li>
            <?php endif; ?>


            <?php /* liste des joueurs */ if(is_admin()):?>
                <li id="liste-joueur"><a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>"></a></li>
            <?php endif; ?>
            
            <?php /* inscription */ if(!is_connect()):?>
                <li id="sign-in"><a href="<?=WEB_ROOT."?controller=securite&action=inscription" ?>"></a></li>
            <?php endif; ?>


            <?php /* deconnexion */ if(is_connect()):?>
                <li id="log-out"><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Déconnexion</a></li>
            <?php endif; ?>                
        </ul>
    </nav>
</header>



