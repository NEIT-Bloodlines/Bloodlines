<?php
require_once 'api/Logger.php';
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
 *      - Modified on 3/3/16, Dave Landi
 *          - In each child class I have added a protected var called viewmodel. This 
 *            Var will be set in the constructor. When the object gets created
 *            you will need to pass in the viewModel. In the buildPage method
 *            a new var name $templateData will be defined by viewmodel for each
 *            template. This provides access to the ViewModel on every page.
 *            
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
    protected $viewmodel;
    public function __construct($viewmodel){
        $this->viewmodel = $viewmodel;
        $this->buildPage();
    }
    
    protected function buildPage(){
        Logger::clearLog();
        Logger::writeToLog('Building Home Page', __LINE__, __FILE__);
        $basePath = 'views/Home/';
        foreach($this->homeViews as $fileName){
            $templateData = $this->viewmodel; 
            require($basePath . $fileName);
        }
    }
}

class PageAuthentication extends Page{
    protected $viewmodel;
    public function __construct($viewmodel){
        $this->viewmodel = $viewmodel;
        $this->buildPage();;
    }
    
    protected function buildPage(){
        Logger::writeToLog('Building Authentication Page', __LINE__, __FILE__);
        $basePath = 'views/Authentication/';
        foreach($this->authenticantionPaths as $fileName){
            $templateData = $this->viewmodel; 
            require($basePath . $fileName);
        }
    }
}

class PagePreGame extends Page{
    protected $viewmodel;
    public function __construct($viewmodel){
        $this->viewmodel = $viewmodel;
        $this->buildPage();
    }
    
    protected function buildPage(){
        Logger::writeToLog('Building Pregame Page', __LINE__, __FILE__);
        $basePath = 'views/PreGame/';
        foreach($this->preGamePaths as $fileName){
            $templateData = $this->viewmodel; 
            require($basePath . $fileName);
        }
    }
}

class PageStatistics extends Page{
    protected $viewmodel;
    public function __construct($viewmodel){
        $this->viewmodel = $viewmodel;
        $this->buildPage();
    }
    
    protected function buildPage(){
        Logger::writeToLog('Building Statistics Page', __LINE__, __FILE__);
        $basePath = 'views/Statistics/';
        foreach($this->statisticsPaths as $fileName){
            $templateData = $this->viewmodel; 
            require($basePath . $fileName);
        }
    }
}
