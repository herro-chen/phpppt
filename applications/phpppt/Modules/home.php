<?php
namespace Modules;

function home()
{
    if(!empty($_GET))
    {
        return _header('Location: /', 301);
    }
    $html_title = 'phpppt';
    $html_keywords = 'phpppt';
    $html_desc = 'phpppt';
    
    include NET_ROOT . '/Views/home.tpl.php';
}
