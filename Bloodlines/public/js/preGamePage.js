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
    
    var crv = ChatroomValidator;
    
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
            var fmsg = crv.executeFilters(msg);
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
    
    // Invite body
    var bdyInviteSelection = $('#bdyInviteSelection');
    var msgInviteSelection = $('#msgInviteSelection');
    var ddmSetInvite2 = $('#ddmSetInvite2');
    var ddmSetInvite3 = $('#ddmSetInvite3');
    var ddmSetInvite4 = $('#ddmSetInvite4');
    var txtPersonMsg = $('#txtPersonMsg');
    
    //Review body
    var bdyConfirmSetting = $('#bdyConfirmSetting');
    var msgConfirmSettings = $('#msgConfirmSettings');
    var gameSettingsData = $('#gameSettingsData');
    
    // Panel Footer
    var btnBackGO = $('#btnBackGO');
    var progressBarGO = $('#progressBarGO');
    var btnNextGO = $('#btnNextGO');
    var btnHostGame = $('#btnHostGame');
    
    var pgv = Validator;
    var pgd = PregameData;
    
    var setHostGameEventListeners = function(){
        onBtnNextClick();
        onBtnBackClick();
        onBtnDisplayMdlHostInfoClick();
        onBtnDisplayMdlReviewSubmitInfoClick();
        onBtnDisplayMdlMapSelectionClick();
        onBtnDisplayMdlInvitesClick();
    };
    
    function addCount(){
        if(count < 6){
            count = count + 1;
        }
    };
    
    function minusCount(){
        if(count > 1){
            count = count -1;
        }
    };
    
    function verifyDdmSetNumberOfPlayers(){
        console.log('verifyDdmSetNumberOfPlayers');
        var dfltOption = 'Set number of players';
        var usrInput = ddmSetNumberOfPlayers.val();
        if(pgv.verifyDropDownValueSelected(dfltOption, usrInput)){
            var error = 'Error: Number of players is not set.';
            PregameUtils.modifyPanelMessageToErrMsg(msgGameOptions, error);
        }
        pgd.setNumberOfPlayers(usrInput);
        return pgv.verifyDropDownValueSelected(dfltOption, usrInput);
    };
    
    function verifyDdmSetTurnTime(){
        console.log('verifyDdmSetTurnTime');
        var dfltOption = 'Set turn time';
        var usrInput = ddmSetTurnTime.val();
        if(pgv.verifyDropDownValueSelected(dfltOption, usrInput)){
            var error = 'Error: Turn time is not set.';
            PregameUtils.modifyPanelMessageToErrMsg(msgGameOptions, error);
        }
        pgd.setTurnTime(usrInput);
        return pgv.verifyDropDownValueSelected(dfltOption, usrInput);
    };
    
    function verifyDdmSetGameType(){
        console.log('verifyDdmSetGameType');
        var dfltOption = 'Set game type';
        var usrInput = ddmSetGameType.val();
        if(pgv.verifyDropDownValueSelected(dfltOption, usrInput)){
            var error = 'Error: Game type is not set.';
            PregameUtils.modifyPanelMessageToErrMsg(msgGameOptions, error);
        }
        pgd.setGameType(usrInput);
        return pgv.verifyDropDownValueSelected(dfltOption, usrInput);
    };
    
    function verifyGameOptionsDdms(){
        var testResults = [];
        
        testResults[0] = verifyDdmSetNumberOfPlayers();
        testResults[1] = verifyDdmSetTurnTime();
        testResults[2] = verifyDdmSetGameType();
        
        for(i=0; i < testResults.length; i++){
            if (testResults[i]){
                console.log('Test Failed');
                return false;
            }
        }
        var msg = 'All fields are valid.';
        PregameUtils.modifyPanelMessageToValidMsg(msgGameOptions, msg);
        return true;
    };
    
    function verifyTxtTitleGO(){
        console.log('verify txtTitle');
        if(pgv.executeFieldValidation(txtTitleGO)){
            var error = 'Error: Invalid game title.';
            PregameUtils.modifyPanelMessageToErrMsg(msgFamilyData, error);
            PregameUtils.clearField(txtTitleGO);
            return false;
        }
        pgd.setTitle(txtTitleGO.val());
        return true;
    };
    
    function verifyTxtSirNameGO(){
        console.log('verify txtSirName');
        if (pgv.executeFieldValidation(txtSirNameGO)){
            var error = 'Error: Invalid game title.';
            PregameUtils.modifyPanelMessageToErrMsg(msgFamilyData, error);
            PregameUtils.clearField(txtSirNameGO);
            return false;
        }
        pgd.setSirName(txtSirNameGO.val());
        return true;
    };
    
    function verifyTxtGameTitleGO(){
        console.log('verify txtGameTitle');
        if(pgv.executeFieldValidation(txtGameTitleGO)){
            var error = 'Error: Invalid game title.';
            PregameUtils.modifyPanelMessageToErrMsg(msgGameDesc, error);
            PregameUtils.clearField(txtGameTitleGO);
            return false;
        }
        pgd.setGameName(txtGameTitleGO.val());
        return true;
    };
    
    function verifyTxtGamePasswordGO(){
        console.log('verify txtGamePassword');
        usrInput = txtGamePasswordGO.val();
        
        if(usrInput === ''){txtGamePasswordGO.val('public');}
        if(pgv.executeFieldValidation(txtGamePasswordGO)){
            var error = 'Error: Invalid game password';
            PregameUtils.modifyPanelMessageToErrMsg(msgGameDesc, error);
            PregameUtils.clearField(txtGamePasswordGO);
            return false;
        }
        pgd.setGamePassword(txtGamePasswordGO.val());
        return true;
    };
    
    function displayNextButton(){
        if(count <= 5){
            btnNextGO.removeClass('hidden');
        }
        else{btnNextGO.addClass('hidden');}
    };
    
    function displayHostButton(){
        if(count === 6 ){
            btnHostGame.removeClass('hidden');
        }
        else{btnHostGame.addClass('hidden');}
    };
    
    function displayInviteDropdowns(){
       var numbPlayers = ddmSetNumberOfPlayers.val();
       
       switch(numbPlayers){
           case '2 players' : 
               ddmSetInvite4.addClass('hidden');
               ddmSetInvite3.addClass('hidden');
               ddmSetInvite2.removeClass('hidden');
               break;
           case '3 players' :
               ddmSetInvite4.addClass('hidden');
               ddmSetInvite3.removeClass('hidden');
               ddmSetInvite2.removeClass('hidden');
               break;
           case '4 players' :
               ddmSetInvite4.removeClass('hidden');
               ddmSetInvite3.removeClass('hidden');
               ddmSetInvite2.removeClass('hidden');
               break;
       }
    };
    
    function displayBodyInviteSelection(){
        if(count === 5){
            console.log('display pnl body 5');
            displayInviteDropdowns();
            bdyGameOptions.addClass('hidden');
            bdyFamilyData.addClass('hidden');
            bdyGameDesc.addClass('hidden');
            bdyConfirmSetting.addClass('hidden');
            bdyShieldSelection.addClass('hidden');
            bdyInviteSelection.removeClass('hidden');
            progressBarGO.css('width', '80%');
            return true;
        }
        return false;
    };
    
    function displayBodyConfirmSettings(){
        if(count === 6){
            console.log('display pnl body 6');
            generateSettingsData();
            bdyGameOptions.addClass('hidden');
            bdyFamilyData.addClass('hidden');
            bdyInviteSelection.addClass('hidden');
            bdyGameDesc.addClass('hidden');
            bdyShieldSelection.addClass('hidden');
            bdyConfirmSetting.removeClass('hidden'); 
            progressBarGO.css('width', '95%');
            return true;
        }
        return false;
    };
    
    function generateSettingsData(){
        var data = pgd.getGameSettingsData();
        $(gameSettingsData).html(
                '<p>Game Name: ' + data.gameName + '<br>' +
                'Password: ' + data.gamePassword + '<br>' +
                'Number of players: ' + data.numberOfPlayers + '<br>' +
                'Turn Time: ' + data.turnTime + '<br>' +
                'Sir name: ' + data.sirName + '<br>' +
                'Shield: ' + data.shield + '<br>' +
                'Player1: ' + data.player1 + '<br>' +
                'Player2: ' + data.player2 + '<br>' +
                'Player3: ' + data.player3 + '<br>' +
                'Player4: ' + data.player4 + '<br>' +
                'Invite Message: ' + data.customMsg + '</p>'
                );
        
    };
    
    function displayBodyGameDescription(){
        if(count === 1){
            console.log('display pnl body 1');
            bdyGameOptions.addClass('hidden');
            bdyFamilyData.addClass('hidden');
            bdyInviteSelection.addClass('hidden');
            bdyConfirmSetting.addClass('hidden');
            bdyShieldSelection.addClass('hidden');
            bdyGameDesc.removeClass('hidden');
            progressBarGO.css('width', '10%');
            return true;
        }
        return false;
    };
    
    function displayBodyGameOptions(){
        if(count === 2 && verifyTxtGameTitleGO() === true && verifyTxtGamePasswordGO() === true){
            console.log('display pnl body 3');
            bdyGameDesc.addClass('hidden');
            bdyInviteSelection.addClass('hidden');
            bdyConfirmSetting.addClass('hidden');
            bdyFamilyData.addClass('hidden');
            bdyShieldSelection.addClass('hidden');
            bdyGameOptions.removeClass('hidden');
            progressBarGO.css('width', '30%');
            return true;
        }
        return false;
    };
    
    function displayBodyFamilyData(){
        if(count === 3 && verifyGameOptionsDdms() === true){
            console.log('display pnl body 4');
            bdyGameDesc.addClass('hidden');
            bdyInviteSelection.addClass('hidden');
            bdyConfirmSetting.addClass('hidden');
            bdyGameOptions.addClass('hidden');
            bdyShieldSelection.addClass('hidden');
            bdyFamilyData.removeClass('hidden');
            progressBarGO.css('width', '50%');
            return true;
        }
    };
    
    function displayBodyFamilyShield(){
        if(count === 4 && verifyTxtSirNameGO() === true && verifyTxtTitleGO() === true){
            console.log('bdyShieldSelection is valid');
            bdyGameDesc.addClass('hidden');
            bdyInviteSelection.addClass('hidden');
            bdyConfirmSetting.addClass('hidden');
            bdyGameOptions.addClass('hidden');
            bdyFamilyData.addClass('hidden');
            bdyShieldSelection.removeClass('hidden');
            progressBarGO.css('width', '70%');
            return true;
        }
        return false;
    };
    
    function onBtnNextClick(){
        btnNextGO.click(function(e){
            console.log('onBtnNextClick');
            e.preventDefault(); 
            addCount();
            displayNextButton();
            displayHostButton();
            displayBodyGameDescription();
            displayBodyGameOptions();
            displayBodyFamilyData();
            displayBodyFamilyShield();
            displayBodyInviteSelection();
            displayBodyConfirmSettings();         
        });
    };
    
    function onBtnBackClick(){
        btnBackGO.click(function(e){
            console.log('onBtnBackClick');
            e.preventDefault();
            minusCount();
            displayNextButton();
            displayHostButton();
            displayBodyGameDescription();
            displayBodyGameOptions();
            displayBodyFamilyData();
            displayBodyFamilyShield();
            displayBodyInviteSelection();
            displayBodyConfirmSettings();
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
        msgID.removeClass('alert-success');
        msgID.addClass('alert-danger');
        msgID.children('p').text(msg);
    };
    
    var modifyPanelMessageToValidMsg = function(msgID, msg){
        msgID.removeClass('alert-danger');
        msgID.addClass('alert-success');
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
        modifyPanelMessageToValidMsg : modifyPanelMessageToValidMsg,
        clearField : clearField,
        displayModal : displayModal
    };
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