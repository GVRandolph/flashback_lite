<?php
$t = fopen('./Flashback_ZK_app_loc_sheet.csv','r');

// langcode
$row = fgetcsv($t);
foreach ($row as $code){
        $langs[] = $code;
}
for($i=0;$i<100;$i++){
    $row = fgetcsv($t);
    foreach( $langs as $j => $code){
        $i18n[$code][$row[0]] = $row[$j];
    }
}
