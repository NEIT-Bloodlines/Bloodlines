<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logger
 *
 * @author David landi
 */
class Logger {
    
    
    public static function writeToLog($msg, $line, $path){
        $filePath = 'api/log.txt';
        $log = $msg . '@: ' . $path . ' Line#: ' . $line . "\n";
        $file = fopen($filePath, 'a')or die('cant find the log file');
        fwrite($file, $log);
        fclose($file);
        
    }
    
    public static function clearLog(){
        $filePath = 'api/log.txt';
        unlink($filePath);
    }
}
