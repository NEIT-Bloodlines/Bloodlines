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

var HostGameEventHandler = (function(){
    var count = 1;
    
    //Panel modals
    var btnDisplayMdlHostInfo = $('#btnDisplayMdlHostInfo');
    var btnDisplayMdlInviteInfo = $('#btnDisplayMdlInviteInfo');
    var btnDisplayMdlMapSelection = $('#btnDisplayMdlMapSelection');
    var btnDisplayMdlReviewSubmitInfo = $('#btnDisplayReviewSubmitInfo');
    var mdlHostInfo = $('#mdlHostInfo');
    var mdlInviteInfo = $('#mdlInviteInfo');
    var mdlMapSelection = $('#mdlMapSelection');
    var mdlReviewSubmitInfo = $('#mdlReviewSubmitInfo');
    
    // Game Desc body
    var bdyGameDesc = $('#bdyGameDesc');
    var msgGameDesc = $('#msgGameDesc');
    var txtGameTitleGO = $('#txtGameTitleGO');
    var txtGamePasswordGO = $('#txtGamePasswordGO');
    
    // Game Options body
    var bdyGameOptions = $('#bdyGameOptions');
    var msgGameOptions = $('#msgGameOptions');
    var ddmSetNumberOfPlayers = $('#ddmSetNumberOfPlayers');
    var ddmSetTurnTime = $('#ddmSetTurnTime');
    var ddmSetGameType = $('#ddmSetGameType');
    
    // Family Data body
    var bdyFamilyData = $('#bdyFamilyData');
    var msgFamilyData = $('#msgFamilyData');
    var txtSirNameGO = $('#txtSirNameGO');
    var txtTitleGO = $('#txtTitleGO');
    
    // Shield Selection body
    var bdyShieldSelection = $('#bdyShieldSelection');
    var msgShieldSelection = $('#msgShieldSelection');
    var btnShield1GO = $('#btnShield1GO');
    var btnShield2GO = $('#btnShield2GO');
    var btnShield3GO = $('#btnShield3GO');
    var btnShield4GO = $('#btnShield4GO');
    
    // Panel Footer
    var btnBackGO = $('#btnBackGO');
    var progressBarGO = $('#progressBarGO');
    var btnNextGO = $('#btnNextGO');
    
    var setHostGameEventListeners = function(){
        onBtnNextClick();
        onBtnBackClick();
        onBtnDisplayMdlHostInfoClick();
        onBtnDisplayMdlReviewSubmitInfoClick();
        onBtnDisplayMdlMapSelectionClick();
        onBtnDisplayMdlInvitesClick();
    };
    
    function addCount(){
        if(count < 4){
            count = count + 1;
        }
    };
    
    function minusCount(){
        if(count > 1){
            count = count -1;
        }
    };
    
    function verifyTxtTitleGO(){
        console.log('verify txtTitle');
        if(PregameValidation.executeFieldValidation(txtTitleGO)){
            var error = 'Error: Invalid game title.';
            PregameUtils.modifyPanelMessageToErrMsg(msgFamilyData, error);
            PregameUtils.clearField(txtTitleGO);
            return false;
        }
        return true;
    };
    
    function verifyTxtSirNameGO(){
        console.log('verify txtSirName');
        if (PregameValidation.executeFieldValidation(txtSirNameGO)){
            var error = 'Error: Invalid game title.';
            PregameUtils.modifyPanelMessageToErrMsg(msgFamilyData, error);
            PregameUtils.clearField(txtSirNameGO);
            return false;
        }
        return true;
    };
    
    function verifyTxtGameTitleGO(){
        console.log('verify txtGameTitle');
        if(PregameValidation.executeFieldValidation(txtGameTitleGO)){
            var error = 'Error: Invalid game title.';
            PregameUtils.modifyPanelMessageToErrMsg(msgGameDesc, error);
            PregameUtils.clearField(txtGameTitleGO);
            return false;
        }
        return true;
    };
    
    function verifyTxtGamePasswordGO(){
        console.log('verify txtGamePassword');
        if(PregameValidation.executeFieldValidation(txtGamePasswordGO)){
            var error = 'Error: Invalid game password';
            PregameUtils.modifyPanelMessageToErrMsg(msgGameDesc, error);
            PregameUtils.clearField(txtGamePasswordGO);
            return false;
        }
        return true;
    };
    
    function displayPanelBody(isAdd){
        if(isAdd){addCount();}
        else{minusCount();}
        switch(count){
            case 1:
                minusCount();
                displayBodyGameDescription();
                progressBarGO.css('width', '10%');
                break;
            case 2:
                if(verifyTxtGameTitleGO() === true && verifyTxtGamePasswordGO() === true){
                    displayBodyGameOptions();
                    progressBarGO.css('width', '50%');
                }
                 break;
            case 3:
                displayBodyFamilyData();  
                progressBarGO.css('width', '75%');
                break;
            case 4:
                if(verifyTxtSirNameGO() === true && verifyTxtTitleGO() === true){
                    displayBodyFamilyShield();
                    progressBarGO.css('width', '95%');
                }
                break;
        }
    };
    
    function displayBodyGameDescription(){
        console.log('bdyGameDesc is valid');
        bdyGameOptions.addClass('hidden');
        bdyFamilyData.addClass('hidden');
        bdyShieldSelection.addClass('hidden');
        bdyGameDesc.removeClass('hidden');
    };
    
    function displayBodyGameOptions(){
        console.log('bdyGameOptions is valid');
        bdyGameDesc.addClass('hidden');
        bdyFamilyData.addClass('hidden');
        bdyShieldSelection.addClass('hidden');
        bdyGameOptions.removeClass('hidden');
    };
    
    function displayBodyFamilyData(){
        console.log('bdyFamilyData is valid');
        bdyGameDesc.addClass('hidden');
        bdyGameOptions.addClass('hidden');
        bdyShieldSelection.addClass('hidden');
        bdyFamilyData.removeClass('hidden');
    };
    
    function displayBodyFamilyShield(){
        console.log('bdyShieldSelection is valid');
        bdyGameDesc.addClass('hidden');
        bdyGameOptions.addClass('hidden');
        bdyFamilyData.addClass('hidden');
        bdyShieldSelection.removeClass('hidden');
    };
    
    function onBtnNextClick(){
        btnNextGO.click(function(e){
            console.log('onBtnNextClick');
            e.preventDefault(); 
            if(displayPanelBody(true) === false && count > 1){minusCount();}          
        });
    };
    
    function onBtnBackClick(){
        btnBackGO.click(function(e){
            console.log('onBtnBackClick');
            e.preventDefault();
            minusCount();
            if(displayPanelBody(false) === false){addCount();}
        });
    };
    
    function onBtnDisplayMdlHostInfoClick(){
        PregameUtils.displayModal(btnDisplayMdlHostInfo, mdlHostInfo);
    };
    
    function onBtnDisplayMdlReviewSubmitInfoClick(){
        PregameUtils.displayModal(btnDisplayMdlReviewSubmitInfo, 
            mdlReviewSubmitInfo);
    };
    
    function onBtnDisplayMdlMapSelectionClick(){
        PregameUtils.displayModal(btnDisplayMdlMapSelection, mdlMapSelection);
    };
    
    function onBtnDisplayMdlInvitesClick(){
        PregameUtils.displayModal(btnDisplayMdlInviteInfo, mdlInviteInfo);
    };
    
    return{setHostGameEventListeners : setHostGameEventListeners};
    
})();

var PregameUtils = (function(){
    var modifyPanelMessageToErrMsg = function(msgID, msg){
        console.log('modify error msg' + msg);
        msgID.removeClass('alert-success');
        msgID.addClass('alert-danger');
        msgID.children('p').text(msg);
    };
    
    var displayModal = function(btnID, modalID){
        btnID.click(function(e){
            console.log('modalClickEvent');
            e.preventDefault();
            modalID.show();
        });
    };
    
    var clearField = function(fieldID){
        fieldID.val('');
    };
    return{
        modifyPanelMessageToErrMsg : modifyPanelMessageToErrMsg,
        clearField : clearField,
        displayModal : displayModal
    };
})();

/*Obj for validating fields. To use call the public method executeFieldValidation
 * and pass in the fields id.  This method will run all of the validiton functions
 * for fields.  It will return true if a field is invalid.*/
var PregameValidation = (function(){
    var fieldID = '';
    
    var executeFieldValidation = function(id){
        fieldID = id;
        console.log(fieldID);
        isNotValid = false;
        
        while(!isNotValid){
            isNotValid = fieldIsNull();
            isNotValid = fieldContainsHtml();
            isNotValid = fieldContainsProfanity();
            break;
        }
        return isNotValid;
    };
    
    function fieldContainsHtml(){
        var regx = '/(<([^>]+)>)/ig';
        var txt = fieldID.val();
        if(regx.match(txt)){
            return true;
        }
    };
    
    function fieldIsNull(){
        if (fieldID.length < 1){
            console.log(fieldID.length);
            return true;
        }
    };
    
    function fieldContainsProfanity(){
        console.log('checked');
        var hasProfanity = false;
        
        var lowertxtmsg = fieldID.val().toLowerCase();
        var profanity = ["fuck", "shit", "bitch", 
            "cunt", "fucking", "fuckyou", "gay", "retard", "retarted", "function"];
        for(var i=0; i < profanity.length; i++){
            var regx = profanity[i];
            if(regx.match(lowertxtmsg)){return true;}
        }
    };
    return{executeFieldValidation : executeFieldValidation};
})();
//Join Game Events
var JoinGameEventHandler = (function(){
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
    HostGameEventHandler.setHostGameEventListeners();
});