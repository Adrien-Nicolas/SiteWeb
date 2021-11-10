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


$page->appendContent(<<<HTML
<div class="container">
    <div class="flex-center">  
    <span class="txtc bold">Curriculum vitae</span>
    </div>
    <p></p>
    <div class="index-item flex-center">
<p></p>
        <div class="txtc"> 
            <p>
                <i> 
       "Vous retrouverez ainsi dans cette partie, mon Curriculum
       vitae retraçant mon parcours professionnel, mes compétences ainsi que mes formations."
                </i>     
            </p>
    </div>
    </div>
   
<a class="flex-center" href="img/CV.pdf" download=""> Télechargez le CV ici.</a>

</div>

HTML
);

echo $page->toHTML();