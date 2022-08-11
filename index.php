<?php
    $debug = true;
    $v = '1.0';

?><!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/flashback.css?<?php echo rand();?>">
  <link rel="stylesheet" href="css/splash.css?<?php echo rand();?>">

  <meta name="theme-color" content="#fafafa">

    <script src="js/bootstrap.bundle.min.js" ></script>


</head>

<body>
<!-- ----------------------------------------------------------splash screen ------------------------------ -->
<div class="splash">
<div class="row">
    <div class="col-10 text-end">
        <?php if($_GET['lang'] === 'en'):?>
        <a href="?lang=fr"><img class="lang-switch" src="img/index/lang_fr.png" alt="FR"></a>
        <?php else:?>
        <a href="?lang=en"><img class="lang-switch" src="img/index/lang_en.png" alt="EN"></a>
        <?php endif;?>
    </div>
</div>
    <img class="explosion" src="img/index/explosion.png" alt="L'unives de zombie kidz s'étend" />
    <img class="logo" src="img/index/logo.png" alt="logo FlashBack Zombie kidz" />
    <p>
        <button>
            <a href="game.php">
                Mini jeu
            </a>
        </button>
        <button>
            <a href="https://www.scorpionmasque.com/fr/zombie-kidz-%C3%A9volution">
                En savoir plus
            </a>
        </button>

    </p>
    <h2>FLASHBACK EST UN JEU D&#39;ENQUÊTE COOPÉRATIF<br/> DANS L’UNIVERS DE ZOMBIE KIDZ</h2>
    <p>
        Il ne reste que quelques instants avant que les zombies ne causent la fin du monde !<br/>
        Heureusement, tu disposes d’une machine permettant de visiter un souvenir.
    </p>

    <img class="materiel" src="img/index/game.png" alt="Materiel de jeu" style=""/>

    <h2>ÉLUCIDER DES MYSTÈRES</h2>
    <p>
        C’EST LA PANIQUE! Il ne reste que quelques minutes avant la fin du monde... <br/>
        Les zombies ont pris le contrôle de l’école et leur plan de conquête de la Terre est sur le point d’aboutir! <br/>
        Tous les habitants de la planète risquent de se transformer en mangeurs de choucroute à la cervelle! <br/>
        Il ne reste qu’un seul espoir: un bidule développé par les Kidz qui permet de voyager dans un souvenir.<br/>
        Comprendre le passé te permettra peut-être de changer l’avenir et de sauver le monde.<br/>
        Nous avons besoin de toi pour mener l’enquête !
    </p>
    <img class="tools" src="img/index/tools.png" alt="tools" />
    <p>
        Saute d’un point de vue à l’autre, découvre des indices…
        élucide les mystères et déjoue le plan des zombies !<br/>
        Dès novembre, découvre de vais gadgets qui modifient le jeu et rejoue chacun des 3 scenarios
        d’une toute nouvelle façon!
    </p>
    <img class="cards" src="img/index/cards.png" alt="Cartes"/>
    <img class="planet" src="img/index/planet.png" alt="planet logo"/>
    <div class="clearfix"></div>
    <div class="box-ending">
        <div class="row">
            <div class="col-md-5">
                <img class="box d-none d-md-block" src="img/index/box.png" alt="Cartes" style=""/>
            </div>
            <div class="col-md-7">
                <h2>FAIS ÉQUIPE AVEC TES AMIS <br/>OU TA FAMILLE</h2>
                <p>
                    Flashback : Zombie Kidz est un jeu d&#39;enquête coopératif. Rassemble ton équipe autour de la
                    table et ensemble, découvrez des indices, élucidez des mystères et arrêtez le plan machiavélique
                    des zombies !
                </p>
                <div class=" d-sm-block d-md-none clearfix">
                    <img class="box" src="img/index/box.png" alt="Cartes" style=""/>

                </div>
                <div class="announce">
                    Précommande<br/>
                    FLASHBACK : ZOMBIE KIDZ
                    <br/>dans ta boutique ludique préférée.
                </div>
                <p class="yellow">Sortie Novembre 2022</p>
            </div>
        </div>
    </div>


<div class="clearfix"></div>
    <button>
        <a href="game.php">
            Mini jeu
        </a>
    </button>
    <button>
        <a href="https://www.scorpionmasque.com/fr/zombie-kidz-%C3%A9volution">
            En savoir plus
        </a>
    </button>

    <div class="clearfix"></div>
    <img class="logo_SM" src="img/index/logo_sm.png" alt="Scorpion masqué"/>
    <div class="social">
        <a href="insta" class=" insta" >Instagram</a>
        <a href="insta" class=" twitter">Twitter</a>
        <a href="insta" class=" facebook">Facebook</a>
        <a href="insta" class=" youtube">Youtube</a>
    </div>

    <img class="copyright" src="img/index/copyright.png" alt="Copyright &copy; 2022 - Le Scorpion Masqué"/>
</div>
</body>

</html>
