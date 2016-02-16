/*
 * Developer: David Landi
 * Created: 1/31/16
 * Purpose: JS for authentication page.
 * Modifed by: (Name, Reason, Date)
 *  */

 
 /*
	Purpose:
		Modual to display modals
*/
var AuthModelHandler = (function(){
    var mdlMemberHelp = $('#member_login_help_popup');
    var mdlNewMemberHelp = $('#new_member_help_popup');
    var btnMemberHelp = $('#btn_member_help');
    var btnNewMemberHelp = $('#btn_signup_help');

    var onBtnMemberHelpClick = function(){
        btnMemberHelp.click(function(){
            console.log('btnMemberHelp.click');
            mdlMemberHelp.modal('show');
        });
    };

    var onBtnmdlNewMemberHelpClick = function(){
        btnNewMemberHelp.click(function(){
            console.log('btnNewMemberHelp.click');
            mdlNewMemberHelp.modal('show');
        });
    };

    return{
        onBtnMemberHelpClick : onBtnMemberHelpClick,
        onBtnmdlNewMemberHelpClick : onBtnmdlNewMemberHelpClick
    };
})();

/*
	Purpose:
		Modual to handel login and sign up control events.
	Features:
		- Error message displaying
		- Basic Txt field validation
		- Stores username and password in local stroage and auto fills when user returns.
*/
var AuthControlsHandler = (function(){
	var msgWelcome = $('#alertWelcome');
	var msgLoginFailUsr = $('#alertLoginUrsInvaild');
	var msgLoginFailPsw = $('#alertLoginPasswordInvalid');
	var msgNullUsrName = $('#alertTxtUsrIsNull');
	var msgNullPassword = $('#alertTxtPswIsNull');
	var msgNullBoth = $('#alertTxtIsBothNull');
	var txtUserName = $('#txtUserName');
	var txtPassword = $('#txtPassword');
	var btnMemberLogin = $('#btnMemberLogin');
	var chkRememberMe = $('#chkRememberMe');
	var btnSignUp = $('#btnSignUp');
	var txtSUpswConf = $('#txtSUpswConf');
	var txtSUpsw = $('#txtSUpsw');
	var txtSUemail = $('#txtSUemail');
	var txtSUname = $('#txtSUname');
	var alertwelcomeSU = $('#alertwelcomeSU');
	var alertTxtNameNullSU = $('#alertTxtNameNullSU');
	var alertTxtEmailNullSU = $('#alertTxtEmailNullSU');
	var alertTxtPswNullSU = $('#alertTxtPswNullSU');
	var alertTxtpswConfNullSU = $('#alertTxtpswConfNullSU');
	var alertMoreThanOneNullSU = $('#alertMoreThanOneNullSU');
	var alertPswFieldsNotMatch = $('#alertPswFieldsNotMatch');
	
	
	var onBtnMemberLoginClick = function(){
		btnMemberLogin.click(function(e){
			console.log('btnMemberLogin');
			e.preventDefault();
			displayMsgNullUsrName();
			displayMsgNullPassword();
			displayMsgNullBoth();
			rememberMeIsChecked();
		});
	};
	
	var onBtnSignUpClick = function(){
		btnSignUp.click(function(e){
			console.log('btnSignUp');
			e.preventDefault();
			displayAlertMoreThanOneNullSU();
			displayAlertPswFieldsNotMatch();
			displaylertTxtpswConfNullSU();
			displayAlertTxtPswNullSU();
			displayAlertTxtEmailNullSU();
			displayAlertTxtNameNullSU();
		});
	};
	
	function displayAlertPswFieldsNotMatch(){
		if(isPasswordFieldsAmatch()){
 			alertwelcomeSU.addClass('hidden');
			alertPswFieldsNotMatch.removeClass('hidden');
		}
		else{alertPswFieldsNotMatch.addClass('hidden');}
	};
	
	function displayAlertMoreThanOneNullSU(){
		if(totalNull() >= 0){
			alertwelcomeSU.addClass('hidden');
			alertMoreThanOneNullSU.removeClass('hidden');
		}
		else{alertMoreThanOneNullSU.addClass('hidden');}
	};
	
	function displaylertTxtpswConfNullSU(){
		if(isInputFieldNull(txtSUpswConf)){
			alertwelcomeSU.addClass('hidden');
			alertTxtpswConfNullSU.removeClass('hidden');
		}
		else{alertTxtpswConfNullSU.addClass('hidden');}
	};
	
	function displayAlertTxtPswNullSU(){
		if(isInputFieldNull(txtSUpsw)){
			alertwelcomeSU.addClass('hidden');
			alertTxtPswNullSU.removeClass('hidden');
		}
		else{alertTxtPswNullSU.addClass('hidden');}
	};
	
	function displayAlertTxtEmailNullSU(){
		if(isInputFieldNull(txtSUemail)){
 			alertwelcomeSU.addClass('hidden');
			alertTxtEmailNullSU.removeClass('hidden');
		}
		else{alertTxtEmailNullSU.addClass('hidden');}
	};
	
	function displayAlertTxtNameNullSU(){
		if(isInputFieldNull(txtSUname)){
			alertwelcomeSU.addClass('hidden');
			alertTxtNameNullSU.removeClass('hidden');
		}
		else{alertTxtNameNullSU.addClass('hidden');}
	};
	
	function isInputFieldNull(fieldID){
		var inputValue = fieldID.val();
		var inputLength = inputValue.length;
		
		if(inputLength < 1){
			return true;
		}
		return false;
	};
	function isPasswordFieldsAmatch(){
		var pswValue = txtSUpsw.text();
		var pswConfVal = txtSUpswConf.text();
		if(pswValue === pswConfVal){
			console.log('psw does match');
			return true;
		}
		return false;
	};
	
	function totalNull(){
		var count = 0;
		if(isInputFieldNull(txtSUname)){
			count++;
		}
		if(isInputFieldNull(txtSUpswConf)){
			count++;
		}
		if(isInputFieldNull(txtSUpsw)){
			count++;
		}
		if(isInputFieldNull(txtSUemail)){
			count++;
		}
		
		console.log(count + ' null fields')
		return count;
	};
	
	var setNamePasswordFromLocalStorage = function(){
		txtUserName.val(getDataFromLocalStorage('username'));
		txtPassword.val(getDataFromLocalStorage('password'));
	};
	
	function getDataFromLocalStorage(key){
		return localStorage.getItem(key);
	};
	
	function clearLocalStorage(key){
		localStorage.removeItem(key);
	};
	
	function rememberMeIsChecked(){
		if(chkRememberMe.is(':checked')){
			console.log('rememberMeIsChecked');
			clearLocalStorage('username');
			clearLocalStorage('password');
			if(isTxtUserNameNull() != true){
				var usrName = txtUserName.val();
				console.log(usrName);
				localStorage.setItem("username", usrName);
			}
			if(isTxtPasswordNull() != true){
				var usrPassword = txtPassword.val();
				console.log(usrPassword);
				localStorage.setItem("password", usrPassword);
			}
		}
	};
	
	function displayMsgLoginFailUsr(){
		msgWelcome.addClass('hidden');
		msgNullBoth.addClass('hidden');
		msgNullUsrName.addClass('hidden');
		msgLoginFailPsw.addClass('hidden');
		msgNullPassword.addClass('hidden');
		msgLoginFailUsr.removeClass('hidden');
	};
	
	function displayMsgNullUsrName(){
		console.log('displayMsgNullUsrName');
		if(isTxtUserNameNull()){
			msgWelcome.addClass('hidden');
			msgLoginFailUsr.addClass('hidden');
			msgNullBoth.addClass('hidden');
			msgLoginFailPsw.addClass('hidden');
			msgNullPassword.addClass('hidden');
			msgNullUsrName.removeClass('hidden');
		}
	};
	
	function displayMsgNullPassword(){
		console.log('displayMsgNullPassword');
		if(isTxtPasswordNull()){
			msgWelcome.addClass('hidden');
			msgLoginFailUsr.addClass('hidden');
			msgNullBoth.addClass('hidden');
			msgLoginFailPsw.addClass('hidden');
			msgNullUsrName.addClass('hidden');
			msgNullPassword.removeClass('hidden');
		}
	};
	
	function displayMsgLoginFailPsw(){
		console.log('displayMsgLoginFailPsw');
		msgWelcome.addClass('hidden');
		msgLoginFailUsr.addClass('hidden');
		msgNullBoth.addClass('hidden');
		msgNullPassword.addClass('hidden');
		msgNullUsrName.addClass('hidden');
		msgLoginFailPsw.removeClass('hidden');
	};
	
	function displayMsgNullBoth(){
		console.log('displayMsgNullBoth');
		if(isTxtUserNameNull() && isTxtPasswordNull()){
			msgWelcome.addClass('hidden');
			msgLoginFailUsr.addClass('hidden');
			msgNullPassword.addClass('hidden');
			msgLoginFailPsw.addClass('hidden');
			msgNullUsrName.addClass('hidden');
			msgNullBoth.removeClass('hidden');
		}
	};
	
	function isTxtUserNameNull(){
		var inputValue = txtUserName.val();
		var inputLength = inputValue.length;
		
		if(inputLength < 1){
			return true;
		}
		return false;
	};
	
	function isTxtPasswordNull(){
		var inputValue = txtPassword.val();
		var inputLength = inputValue.length;
		
		if(inputLength < 1){
			return true;
		}
		return false;
	};
	
	return{
		onBtnMemberLoginClick : onBtnMemberLoginClick,
		setNamePasswordFromLocalStorage : setNamePasswordFromLocalStorage,
		onBtnSignUpClick : onBtnSignUpClick
	};
	
})();

/*
	Purpose:
		Modual to handel which form is displayed.
	Features:
		- Shows and hides login and signup forms
*/
var FormDisplayer = (function(){
    var frmLogin = $('#member_login');
    var frmSignUp = $('#member_signup');
    var lnkLogin = $('#login_link');
    var lnkSignup = $('#signup_link');

    var onLnkLoginClick = function(){
        lnkLogin.click(function(e){
            e.preventDefault();
            console.log('lnkLogin.click');
            frmSignUp.addClass('hidden');
            frmLogin.removeClass('hidden');
        });
    };

    var onLnkSignupClick = function(){
        lnkSignup.click(function(e){
            e.preventDefault();
            console.log('lnkSignup.click');
            frmSignUp.removeClass('hidden');
            frmLogin.addClass('hidden');
        });
    };
    return{
        onLnkLoginClick : onLnkLoginClick,
        onLnkSignupClick : onLnkSignupClick
    };
})();

//On page load Runner
$( document ).ready(function(){
	AuthControlsHandler.setNamePasswordFromLocalStorage();
    FormDisplayer.onLnkLoginClick();
    FormDisplayer.onLnkSignupClick();
    AuthModelHandler.onBtnMemberHelpClick();
    AuthModelHandler.onBtnmdlNewMemberHelpClick();
	AuthControlsHandler.onBtnMemberLoginClick();
	AuthControlsHandler.onBtnSignUpClick();
});
