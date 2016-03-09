<?php

/* 
 * Developed by: David Landi
 * Purpose: Writes html to a exsisting file at the provided path
 * Usage: Instanciate HtmlCreator(), pass in the args and then call its write
 *        toFile method. Be sure to use it before the pageBuilder executes.
 */
class HtmlCreator{
    private $pathToPage;
    private $html;
    
    public function __construct($pathToPage, $html) {
        $this->pathToPage = $pathToPage;
        $this->html = $html;
    }
    
    public function writeToHtmlFile(){
        unlink($this->pathToPage);
        $htmlPage = fopen($this->pathToPage, 'a')or die('the path is incorrect');
        fwrite($htmlPage, $this->html);
    }
}

