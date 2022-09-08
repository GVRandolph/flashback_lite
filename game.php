<?php
session_start();
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

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/flashback.css?<?php echo rand();?>">

    <link rel="stylesheet" href="css/app.css?<?php echo rand();?>">
    <link rel="stylesheet" href="css/app_mobile.css?<?php echo rand();?>">


    <!-- preload images -->
    <link rel="preload" href="img/game/p-01color.jpg" as="image" >
    <link rel="preload" href="img/game/p-02color.jpg" as="image" >
    <link rel="preload" href="img/game/p-03color.jpg" as="image" >
    <link rel="preload" href="img/game/p-04color.jpg" as="image" >
    <link rel="preload" href="img/game/p-05color.jpg" as="image" >
    <link rel="preload" href="img/game/p-06color.jpg" as="image" >
    <link rel="preload" href="img/game/p-07color.jpg" as="image" >

    <meta name="theme-color" content="#fafafa">

</head>

<body>
<div id="loader">
    <div class="cube">
        <div class="cursor"></div>
    </div>

</div>
<div id="container">

    <!-- ----------------------------------------------------------MENU --------------------------------------- -->
    <div class="card-menu" id="left-menu">
        <a class="menu-item active selected" id="menu1" href="#card1">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/card-background-1.jpg" alt="First card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/p-01color.jpg" alt="First card" >
                    </div>
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu2" href="#card2" >
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/card-background-2.jpg" alt="2nd card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/p-02color.jpg" alt="2nd card" >
                    </div>
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu3" href="#card3">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/card-background-3.jpg" alt="3rd card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/p-03color.jpg" alt="3rd card" >
                    </div>
                </div>
            </div>
        </a>
        <a class="menu-item"  id="menu4" href="#card4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/card-background-4.jpg" alt="4th card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/p-04color.jpg" alt="4th card" >
                    </div>
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu5" href="#card5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">

                        <img src="img/game/card-background-5.jpg" alt="5th card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/p-05color.jpg" alt="5th card" >
                    </div>
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu6" href="#card6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/card-background-6.jpg" alt="6th card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/p-06color.jpg" alt="6th card" >
                    </div>
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu7" href="#card7">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/card-background-7.jpg" alt="7th card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/p-07color.jpg" alt="7th card" >
                    </div>
                </div>
            </div>
        </a>
        <a class="menu-item" id="menu8" href="#question-list">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/game/card-background.jpg" alt="7th card" >
                    </div>
                    <div class="flip-card-back">
                        <img src="img/game/card-background.jpg" alt="7th card" >
                    </div>
                </div>
            </div>
        </a>
    </div>
    <a id="homelink" href="index.php" class="home">
        <img src="img/game/logo.png" alt="home"/>
    </a>



    <!-- ----------------------------------------------------------CANVAS --------------------------------------- -->
    <div id="grey-overlay"></div>
    <div id="transparent-overlay"></div>
    <div id="canvas">
        <div class="puzzlepiece first-selected" id="introcard"  >
            <img src="img/game/intro_<?php echo $lang;?>.jpg" class="image" />
            <a id="intro-play" class="hiddenbutton" href="#card1" style="position: absolute; left:20%; top:77%; width:27%; height:18%;"> </a>
            <div id="mb-fullscreen">
                <span class="yellow" ><?php echo $i18n[$lang]['text12'];?></span>
            </div>
        </div>

        <div class="puzzlepiece" id="card1"  >
            <img src="img/game/p-01color.jpg" class="image" />

            <a id="hint-0-anchor" class="hiddenanchor" style=" position: absolute; left:50%; top:50%; width:0%;height:0%;"> </a>
            <a id="hint-doghead-anchor" class="hiddenanchor" style=" position: absolute; left:28%; top:48%; width:15%;height:18%;"> </a>
            <a id="hint-question1-anchor" class="hiddenbutton" style=" position: absolute; left: 69%; top: 61%; width: 14%; height:12%;"> </a>

            <a id="card1-doghead" class="hiddenbutton" href="#card2" style="position: absolute; left:28%; top:51%; width:15%;height:18%;"> </a>
            <a id="card1-retro" class="hiddenbutton" href="#card3" style=" position: absolute; left: 68%; top: 9%; width: 31%; height:24%;  transform: rotate(-30deg)"> </a>
            <a id="card1-question1" class="hiddenbutton" href="#question-list" style=" position: absolute; left: 70%; top: 66%; width: 12%; height:12%;"> </a>
        </div>
        <div class="puzzlepiece " id="card2"  >
            <img src="img/game/p-02color.jpg" class="image" />
            <a id="hint-boyhead-anchor" class="hiddenbutton" href="#card1" style="position: absolute; left: 47%; top: 2%; width: 16%; height: 20%; "> </a>

            <a id="card2-boy" class="hiddenbutton" href="#card1" style="position: absolute; left: 49%; top: 3%; width: 13%; height: 20%; "> </a>
            <a id="card2-zombie" class="hiddenbutton" href="#card4" style="position: absolute; left: 19%; top:50%; width: 11%;height:11%; "> </a>
            <a id="card2-question2" class="hiddenbutton" href="#question-list" style="position: absolute; left: 15%; top: 30%; width: 11%; height:12%; "> </a>
        </div>
        <div class="puzzlepiece " id="card3"  >
            <img src="img/game/p-03color.jpg"  class="image" />
            <a id="card3-visiere" class="hiddenbutton" href="#card5" style="position: absolute; left: 41%; top: 58%; width: 15%; height: 9%; "> </a>
        </div>
        <div class="puzzlepiece " id="card4"  >
            <img src="img/game/p-04color.jpg" class="image" />
            <a id="card4-dog" class="hiddenbutton" href="#card2" style="position: absolute; left: 63%; top: 11%; width: 9%; height: 12%; "> </a>
        </div>
        <div class="puzzlepiece " id="card5"  >
            <img src="img/game/p-05color.jpg" class="image" />
            <a id="card5-head" class="hiddenbutton" href="#card6" style="position: absolute; left: 31%; top: 43%; width: 10%; height: 15%; "> </a>
        </div>
        <div class="puzzlepiece " id="card6"  >
            <img src="img/game/p-06color.jpg" class="image" />
            <a id="card6-clown" class="hiddenbutton" href="#card7" style="position: absolute; left: 45%; top: 87%; width: 16%; height: 13%; "> </a>
            <a id="card6-question3" class="hiddenbutton" href="#question-list" style="position: absolute; left: 74%; top: 30%; width: 11%; height:11%; "> </a>
        </div>
        <div class="puzzlepiece " id="card7"  >
            <img src="img/game/p-07color.jpg" class="image" />
        </div>

        <div class="puzzlepiece" id="endcard"  >
            <img src="img/game/endgame_<?php echo $lang;?>.png" class="image" />
            <a id="close" class="hiddenbutton" href="#question-list" style="position: absolute; right: 0; top: 0; width: 15%; height:15%;"> </a>
            <a id="replay" class="hiddenbutton" style="position: absolute; left:49%; top:75%; width: 19%; height:10%;"> </a>
            <a id="learnmore" class="hiddenbutton" href="https://www.scorpionmasque.com/FlashbackZK" style="position: absolute; left:69%; top:75%; width: 19%; height:10%;"> </a>
        </div>

    </div>

    <!-- ------------------------------------- QUESTION page --------------------------------------------------------->
    <div id="question-list" class="puzzlepiece" >

        <div class="row question-row">
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-md-4">
                <div class="question" id="question1" data-id="1" >
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="img/game/question1_bg.jpg" alt="background " />
                            </div>
                            <div class="flip-card-back">
                                <img src="img/game/question1_<?php echo $lang;?>.jpg" alt="Quest ce qui a causé l'accident du kidz à vélo ?" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <button id="button-answer1" data-id="1"><?php echo $i18n[$lang]['areyousure'];?></button>
                <div class="text-answer" id="text-answer1">
                    <?php echo $i18n[$lang]['answer1'];?>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row question-row">
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-md-4">
                <div class="question" id="question2" data-id="2">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="img/game/question2_bg.jpg" alt="background" >
                            </div>
                            <div class="flip-card-back">
                                <img src="img/game/question2_<?php echo $lang;?>.jpg" alt="7th card" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <button id="button-answer2" data-id="2"><?php echo $i18n[$lang]['areyousure'];?></button>
                <div class="text-answer" id="text-answer2">
                    <?php echo $i18n[$lang]['answer2'];?>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row question-row">
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-md-4">
                <div class="question" id="question3" data-id="3">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="img/game/question3_bg.jpg" alt="7th card" >
                            </div>
                            <div class="flip-card-back">
                                <img src="img/game/question3_<?php echo $lang;?>.jpg" alt="7th card" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">

                <button id="button-answer3" data-id="3"><?php echo $i18n[$lang]['areyousure'];?></button>

                <div class="text-answer" id="text-answer3">
                    <?php echo $i18n[$lang]['answer3'];?>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row question-bottom">
            <div class="col-6">
                <button id="back" onclick="window.history.back()">
                    &larr; <?php echo $i18n[$lang]['back'];?>
                </button>
            </div>
            <div class="col-6">
                <button id="game-end" >
                    <?php echo $i18n[$lang]['endofgame'];?>
                </button>
            </div>
        </div>

    </div>
    <!-- ---------------------------------------end quesetion page---------------------------------------------------->

</div>

<!-- ---------------------------------------------------------- TUTO --------------------------------------- -->
<div id="tuto">
    <!-- Magnifier -->
    <div id="hint-magnifier" class="hint">
        <img class="magnifying-glass" src="img/game/FB_Loupe.png" />
    </div>

    <!-- texts -->
    <div id="texts-tuto">

        <div id="text-tuto-1" class="tuto-text">
            <?php echo $i18n[$lang]['text13'];?>
            <button id="tuto-next-step1"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-2" class="tuto-text">
            <?php echo $i18n[$lang]['text14'];?>
            <button id="tuto-next-step2"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-3" class="tuto-text">
            <?php echo $i18n[$lang]['text15'];?>
            <button id="tuto-next-step3"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-4" class="tuto-text">
            <?php echo $i18n[$lang]['text16'];?>
            <button id="tuto-next-step4"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-5" class="tuto-text">
            <?php echo $i18n[$lang]['text17'];?>
            <button id="tuto-next-step5"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-6" class="tuto-text">
            <?php echo $i18n[$lang]['text18'];?>
            <button id="tuto-next-step6"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-7" class="tuto-text">
            <?php echo $i18n[$lang]['text19'];?>
            <button id="tuto-next-step7"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-8" class="tuto-text">
            <?php echo $i18n[$lang]['text20'];?>
            <button id="tuto-next-step8"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-9" class="tuto-text">
            <?php echo $i18n[$lang]['text21'];?>
            <button id="tuto-next-step9"><?php echo $i18n[$lang]['next'];?></button>
        </div>
        <div id="text-tuto-10" class="tuto-text">
            <?php echo $i18n[$lang]['text22'];?>
            <button id="tuto-next-step10"><a href="#card1">Go !</a></button>
        </div>
    </div>
</div>

<!-- -->
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>

<script>
    /* ------------------------------------------------------Utilities */
    function $(id){ return document.getElementById(id);}
    function $_(q){ return document.querySelector(q);}
    function $_s(q){ return document.querySelectorAll(q);}

    /* --------------------------------------------------- Variables */
    var lastPosX = 0; // for image dragging
    var lastPosY = 0; // for image dragging
    var isDragging = false; // for image dragging
    var isPinching = false; // for image dragging

    /* ----------------------------------------------------- Dom elements */
    var $puzzlepieces;
    var $hiddenbuttons;
    var $menupieces;
    var $canvas;
    var $tutohintMagnifier;

    /* ----------------------------------------------------- DOM load */
    document.addEventListener("DOMContentLoaded", function() {

        // initiate dom elements
        $menupieces = $_s('#left-menu .menu-item');
        $puzzlepieces = $_s('#canvas .puzzlepiece');
        $firstpuzzlepiece = $_('#canvas .puzzlepiece.first-selected');
        $hiddenbuttons = $_s('.hiddenbutton');
        $tutoTexts = $_s('.tuto-text');
        $canvas = $('canvas');
        $tutohintMagnifier = $('hint-magnifier');
        $questionCards = $_s('#question-list .question');

        // redirect to card 1 if current #card is not active
        let hash = window.location.hash;
        if (hash) {
            if (!$_(hash).classList.contains('active')) {
                window.location = window.location.href.replace(window.location.hash, "");
            }
        }else{ // no hash go to intro card
            window.location = window.location.href + "#introcard";

        }

        // full screen mode
        $('btn-fullscreen').addEventListener('click',function(){
            document.documentElement.requestFullscreen();
            //this.style.display='none';
        });

        // menu selection
        for (let i = 0; i < $menupieces.length; i++) {
            $menupieces[i].addEventListener('click', function (e) {
                for (let i = 0; i < $menupieces.length; i++) {
                    $menupieces[i].classList.remove('selected');
                }
                this.classList.add('selected');
            });
        }

        // menu activation
        for (let i = 0; i < $hiddenbuttons.length; i++) {
            $hiddenbuttons[i].addEventListener('click', function (e) {
                $firstpuzzlepiece.classList.remove('first-selected'); //remove first selected
                activatePiece(this.getAttribute('href'));
            });
        }

        // question activation
        $('card1-question1').addEventListener('click',function(e){ activateQuestion($('question1'),0);} );
        $('card2-question2').addEventListener('click',function(e){ activateQuestion($('question2'),0);});
        $('card6-question3').addEventListener('click',function(e){ activateQuestion($('question3'),0);});

        //end game activation
        $('game-end').addEventListener('click',function(e){
            window.location.hash = 'endcard';
            $('grey-overlay').style.display = 'block';
        });

        // replay action
        $('replay').addEventListener('click',resetGame);

        // close end card
        $('close').addEventListener('click',function(){
            window.location.hash = 'question-list';
            $('grey-overlay').style.display = 'none';
        });

        // tuto positionning
        // tuto step 1
        $('intro-play').addEventListener('click',function(){
            activatePiece('card1');
            $('grey-overlay').style.display = 'none';
            $('transparent-overlay').style.display = 'block';
            showTutotext($('text-tuto-1'));
        });

        // tuto step 1
        $('tuto-next-step1').addEventListener('click',function(){
            showTutotext($('text-tuto-2'));
        });

        // tuto step 2
        $('tuto-next-step2').addEventListener('click',function(){
            magnify($('hint-doghead-anchor'),0);
            showTutotext($('text-tuto-3'));
        });

        // tuto step 3
        $('tuto-next-step3').addEventListener('click',function(){
            showTutotext($('text-tuto-4'));
            activatePiece('card2');
            $('card2').classList.add('active');
            $('menu2').classList.add('active');
            $('menu1').classList.remove('selected');
            $('menu2').classList.add('selected');
            $('card2').classList.add('selected');
            magnify($('hint-boyhead-anchor'),0);
        });

        // tuto step 4
        $('tuto-next-step4').addEventListener('click',function(){
            showTutotext($('text-tuto-5'));
        });

        // tuto step 5
        $('tuto-next-step5').addEventListener('click',function(){
            showTutotext($('text-tuto-6'));
            rotoMagnify($('menu5'),$('menu1'));
        });

        // tuto step 6
        $('tuto-next-step6').addEventListener('click',function(){
            showTutotext($('text-tuto-7'));
            activatePiece('card1');
            $('menu1').classList.add('selected');
            $('menu2').classList.remove('selected');
            magnify($('hint-question1-anchor'),0);
        });

        // tuto step 7
        $('tuto-next-step7').addEventListener('click',function(){
            activatePiece('question-list');
            $('menu1').classList.remove('selected');
            $('menu8').classList.add('selected');
            activateQuestion($('question1'),0);
            showTutotext($('text-tuto-8'));
            $('hint-magnifier').style.display='none';
        });
        // tuto step 8
        $('tuto-next-step8').addEventListener('click',function(){
            showTutotext($('text-tuto-9'));
        });
        // tuto step 9
        $('tuto-next-step9').addEventListener('click',function(){
            showTutotext($('text-tuto-10'));
        });

        // tuto step 10
        $('tuto-next-step10').addEventListener('click',function(){
            $('hint-magnifier').style.display='none';
            $('texts-tuto').remove();

            // go to first piece
            resetGame();
        });

    });

    function magnify(hintTarget, attempt) {
        let linkpos = hintTarget.getBoundingClientRect();

        if(linkpos.height==0 && attempt < 10 ){
            attempt++;
            setTimeout( magnify , 100, hintTarget, attempt);
            return;
        }

        let topPos = linkpos.top - 30 ;
        let leftPos = linkpos.left -30 ;
        let widthPos = linkpos.width + 50;
        $tutohintMagnifier.style.top = topPos+'px';
        $tutohintMagnifier.style.left = leftPos+'px';
        $tutohintMagnifier.style.width = widthPos + 'px';
    }

    var target;
    var rotoanim = [];
    function rotoMagnify(target1, target2){
        magnify(target1);
        rotoanim[0] = setTimeout( magnify, 700, target2,0 );
    }
    function resetRotoMagnify(){
        for(let i=0; i<3;i++){
            clearTimeout( rotoanim[i] );
        }
    }

    function showTutotext( textTuto ){
        for(let i =0; i< $tutoTexts.length; i++){
            $tutoTexts[i].style.display='none';
        }
        textTuto.style.display = 'block';
    }

    function activateQuestion(questionTarget, attempt) {
        let linkpos = questionTarget.getBoundingClientRect();
        if(linkpos.height==0 && attempt < 10 ){
            attempt++;
            setTimeout( activateQuestion , 100, questionTarget, attempt);
            return;
        }
        questionTarget.classList.add('active');
        let id = questionTarget.getAttribute('data-id');
        $('button-answer'+id).addEventListener('click', showAnswer ); // activate the button

        checkEndGame();
    }

    function showAnswer(){
        let id = this.getAttribute('data-id');
        $('text-answer'+id).style.display='block';
        this.style.display='none';
    }

    function activatePiece( pieceId ){
        for (let i = 0; i < $menupieces.length; i++) {
            if (pieceId == $menupieces[i].getAttribute('href')) {
                $menupieces[i].classList.add('active');
                for (let j = 0; j < $menupieces.length; j++) {
                    $menupieces[j].classList.remove('selected');
                }
                $menupieces[i].classList.add('selected');
            }
        }
        window.location.hash = pieceId;
        checkEndGame();
    }

    function checkEndGame(){
        let show = 0;
        for(let i=0;i<$questionCards.length;i++) {
            show += ($questionCards[i].classList.contains('active'))?1:0;
        }
        for(let i=0;i<$menupieces.length;i++) {
            show += ($menupieces[i].classList.contains('active'))?1:0;
        }
        if(show>=11) {
            $('game-end').classList.add('active');
        }
    }

    // remove all active menus, questions and go back to card 1
    function resetGame(){
        for (let j = 0; j < $menupieces.length; j++) {
            $menupieces[j].classList.remove('active');
        }
        for (let j = 0; j < $puzzlepieces.length; j++) {
            $puzzlepieces[j].classList.remove('active');
        }
        for (let j = 0; j < $questionCards.length; j++) {
            $questionCards[j].classList.remove('active');
        }
        for (let i = 0; i < $menupieces.length; i++) {
            $menupieces[i].classList.remove('selected');
        }

        for (let id = 1; id < 4; id++) {
            $('button-answer'+id).style.display='block';
            $('button-answer'+id).removeEventListener('click',showAnswer);
            $('text-answer'+id).style.display='none';
        }

        $('grey-overlay').style.display = 'none';
        $('transparent-overlay').style.display = 'none';
        $('game-end').classList.remove = 'active';
        $('menu1').classList.add('selected');
        $('menu1').classList.add('active');
        window.location.hash = 'card1';
    }

    /* -- loader */
    var loader = $('loader');
    window.addEventListener('load', function (){
        loader.style.display = 'none';
    })
</script>
</body>

</html>
