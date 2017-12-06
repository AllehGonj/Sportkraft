<?php
    //$page = $_GET['page'];
    $page = $_SERVER["REQUEST_URI"];

    switch($page){
        case '/Sportkraft/mens.php':
            $page_title = 'SportKraft-Men';
            $section_title = 'Hombres';
            $image = 'img/clothes/man.jpg';
        break;
        case '/Sportkraft/women.php':
            $page_title = 'SportKraft-Women'; 
            $section_title = 'Mujeres'; 
            $image = 'img/clothes/woman.jpg';
        break;
        case '/Sportkraft/kids.php':
            $page_title = 'SportKraft-Kids'; 
            $section_title = 'Niños'; 
            $image = 'img/clothes/kids.jpg';
        break;  
        case '/Sportkraft/brands_section.php':
            $page_title = 'SportKraft-Brands';
            $section_title = 'Marcas'; 
            $image = 'img/clothes/man.jpg'; 
        break;
        default:
            $page_title = 'SportKraft';
            $section_title = 'SportKraft';
            $image = 'img/clothes/man.jpg';
        break;     
    }
?>


