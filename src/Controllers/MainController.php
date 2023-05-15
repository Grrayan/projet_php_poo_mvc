<?php

namespace Controllers;
class MainController
{
    public function home(): void

    {
        require VIEWS_DIR . '/home.php';
    }

    public function page404(): void
    {
        require VIEWS_DIR . '/404.php';
    }
}