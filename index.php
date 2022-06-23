<?php
declare(strict_types=1);

if(isset($_GET['page'])){
    switch($_GET['page']) {
        case 'classes' :
            require 'classes.php';
            break;
        case 'extending' :
            require 'extending.php';
            break;
        default :
            echo 'hmmm give me a page sicco';
    };

};




