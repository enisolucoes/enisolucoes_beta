<div id="barraLateral">
    <ul id="links">
        <li><img src="../img/logo-branca.png"></li>
        <li><button><ion-icon name="home"></ion-icon> <span>Geral</span></button></li>
        <li><button><ion-icon name="people"></ion-icon> <span>Administradores</span></button></li>
        <li><button><ion-icon name="build"></ion-icon> <span>Serviços</span></button></li>
        <li><button><ion-icon name="storefront"></ion-icon> <span>Loja</span></button></li>
        <li><button><ion-icon name="book"></ion-icon></ion-icon> <span>Cursos</span></button></li>
        <li><button><ion-icon name="exit"></ion-icon></ion-icon> <span>Sair</span></button></li>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            echo date('d/M/Y')."<br>";
            echo date('H/i/s');
        ?>
    </ul>
</div>