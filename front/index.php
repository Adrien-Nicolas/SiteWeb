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
$page->appendJsUrl('js/script.js');
$page->appendCssUrl("https://unpkg.com/aos@2.3.1/dist/aos.css");
$page->appendJsUrl("https://unpkg.com/aos@2.3.1/dist/aos.js");

$page->appendContent(<<<HTML

<div class="container">


 <div class="containerDeb">
        <span class="border"><img src="img/pdp.jpg" alt="logo pdp" width="100%" class="imageHover"></span> 
         <div class="middle">
            <a class="text" href="experience.php">En savoir plus</a>
        </div>
 </div>
<hr class="new1">


<div class="grid-actualite-container">
    <span>        
        <h1 class="txtc">Actualité</h1>
          
            <div class="index-item-zindex">
                <ul>
             
                  <li><i> 
             <span class="bold">Octobre 2021</span> : Création du site WEB
                    </i></li>   
                     <p></p>   
                           <li><i> 
             <span class="bold">Septembre 2021</span> : Entrée en 3ème année d'école d'ingénieur
            <span class="bold">Cesi Reims</span> 
       
                    </i></li>   
                     <p></p>   
                     <li><i> 
            <span class="bold">Fevrier 2021</span>  : Acquisition du CCNA1
             <span class="bold">Cesi Reims</span> 
       
                    </i></li>  
                                            
                        <p></p>  
                   <li><i> 
              <span class="bold">Juillet 2019</span>: Baccalauréat Scientifiques options Sciences de l’ingénieur
            <span class="bold">Lycée Franklin Roosevelt (à Reims)</span> 
       
                    </i></li> 
                    <p></p>  
           
             
                
                </ul>
            </div>
            
    </span>
 
 <span>
     <h1 class="txtc">Présentation</h1>     
        <div class="index-item-zindex">
             <ul>
               <li>
                <i> 
        "Etant actuellement en formation
spécialisée dans l’informatique au sein
de l’école d’ingénieur CESI (1
ère année
du cycle d’ingénieur), je suis à l’aise
avec le travail en groupe ainsi que le
contact relationnel.
Je me considère comme ouvert,
travailleur et appliqué dans tout ce que
je peux faire. Je m’adapte facilement
tout en étant réceptif"
                </i>     
           </li>
           <p></p>
              <li>
                <i> 
       "J’ai des compétences en langage C et Arduino (environ 4 ans d’expérience) et je me documente sur le
langage Python, lié à une carte Raspberry pi. Je pourrais donc être utile au développement des
différents systèmes pouvant m’être proposés." 
                </i>     
           </li>
           <p></p>
           
           </ul>
            </div>



</div>
<hr class="new1">
 <div class="containerDeb">
<h1 class="txtc">Plateforme équatorial</h1>
 <span class="border"><img src="img/equa.gif" alt="logo pdp" width="100%" class="imageHover"></span> 
 <div class="middleFin">
            <a class="text" href="projet.php">En savoir plus</a>
        </div>
 </div>
 </div>





</div>


HTML);
echo $page->toHTML();
