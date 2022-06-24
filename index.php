<?php
declare(strict_types=1);

if(isset($_GET['page'])){
    switch($_GET['page']) {
        case 'classes' :
            require 'classes.php';
            break;
        case '2_extending' :
            require '2_extending.php';
            break;
        case '3_private' :
            require '3_private.php';
            break;
       case '4_protected.php' :
            require '4_protected.php';
            break;
        default :
            echo 'hmmm give me a page sicco';
    };

};



