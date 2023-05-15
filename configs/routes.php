<?php
use Controllers\MainController;

$mainController = new MainController();

switch(ROUTE){


    case '/';
        $mainController->home();
        break;
    default:
        $mainController->page404();
        break;
}