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
    var btnPublicChatInfo = $('#btnPublicChatInfo');
    var btnMembersLoggedInInfo = $('#btnMembersLoggedInInfo');
    var mdlPublicChatInfo = $('#mdlPublicChatInfo');
    var mdlMembersLoggedInInfo = $('#mdlMembersLoggedInInfo');
    
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
            displayModal(helpModal);
        });
    };
    
    var onBtnManualModelClick = function(){
        btnManualModel.click(function(e){
            console.log('onBtnManualModelClick');
            e.preventDefault();
            displayModal(manualModel);
        });
    };
    
    var onBtnMembersLoggedInInfoClick = function(){
        btnMembersLoggedInInfo.click(function(e){
            console.log('onBtnManualModelClick');
            e.preventDefault();
            displayModal(mdlMembersLoggedInInfo);
        });
    };
    
    var onBtnPublicChatInfoClick = function(){
        btnPublicChatInfo.click(function(e){
            console.log('onBtnPublicChatInfoClick');
            e.preventDefault();
            displayModal(mdlPublicChatInfo);
        });
    };
    
    function displayModal(id){
        id.modal('show');
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
        onBtnManualModelClick : onBtnManualModelClick,
        onBtnMembersLoggedInInfoClick : onBtnMembersLoggedInInfoClick,
        onBtnPublicChatInfoClick : onBtnPublicChatInfoClick
    };
})();

//Join Game Events
JoinGameEventHandler = (function(){
    var btnEnterGame = $('#btnEnterGame');
    var btnBack = $('#btnBack');
    var btnNext = $('#btnNext');
    var progressBar = $('.progress-bar');
    var pnlSectionFamilyShield = $('#pnlSectionFamilyShield');
    var btnShield1 = $('#btnShield1');
    var btnShield2 = $('#btnShield2');
    var btnShield3 = $('#btnShield3');
    var btnShield4 = $('#btnShield4');
    var msgShieldSection = $('#msgShieldSection');
    var txtTitle = $('#txtTitle');
    var txtLogan = $('#txtLogan');
    var txtSirName = $('#txtSirName');
    var pnlSectionFamilyData = $('#pnlSectionFamilyData');
    var btnGamePassword = $('#btnGamePassword');
    var txtGamePassword = $('#txtGamePassword');
    var pnlSectionJoinGame = $('#pnlSectionJoinGame');
    var btnDisplayMdlJoinGames = $('#btnDisplayMdlJoinGames');
    var mdlJoinGames = $('#mdlJoinGames');
    var count = 1;
    
    var setJoinGameClickEvents = function(){
        onBtnBackClick();
        onBtnNextClick();
        onBtnShield1Click();
        onBtnShield2Click();
        onBtnShield3Click();
        onBtnShield4Click();
        onBtnDisplayMdlJoinGames();
        onBtnGamePassword();
        onBtnEnterGame();
    };
    
    function onBtnEnterGame(){
        btnEnterGame.click(function(e){
            console.log('onBtnEnterGame');
            e.preventDefault();
            //TODO: use javascript to navigate user to game page.
        });
    };
    
    function onBtnGamePassword(){
        btnGamePassword.click(function(e){
           console.log('onBtnGamePassword');
           e.preventDefault();
           var usrInput = txtGamePassword.val();
           //TODO: Check DB to see if Game id and password meet usr input
        });
    };
    
    function onBtnDisplayMdlJoinGames(){
        btnDisplayMdlJoinGames.click(function(e){
            console.log('onBtnDisplayMdlJoinGames');
            e.preventDefault();
            mdlJoinGames.show();
        });
    };
    
    function onBtnShield1Click(){
        btnShield1.click(function(e){
            console.log('onBtnShield1Click');
            e.preventDefault();
            //TODO: 
                // Add data to local stroage 
                // Update game table on server
        });
    };
    
    function onBtnShield2Click(){
        btnShield2.click(function(e){
            console.log('onBtnShield2Click');
            e.preventDefault();
            //TODO: 
                // Add data to local stroage 
                // Update game table on server
        });
    };
    
    function onBtnShield3Click(){
        btnShield3.click(function(e){
            console.log('onBtnShield3Click');
            e.preventDefault();
            //TODO: 
                // Add data to local stroage 
                // Update game table on server
        });
    };
    
    function onBtnShield4Click(){
        btnShield4.click(function(e){
            console.log('onBtnShield4Click');
            e.preventDefault();
            //TODO: 
                // Add data to local stroage 
                // Update game table on server
        });
    };
    
    function onBtnBackClick(){
        btnBack.click(function(e){
            console.log('onBtnBackClick');
            e.preventDefault();
            if(count > 1){
                count = count -1;
                displayPanelBody();
            }
        });
    };
    
    function onBtnNextClick(){
        btnNext.click(function(e){
            console.log('onBtnNextClick');
            e.preventDefault();
            if(count < 3){
                count = count + 1;
                displayPanelBody();
            }
            
        });
    };
    
    function displayPanelBody(){
        switch(count){
            case 1: 
                console.log(count);
                pnlSectionFamilyData.addClass('hidden');
                pnlSectionFamilyShield.addClass('hidden');
                pnlSectionJoinGame.removeClass('hidden');
                progressBar.css('width', '10%');
                btnEnterGame.addClass('hidden');
                btnNext.removeClass('hidden');
                break;
            case 2:
                console.log(count);
                pnlSectionFamilyShield.addClass('hidden');
                pnlSectionJoinGame.addClass('hidden');
                pnlSectionFamilyData.removeClass('hidden');
                progressBar.css('width', '50%');
                btnEnterGame.addClass('hidden');
                btnNext.removeClass('hidden');
                break;
            case 3:
                console.log(count);
                pnlSectionJoinGame.addClass('hidden');
                pnlSectionFamilyData.addClass('hidden');
                pnlSectionFamilyShield.removeClass('hidden');
                progressBar.css('width', '95%');
                btnNext.addClass('hidden');
                btnEnterGame.removeClass('hidden');
                break;
        }
    };

    return {setJoinGameClickEvents : setJoinGameClickEvents};
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
    $('#bgmusic').hide();
    PregameEvent.onBtnMembersLoggedInInfoClick();
    PregameEvent.onBtnPublicChatInfoClick();
    PregameEvent.onHostGameLinkClick();
    PregameEvent.onJoinGameLinkClick();
    PregameEvent.onLobbyLinkClick();
    PregameEvent.onBtnHelpModalClick();
    PregameEvent.onBtnManualModelClick();
    JoinGameEventHandler.setJoinGameClickEvents();
});