<?php


$css = '';
 
foreach($sizes as $size){
    
    foreach($types as $name => $type){

        $css .= ".".$name."-".$size."{ ". $type .": ".$increment."px; } ";

    }

    $increment = $increment * 2;


}


foreach($colours as $name => $colour){
        
    $css .= ".btn-".$name.""."{ background-color: ".$colour['bg']."; color: ".$colour['text']."; font-size: ". $increment ."px; padding: ". $increment ."px ". ( $increment * 2 ) ."px; } ";
    $css .= ".btn-".$name."-outline"."{ border: 1px solid ".$colour['bg']."; color: ".$colour['bg']."; font-size: ". $increment ."px; padding: ". $increment ."px ". ( $increment * 2 ) ."px; } ";

}