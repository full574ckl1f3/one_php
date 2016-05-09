<?php
    if(isset($_SERVER["fav_food_str"])){
        //do nothing we are in production and have ENV vars already
    }else{
        include "localhost_conf.php";
    }
    define("FAV_FOOD", $_SERVER["fav_food_str"]);
    define("FAV_MUSIC", $_SERVER["fav_music_str"]);
    print "My fav food is ".FAV_FOOD." and my NEW fav music is ".FAV_MUSIC;
?>