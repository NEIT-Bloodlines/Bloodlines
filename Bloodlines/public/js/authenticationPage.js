/*
 * Developer: David Landi
 * Created: 1/31/16
 * Purpose: JS for authentication page.
 * Modifed by: (Name, Reason, Date)
 *  */

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

$( document ).ready(function(){
    FormDisplayer.onLnkLoginClick();
    FormDisplayer.onLnkSignupClick();
    AuthModelHandler.onBtnMemberHelpClick();
    AuthModelHandler.onBtnmdlNewMemberHelpClick();
});
