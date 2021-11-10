<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
set_time_limit(20);

require_once('src/WebPage.php');
require_once('src/autoload.php');
date_default_timezone_set('Europe/Paris');

$page = new WebPage("Adrien NICOLAS");
$page->addAuthor('Nicolas Adrien');
$page->appendCssUrl('css/index.css');
$page->appendCssUrl('css/main.css');



$page->appendContent(<<<HTML
<div class="container">

<img class="flex-center" src="img/pdp2.jpg" alt="pdp" width="200" />





</div>

HTML);
echo $page->toHTML();
