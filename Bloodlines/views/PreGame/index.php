<?php 
require("api/PageBuilder.php");
$homePage = new PagePreGame();

echo $viewModel->get('script');
?>
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
