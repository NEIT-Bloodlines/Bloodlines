<?php
/* 
 * Developer: David Landi
 * Created: 1/31/16
 * Purpose: Script to create new chatroomProcesor object inorder to
 *          run the requested method
 * Modifed by: (Name, Reason, Date)
 *  */

$reqChatMethod = $_POST['chatroomMethod'];

if(isset($reqChatMethod)){
    $cmd = new ChatroomProcessor();
    $cmd->executeRequestedMethod();
}