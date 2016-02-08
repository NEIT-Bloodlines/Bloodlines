/*
 * Developer: David Landi
 * Created: 2/8/16
 * Purpose: JS methods for chatrooms
 * Modifed by: (Name, Reason, Date)
 *  */

var BloodLinesChatroom = (function(){
    var chatroomInstanse = false;
    var urlstring = 'api/BloodlinesChatHandler.php';
    var chatroomState;
    var txtMessage;
    var chatroomFile;
    var chatroomID;
    
    function BloodlinesChatRoom(chatID){
        chatroomID = chatID;
        
        /*Method to set the state of the chatroom*/ 
        this.getChatroomState = function getChatroomState(){   
            var datafuncname = 'getState';
            var successfunction = function(data){
                chatroomState = data.state;
                chatroomInstanse = false;
            };
            ajaxPostMethod(urlstring, datafuncname, chatroomFile, successfunction);
        };
        
        /*Method for updating the chatroom*/
        this.updateChatroom = function updateChatroom(){
            var datafuncname = 'getState';
            var successfunction = function(data){
                if(data.text){
                    for(var i = 0; i < data.text.length; i++){
                        $(chatroomID).append($("<p>"+ data.text[i] +"</p>"));
                    }
                }
                document.getElementById(chatroomID).scrollTop = document.getElementById('chat-area').scrollHeight;
                chatroomInstanse = false;
                chatroomState = data.state;
            };
            
            if(chatroomInstanse){
                setTimeout(this.updateChatroom(), 1500);
            }
            
            ajaxPostMethod(urlstring, datafuncname, chatroomFile, successfunction);    
        };
        
        /*Method for sending the user message*/
        this.sendTxtMessage = function sendTxtMessage(msg, username){
            var datafuncname = 'send';
            var successfunction = function(data){
                this.updateChatroom();
            };
            this.updateChatroom();
            ajaxPostMethodSend(urlstring, datafuncname, chatroomFile, 
                successfunction, msg, username);
        };
    }
    
    function ajaxPostMethod(urlstring, datafuncname, datafile, successfunction){
        if(!chatroomInstanse){
            chatroomInstanse = true;
            $.ajax({
                type: "POST",
                url: urlstring,
                data: {
                    'function' : datafuncname,
                    'file' : datafile
                },
                dataType: "json",
                success : successfunction
            });
        }
    };
    
    function ajaxPostMethodSend(urlstring, datafuncname, datafile, 
                successfunction, msg, usrname){
        if(!chatroomInstanse){
            chatroomInstanse = true;
            $.ajax({
                type: "POST",
                url: urlstring,
                data: {
                    'function' : datafuncname,
                    'message' : msg,
                    'usrname' : usrname, 
                    'file' : datafile
                },
                dataType: "json",
                success : successfunction
            });
        }
    };
    
    return BloodlinesChatRoom;
})();

var ChatroomValidator = (function(){
    
    function ChatroomValidator(){
        this.filterHtmlTags = function filterHtmlTags(inputString){
            return inputString.replace(/(<([^>]+)>)/ig,"");
        };
        
        this.stringNotNull = function stringNotNull(inputString){
            
        };
        
        this.stringNotGreaterThanMaxAllowed = function stringNotGreaterThanMaxAllowed(inputString){
            
        };
        
        this.filterProfanity = function filterProfanity(inputString){
            
        };
    };
    return ChatroomValidator;
})();


var ChatroomEvents = (function(){
    function ChatroomEvents(){
        
    };

    return ChatroomEvents;
})();