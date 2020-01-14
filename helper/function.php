<?php

    function p($var){
        echo '<pre>';
        print_r($var) ;
        echo '</pre>';
        exit();
    }

    function vd($var){
    echo '<pre>';
    var_dump($var) ;
    echo '</pre>';
    exit();
    }