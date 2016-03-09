
/*Obj for validating fields. To use call the public method executeFieldValidation
 * and pass in the fields id.  This method will run all of the validiton functions
 * for fields.  It will return true if a field is invalid.*/
var Validator = (function(){
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
    
    var verifyDropDownValueSelected = function(dfltOption, usrInput){
        return usrInput === dfltOption;
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
    return{executeFieldValidation : executeFieldValidation, 
           verifyDropDownValueSelected : verifyDropDownValueSelected};
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


