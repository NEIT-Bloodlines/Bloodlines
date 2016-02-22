/*
 * Developer: David Landi
 * Created: 2/20/16
 * Purpose: JS for preGame page.
 * Modifed by: (Name, Reason, Date)
 *  */

//Object that contains event listeners for Pregame page.
var PregameEvent = (function(){
    var btnSendChatText = $('#btnSendChatText');
    var txtChatText = $('#txtChatText');
    var lobbySection = $('#lobby');
    var joinGameSection = $('#joinGame');
    var hostSection = $('#hostGame');
    var lobbyLink = $('#lobbyLink');
    var joinGameLink = $('#joinGameLink');
    var hostGameLink = $('#hostGameLink');
    var helpModal = $('#helpModal');
    var manualModel = $('#manualModel');
    var btnManualModel = $('#btnManualModel');
    var btnHelpModal = $('#btnHelpModal');
    
    var onLobbyLinkClick = function(){
        lobbyLink.click(function(e){
            console.log('onLobbyLinkClick');
            e.preventDefault();
            displayLobbySection();
        });
        
    };
    
    var onHostGameLinkClick = function(){
        hostGameLink.click(function(e){
            console.log('onHostGameLinkClick');
            e.preventDefault();
            displayHostGameSection();
        });
    };
    
    var onJoinGameLinkClick = function(){
        joinGameLink.click(function(e){
            console.log('onJoinGameLinkClick');
            e.preventDefault();
            displayJoinGameSection();
        });
    };
    
    var onBtnHelpModalClick = function(){
        btnHelpModal.click(function(e){
            console.log('onBtnHelpModalClick');
            e.preventDefault();
            displayHelpModal();
        });
    };
    
    var onBtnManualModelClick = function(){
        btnManualModel.click(function(e){
            console.log('onBtnManualModelClick');
            e.preventDefault();
            displayManualModal();
        });
    };
    
    function displayHelpModal(){
        helpModal.modal('show');
    };
    
    function displayManualModal(){
        manualModel.modal('show');
    };

    function displayLobbySection(){
        hostSection.addClass('hidden');
        joinGameSection.addClass('hidden');
        lobbySection.removeClass('hidden');
    };
    
    function displayJoinGameSection(){
        lobbySection.addClass('hidden');
        hostSection.addClass('hidden');
        joinGameSection.removeClass('hidden');
    };
    
    function displayHostGameSection(){
        lobbySection.addClass('hidden');
        joinGameSection.addClass('hidden');
        hostSection.removeClass('hidden');
    };
    
    //To set this event listener you must pass in a chatroom object.
    //It will then fire the send method from the chatroomController.js
    //which uses ajax to call its send method from chatroomHandler.php.
    var OnBtnSendChatTextClick = function(chatroomObject, name){
        btnSendChatText.click(function(){
            console.log('Fire OnBtnSendChatTextClick');
            var msg = txtChatText.val();
            var fmsg = ChatroomValidator.executeFilters(msg);
            chatroomObject.send(fmsg, name);
            clearTxtChatText();
        });
    };
    
    function clearTxtChatText(){
        txtChatText.val("");
    };
    return{
        OnBtnSendChatTextClick : OnBtnSendChatTextClick,
        onLobbyLinkClick : onLobbyLinkClick,
        onHostGameLinkClick : onHostGameLinkClick,
        onJoinGameLinkClick : onJoinGameLinkClick,
        onBtnHelpModalClick : onBtnHelpModalClick,
        onBtnManualModelClick : onBtnManualModelClick
    };
})();

//Object that contains validation methods for chatrooms
var ChatroomValidator = (function(){
    
    //public method that executes all filters for a given usermessage
    //returns a filterd string
    var executeFilters = function(txtmsg){
        console.log('Fire executeFilters');
        var m;
        m = filterProfanity(txtmsg);
        m = filterHtmlTags(m);
        m = filterNullMsg(m);
        return m;
    };
    function filterHtmlTags(msg){
        return msg.replace(/(<([^>]+)>)/ig,"");
    };
    
    function filterNullMsg(msg){
        if(msg.length < 1){
            return 'I guess im to lazy to enter text?';
        }
        return msg;
    };
    
    //If you want to add additional words to be removed from usermsg add the 
    //word to the profanity array.
    //This method will return the msg replacing any profanity with #### 
    function filterProfanity(txtmsg){
        txtmsg;
        var lowertxtmsg = txtmsg.toLowerCase();
        var profanity = ["fuck", "shit", "bitch", 
            "cunt", "fucking", "fuckyou", "gay", "retard", "retarted", "function"];
        for(var i=0; i < profanity.length; i++){
            lowertxtmsg = lowertxtmsg.replace(profanity[i], "####");
        }
        return lowertxtmsg;
    };
    return{executeFilters : executeFilters};
})();

$( document ).ready(function(){
    PregameEvent.onHostGameLinkClick();
    PregameEvent.onJoinGameLinkClick();
    PregameEvent.onLobbyLinkClick();
    PregameEvent.onBtnHelpModalClick();
    PregameEvent.onBtnManualModelClick();
});