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
    protected $homeViews = array('homeNavBar.php',
                                 'landingSection.php',
                                 'aboutSection.php',
                                 'screenshotsSection.php',
                                 'creditsSection.php',
                                 'homeModals.php');
    
    protected $authenticantionPaths = array('authenticationNavBar.php',
                                            'memberLogin.php',
                                            'memberSignup.php',
                                            'authenticationModels.php');
    
    protected $preGamePaths = array('preGameNavBar.php',
                                    'preGameLobby.php',
                                    'preGameJoinGame.php',
                                    'preGameHostGame.php',
                                    'preGameModels.php');
    
    protected $statisticsPaths = array('statsNavBar.php', 
                                       'statsCoreContent.php');
    
    abstract protected function buildPage();
}

class PageHome extends Page{
    public function __construct(){
        $this->buildPage();
    }
    
    protected function buildPage(){
        $basePath = 'views/Home/';
        foreach($this->homeViews as $fileName){
            require($basePath . $fileName);
            #echo($basePath . $fileName);
        }
    }
}

class PageAuthentication extends Page{
    public function __construct(){
        $this->buildPage();
    }
    
    protected function buildPage(){
        $basePath = 'views/Authentication/';
        foreach($this->authenticantionPaths as $fileName){
            require($basePath . $fileName);
            #echo($basePath . $fileName);
        }
    }
}

class PagePreGame extends Page{
    public function __construct(){
        $this->buildPage();
    }
    
    protected function buildPage(){
        $basePath = 'views/PreGame/';
        foreach($this->authenticantionPaths as $fileName){
            require($basePath . $fileName);
            #echo($basePath . $fileName);
        }
    }
}

class PageStatistics extends Page{
    public function __construct(){
        $this->buildPage();
    }
    
    protected function buildPage(){
        $basePath = 'views/Statistics/';
        foreach($this->statisticsPaths as $fileName){
            require($basePath . $fileName);
            #echo($basePath . $fileName);
        }
    }
}
