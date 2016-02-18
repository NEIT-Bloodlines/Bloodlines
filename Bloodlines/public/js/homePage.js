/*
 * Developer: David Landi
 * Created: 2/18/16
 * Purpose: JS for home page.
 * Modifed by: (Name, Reason, Date)
 *  */


var ModalHandler = (function(){
    var executeModalHandler = function(){
        
    };
    return{executeModalHandler : executeModalHandler};
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
});
