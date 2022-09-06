<?php
    session_start();

    $debug = true;
    $v = '1.0';
    include('i18n.php');

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

    <script>
        function togglelanguage(){
            let elt = document.getElementById('lang-list');
            elt.style.display= (elt.style.display == 'block')?'none':'block';
        }
    </script>
</head>

<body>
<!-- ----------------------------------------------------------splash screen ------------------------------ -->
<div class="splash">
    <div class="lang-switch" >
        <a  id="imageDropdown" onclick="togglelanguage()">
            <?php echo $lang;?>
        </a>
        <div id="lang-list" class="lang-list">
            <a href="?lang=fr">fr</a>
            <br/>
            <a href="?lang=en">en</a>
        </div>
    </div>

    <img class="logo" src="img/index/logo_<?php echo $lang;?>.png" alt="logo FlashBack Zombie kidz" />
    <p>
        <button>
            <a href="game.php">
                <?php echo $i18n[$lang]['minigame'];?>
            </a>
        </button>
        <button>
            <a href="https://www.scorpionmasque.com/FlashbackZK">
                <?php echo $i18n[$lang]['learnmore'];?>
            </a>
        </button>

    </p>
    <h2><?php echo $i18n[$lang]['text1'];?></h2>
    <p>
        <?php echo $i18n[$lang]['text2'];?>
    </p>

    <img class="materiel" src="img/index/game_<?php echo $lang;?>.png" alt="Materiel de jeu" style=""/>

    <h2><?php echo $i18n[$lang]['text3'];?></h2>
    <p>
        <?php echo $i18n[$lang]['text4'];?>
    </p>
    <img class="tools" src="img/index/tools.png" alt="tools" />
    <p>
        <?php echo $i18n[$lang]['text5'];?>
    </p>
    <img class="cards" src="img/index/cards_<?php echo $lang;?>.png" alt="Cartes"/>
    <img class="planet" src="img/index/planet.png" alt="planet logo"/>
    <div class="clearfix"></div>
    <div class="box-ending">
        <div class="row">
            <div class="col-md-5">
                <img class="box d-none d-md-block" src="img/index/box_<?php echo $lang;?>.png" alt="Cartes" style=""/>
            </div>
            <div class="col-md-7">
                <h2><?php echo $i18n[$lang]['text6'];?></h2>
                <p>
                    <?php echo $i18n[$lang]['text7'];?>
                </p>
                <div class=" d-sm-block d-md-none clearfix">
                    <img class="box" src="img/index/box_<?php echo $lang;?>.png" alt="Cartes" style=""/>
                </div>
                <div class="announce">
                    <?php echo $i18n[$lang]['text8'];?>
                </div>
                <p class="sortie"><?php echo $i18n[$lang]['text9'];?></p>
            </div>
        </div>
    </div>


<div class="clearfix"></div>
    <button>
        <a href="game.php">
            <?php echo $i18n[$lang]['minigame'];?>
        </a>
    </button>
    <button>
        <a href="https://www.scorpionmasque.com/FlashbackZK">
            <?php echo $i18n[$lang]['learnmore'];?>
        </a>
    </button>

    <div class="clearfix"></div>
    <a href="https://www.scorpionmasque.com" target="_blank"><img class="logo_SM" src="img/index/logo_sm.png" alt="Scorpion masqué"/></a>
    <div class="social">
        <a href="https://www.instagram.com/scorpionmasque/" target="_blank" class=" insta"      >Instagram</a>
        <a href="https://twitter.com/Scorpionmasque"        target="_blank" class=" twitter"    >Twitter</a>
        <a href="https://www.facebook.com/scorpionmasque"   target="_blank" class=" facebook"   >Facebook</a>
        <a href="https://www.youtube.com/scorpionmasque"    target="_blank" class=" youtube"    >Youtube</a>
    </div>

    <img class="copyright" src="img/index/copyright.png" alt="Copyright &copy; 2022 - Le Scorpion Masqué"/>
</div>


</body>

</html>
