<?php 
/*Justin: When the user is logged in I need you to store the username in seesion
 *        So i can then remove the alert box for the user to enter in name for the 
 *        chatroom
 *  */
require("api/PageBuilder.php");
$homePage = new PagePreGame($viewModel);

echo $viewModel->get('script');
?>
<audio controls autoplay loop id="bgmusic">
  
  <source src="public/music/mlMusic.mp3" type="audio/mpeg">
  <p>If you can read this, your browser does not support the audio element.</p>
</audio>
<script src="public/js/pregameData.js"></script>
<script src="public/js/validator.js"></script>
<script src="public/js/preGamePage.js"></script>
<script type="text/javascript">

// ask user for name with popup prompt    
var name = prompt("Enter your chat name:", "Guest");

// default name is 'Guest'
if (!name || name === ' ') {
   name = "Guest";	
}

// strip tags
name = name.replace(/(<([^>]+)>)/ig,"");


// kick off chat
var chat =  new Chat();
$(function() {

         chat.getState(); 
         PregameEvent.OnBtnSendChatTextClick(chat, name);
});
    
</script>
