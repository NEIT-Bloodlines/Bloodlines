/*
 * Developer: David Landi
 * Created: 2/23/16
 * Purpose: JS methods for storing gamedata to localstorage
 * Modifed by: (Name, Reason, Date)
 *  */
var GameSettingsData = (function(){
    var lsu = LocalStorageUtils;
    var tblName = 'tblGameSettings';
    var tblGameSettings = lsu.getTableData(tblName);
    var thGameID;
    var thIsPrivate;
    var thPassword;
    var thMaxPlayers;
    var thTimePerTurn;
    
    var init = function(cmd){
        tblGameSettings = lsu.convertToObject(tblGameSettings);
        if(!lsu.tblExists(tblGameSettings)){
            tblGameSettings = [];
        }
    };
    
    
    
    function addToTblGameSettings(){
        
    };
    
    return{};
})();

var TerritoryData = (function(){
    var tblTerritoryData = [];
    return{};
})();

var PlayerData = (function(){
    var tblPlayerData = [];
    return{};
})();

var LocalStorageUtils = (function(){
    var storeData = function(data, tblName){};
    
    var convertToString = function(dataObj){
        var obj = JSON.stringify(dataObj);
        return obj;
    };
    
    var setData = function(tblName, tblObj){
        localStorage.setItem(tblName, convertToString(tblObj));
    };
    
    var convertToObject = function(tblString){
        obj = JSON.parse(tblString);
        return obj;
    };
    
    var tblExists = function(tblObj){
        return tblObj !== null;
    };
    var getTableData = function(tblName){
        tbl = localStorage.getItem(tblName);
        return tbl;
    };
    return{
        setData : setData,
        storeData : storeData,
        tblExists : tblExists,
        getTableData : getTableData,
        convertToObject : convertToObject
    };
})();
