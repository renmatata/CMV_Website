<?php

    if (!isset($_GET['m'])) {
        $_GET['m'] = "home";
    } 

    if ($_GET['m'] == "menu") {  
        require "views/ui_menu.php";
    } else if ($_GET['m'] == "services") {
        require "views/ui_services.php";
    } else if ($_GET['m'] == "event") {
        require "views/ui_event.php";
    } else if ($_GET['m'] == "reservation") {
        require "views/ui_reservation.php";
    }else {
        require "views/ui_home.php";
    }

?>