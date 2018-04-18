<?php

if(!isset($_REQUEST['action'])){

    $_REQUEST['action'] = 'presentation';
}

$action = $_REQUEST['action'];

switch($action){

    case 'presentation':{

        include("vues/v_presentation.php");
        break;
    }

    case 'locaux':{

        include("vues/v_locaux.php");
        break;
    }

    case 'telecommunications':{

        include("vues/v_telecommunications.php");
        break;
    }

}
?>