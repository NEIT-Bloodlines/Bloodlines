/*
 * Developer: David Landi
 * Created: 3/6/16
 * Purpose: Provides functionality that allows you to store user input to local storage.
 * Usage:
 *      In order to use this you need to call the setters for each data type set to null 
 *      and pass in the field value. Then you can call getGameSettingsData() which returns 
 *      a json object represtening the preGame data.
 *  */

var PregameData = (function(){
    var name = '';
    var password = 'public';
    var numbPlayers = '';
    var turnTime = '';
    var type = 'public';
    var sirName = 'na';
    var title = '';
    var shield = '';
    var player1 = 'Host User';
    var player2 = 'na';
    var player3 = 'na';
    var player4 = 'na';
    var custMsg = 'You have been invited to join a private game. Please enter the password below when joining the game.';
    
    //Validates that required data types are not null
    function isValidData(){
        var data = [name, numbPlayers, turnTime, sirName, title, shield, player1, player2, player3, player4];
        for(i=0; i < data.length; i++){
            if(data[i] === ''){
                return false;
            }
        }
        return true;
    };
    
    //If data types are not null convert object to string and store in localstorage
    function storeGameSettingsData(){
        if(isValidData){
            //Defining a gameSettings object 
            var gameSettings = {
                'gameName' : name,
                'gamePassword' : password,
                'numberOfPlayers' : numbPlayers,
                'turnTime' : turnTime,
                'gameType' : type,
                'sirName' : sirName,
                'title' : title,
                'shield' : shield,
                'player1' : player1,
                'player2' : player2,
                'player3' : player3,
                'player4' : player4,
                'customMsg' : custMsg
            };
            console.log('Storing pregame data');
            localStorage.setItem('gameSettings', JSON.stringify(gameSettings));
        }
        else{console.log('Could not store pregame settings to local storage');}
    };
    
    //Returns gameSettings as a json object.
    var getGameSettingsData = function(){
        storeGameSettingsData();
        var data = localStorage.getItem('gameSettings');
        return JSON.parse(data);
    };
    
    var setGameName = function(txtvalue){
        name = txtvalue;
    };
    
    var setGamePassword = function(txtvalue){
        password = txtvalue;
    };
    
    var setNumberOfPlayers = function(txtvalue){
        numbPlayers = txtvalue;
    };
    
    var setTurnTime = function(txtvalue){
        turnTime = txtvalue;
    };
    var setGameType = function(txtvalue){
        type = txtvalue;
    };
    var setSirName = function(txtvalue){
        sirName = txtvalue;
    };
    var setTitle = function(txtvalue){
        title = txtvalue;
    };
    var setShields = function(txtvalue){
        shield = txtvalue;
    };
    var setPlayer1 = function(txtvalue){
        player1 = txtvalue;
    };
    var setPlayer2 = function(txtvalue){
        player2 = txtvalue;
    };
    
    var setPlayer3 = function(txtvalue){
        player3 = txtvalue;
    };
    
    var setPlayer4 = function(txtvalue){
        player4 = txtvalue;
    };
    var setCustomMsg = function(txtvalue){
        custMsg = txtvalue;
    };
    
    //Returns the public methods
    return{
        setCustomMsg : setCustomMsg,
        setPlayer4 : setPlayer4,
        setPlayer3 : setPlayer3,
        setPlayer2 : setPlayer2,
        setPlayer1 : setPlayer1,
        setShields : setShields,
        setTitle : setTitle,
        setSirName : setSirName,
        setGameType : setGameType,
        setTurnTime : setTurnTime,
        setNumberOfPlayers : setNumberOfPlayers,
        setGamePassword : setGamePassword,
        setGameName : setGameName,
        getGameSettingsData : getGameSettingsData
    }; 
})();
