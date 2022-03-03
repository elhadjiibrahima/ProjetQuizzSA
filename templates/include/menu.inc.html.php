<header class="main-header">
    <nav class="nav">
        <ul class="navbar">
            <li><a href="" id="logo"><img src=" <?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?> " ></a></li>
            <?php /* deconnexion */ if(is_connect() && is_player()  ):?>
                <li id="log-out"><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Déconnexion</a></li>
            <?php endif; ?>                
        </ul>
    </nav>
</header>



