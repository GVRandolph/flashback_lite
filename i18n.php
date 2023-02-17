<?php
$t = fopen('./Flashback_ZK_app_loc_sheet.csv','r');

// langcode
/*$row = fgetcsv($t);
foreach ($row as $code){
        $langs[] = $code;
}
for($i=0;$i<100;$i++){
    $row = fgetcsv($t);
    foreach( $langs as $j => $code){
        $i18n[$code][$row[0]] = $row[$j];
    }
}*/
$row = fgetcsv($t);
foreach ($row as $code) {
    $langs[] = $code;
}
for ($i = 0; $i < 100; $i++) {
    $row = fgetcsv($t);
    if ($row !== false) {
        // check if the array key exists before accessing it
        foreach ($langs as $j => $code) {
            if (isset($row[$j]) && isset($row[0])) {
                $i18n[$code][$row[0]] = $row[$j];
            }
        }
    } else {
        // handle end of file or other error
    }
}

//set default current language
$lang = 'en';

// set current language via $_SERVER accept language
if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    switch (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2)){
        case 'fr':
            $lang = 'fr';
            break;
        case 'de':
            $lang = 'de';
            break;
        default:
            $lang = 'en';
    }
}

// set current language via $_SESSION
if(!empty($_SESSION['lang'])){
    switch ($_SESSION['lang']){
        case 'fr':
            $lang = 'fr';
            break;
        case 'de':
            $lang = 'de';
            break;
        default:
            $lang = 'en';
    }
}

// set current language via $_GET
if(!empty($_GET['lang'])){
    switch ($_GET['lang']){
        case 'fr':
            $lang = 'fr';
            break;
        case 'de':
            $lang = 'de';
            break;
        default:
            $lang = 'en';
    }
}

$_SESSION['lang'] = $lang;

