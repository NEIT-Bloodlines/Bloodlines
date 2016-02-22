/*
 * Developer: David Landi
 * Created: 2/18/16
 * Purpose: JS for home page.
 * Modifed by: (Name, Reason, Date)
 *  */

//Object that contains methods for handeling modal events
var ModalHandler = (function(){
    var ss1FullView = $('#ss1FullView');
    var ss2FullView = $('#ss2FullView');
    var ss3FullView = $('#ss3FullView');
    var ss4FullView = $('#ss4FullView');
    var ss5FullView = $('#ss5FullView');
    var ss6FullView = $('#ss6FullView');
    var btnSs1FullView = $('#btnSs1FullView');
    var btnSs2FullView = $('#btnSs2FullView');
    var btnSs3FullView = $('#btnSs3FullView');
    var btnSs4FullView = $('#btnSs4FullView');
    var btnSs5FullView = $('#btnSs5FullView');
    var btnSs6FullView = $('#btnSs6FullView');
    var btnNpEmail = $('#btnNpEmail');
    var btnDlEmail = $('#btnDlEmail');
    var btnJbEmail = $('#btnDlEmail');
    var mdlNpEmail = $('#npEmail');
    var mdlDlEmail = $('#dlEmail');
    var mdlJbEmail = $('#jbEmail');
    var btnNpCode = $('#btnNpcode');
    var btnDlCode = $('#btnDlcode');
    var btnJbCode = $('#btnJbCode');
    var mdlNpCode = $('#npCode');
    var mdlDlCode = $('#dlCode');
    var mdlJbCode = $('#jbCode');
    var btnNpSummary = $('#btnNpSummary');
    var btnDlSummary = $('#btnDlSummary');
    var btnJbSummary = $('#btnJbSummary');
    var mdlNpSummary = $('#npSummary');
    var mdlDlSummary = $('#dlSummary');
    var mdlJbSummary = $('#jbSummary');
    
    var setModalEventListeners = function(){
        btnSs1FullViewClick();
        btnSs2FullViewClick();
        btnSs3FullViewClick();
        btnSs4FullViewClick();
        btnSs5FullViewClick();
        btnSs6FullViewClick();
        btnSs1FullViewHover();
        btnNpEmailClick();
        btnDlEmailClick();
        btnJbEmailClick();
        btnNpCodeClick();
        btnDlCodeClick();
        btnJbCodeClick();
        btnNpSummaryClick();
        btnDlSummaryClick();
        btnJbSummaryClick();
    };
    
    function btnNpSummaryClick(){
        btnNpSummary.click(function(e){
            console.log('btnNpSummaryClick');
            e.preventDefault();
            mdlNpSummary.show();
        });
    };
    
    function btnDlSummaryClick(){
        btnDlSummary.click(function(e){
            console.log('btnDlSummaryClick');
            e.preventDefault();
            mdlDlSummary.show();
        });
    };
    
    function btnJbSummaryClick(){
        btnJbSummary.click(function(e){
            console.log('btnJbSummaryClick');
            e.preventDefault();
            mdlJbSummary.show();
        });
    };
    
    function btnNpCodeClick(){
        btnNpCode.click(function(e){
            console.log('btnNpCodeClick');
            e.preventDefault();
            mdlNpCode.show();
        });
    };
    
    function btnDlCodeClick(){
        btnDlCode.click(function(e){
            console.log('btnDlCodeClick');
            e.preventDefault();
            mdlDlCode.show();
        });
    };
    
    function btnJbCodeClick(){
        btnJbCode.click(function(e){
            console.log('btnJbCodeClick');
            e.preventDefault();
            mdlJbCode.show();
        });
    };
    
    function btnNpEmailClick(){
        btnNpEmail.click(function(e){
            console.log('btnNpEmailClick');
            e.preventDefault();
            mdlNpEmail.show();
        });
    };
    
    function btnDlEmailClick(){
        btnDlEmail.click(function(e){
            console.log('btnDlEmailClick');
            e.preventDefault();
            mdlDlEmail.show();
        });
    };
    
    function btnJbEmailClick(){
        btnJbEmail.click(function(e){
            console.log('btnJbEmailClick');
            e.preventDefault();
            mdlJbEmail.show();
        });
    };
    
    function btnSs1FullViewClick(){
        btnSs1FullView.click(function(e){
            console.log('btnSs1FullView clicked');
            e.preventDefault();
            ss1FullView.modal('show');
        });
    };
    
    function btnSs2FullViewClick(){
        btnSs2FullView.click(function(e){
            console.log('btnSs2FullView clicked');
            e.preventDefault();
            ss2FullView.modal('show');
        });
    };
    
    function btnSs3FullViewClick(){
        btnSs3FullView.click(function(e){
            console.log('btnSs3FullView clicked');
            e.preventDefault();
            ss3FullView.modal('show');
        });
    };
    
    function btnSs4FullViewClick(){
        btnSs4FullView.click(function(e){
            console.log('btnSs4FullView clicked');
            e.preventDefault();
            ss4FullView.modal('show');
        });
    };
    
    function btnSs5FullViewClick(){
        btnSs5FullView.click(function(e){
            console.log('btnSs5FullView clicked');
            e.preventDefault();
            ss5FullView.modal('show');
        });
    };
    
    function btnSs6FullViewClick(){
        btnSs6FullView.click(function(e){
            console.log('btnSs6FullView clicked');
            e.preventDefault();
            ss6FullView.modal('show');
        });
    };
    
    return{setModalEventListeners : setModalEventListeners};
})();

var ClientSideValidator = (function(){
    var executeClientSideValidator = function(){
        
    };
    return{executeClientSideValidator : executeClientSideValidator};
})();

var EmailHandler = (function(){
    var executeEmailHandler = function(){
        
    };
    return{executeEmailHandler : executeEmailHandler};
})();

var ErrorMsg = (function(){
    var getErrorNameNull = function(){
        msg = '<li>Error: The name field is empty.</li>';
        return msg;
    };
    
    var getErrorEmailNull = function(){
        msg = '<li>Error: The email field is empty.</li>';
        return msg;
    };
    
    var getErrorSubjectNull = function(){
        msg = '<li>Error: The subject field is empty.</li>';
        return msg;
    };
    
    var getErrorTextAreaNull = function(){
        msg = '<li>Error: The text arear is empty.</li>';
        return msg;
    };

    return{getErrorNameNull : getErrorNameNull,
           getErrorEmailNull : getErrorEmailNull,
           getErrorSubjectNull : getErrorSubjectNull,
           getErrorTextAreaNull : getErrorTextAreaNull};
})();

// Method for handeling page scrolling
$(function() {
    $('body').on('click', '.page-scroll a', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(document).ready(function(){
	var user = detect.parse(navigator.userAgent);
	if(user.browser.family === 'Safari'){
		$(".objSize").hide();
	}
        ModalHandler.setModalEventListeners();
});
