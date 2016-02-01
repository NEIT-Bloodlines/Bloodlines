<?php
/* 
 * Developer: David Landi
 * Created: 1/31/16
 * Purpose: Connects all of the views to build a page.
 * Notes:
 *      - To use you must require the Pagebuilder class in the index.php for the 
 *        view. You then just create a new page object which will connect all of
 *        views parts. 
 *      - EXAMPLE: 
 *          - require("api/PageBuilder.php"); 
 *          - $homePage = new PageHome();
 * TODO: 
 *      - Add new class for each page on the site
 * Modifed by: (Name, Reason, Date)
 *  */
abstract class Page{
    protected $homeViewPaths = array('views/Home/landingSection.php',
                                     'views/Home/aboutSection.php',
                                     'views/Home/creditsSection.php',
                                     'views/Home/technicalSection.php',
                                     'views/Home/homeModals.php');
    
    abstract protected function buildPage();
}

class PageHome extends Page{
    public function __construct(){
        $this->buildPage();
    }
    
    protected function buildPage(){
        foreach($this->homeViewPaths as $path){
            require($path);
            echo($path);
        }
    }
}
