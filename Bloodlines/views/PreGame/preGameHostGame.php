9+<?php
/* 
 * Developer: David Landi
 * Created: 2/6/16
 * Purpose: 
 *        This section is the 3rd section. 
 * TODO: 
 *      - Add links 
 *      - Complete all TODO's 
 * Modifed by: (Name, Reason, Date)
 *  */
?>

<section id="hostGame" class="hidden">
    <div class="container-fluid host_game_content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Step 1: Set Game Options
                        <span class="pull-right"><i class="fa fa-info-circle" id="btnDisplayMdlHostInfo"></i></span>
                    </div>
                    
                    <div id="bdyGameDesc" class="panel-body pnlbsize">
                        <form class="form-horizontal" role="form">                           
                            <div id="msgGameDesc" class="alert alert-success fade in text-justify">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <p>In this section you will set the name of the game which will be displayed to the other members.<br>
                               If you are planning to make this game private you will need to set a password for the game. 
                            </p>
                            </div>
                          
                            <div class="input-group frm_input_space">
                            <span class="input-group-addon" id="baGameTile"><i class="fa fa-fort-awesome"></i></span>
                            <input type="text" class="form-control" id="txtGameTitleGO" 
                                   placeholder="Enter a name for your game" 
                                   aria-describedby="baGameTile">
                            </div>

                            <div class="input-group frm_input_space">
                            <span class="input-group-addon" id="baGamePassword"><i class="fa fa-fort-awesome"></i></span>
                            <input type="password" class="form-control" id="txtGamePasswordGO" 
                                   placeholder="Enter a password" 
                                   aria-describedby="baGamePassword">
                            </div>
                        </form>
                    </div>
                    
                    <div id="bdyGameOptions" class="panel-body pnlbsize hidden">
                        <form class="form-inline text-center" role="form">
                            <div id="msgGameOptions" class="alert alert-success fade in text-justify">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p>In this section you will set the game option for number of players, maximum turn time and game type.<br>
                                    The minium amount of players to start a game is 2. The maximum is 4.<br>
                                    By default the per player turn time is set to 3 minutes. The players turn will automatically end when the
                                    set time has been reached even if he or shew has not completed their moves.<br>
                                    Game type settings are for setting weather or not the you are about to create is open for any member to join
                                    or if it is a private game in which a member will have to enter a password to join the game.

                                </p>
                            </div>
                            <div class="form-group">
                                
                                <select class="form-control" id="ddmSetNumberOfPlayers">
                                    <option>Set number of players</option>
                                    <option>2 players</option>
                                    <option>3 players</option>
                                    <option>4 players</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="ddmSetTurnTime">
                                    <option>Set turn time</option>
                                    <option>2 minutes</option>
                                    <option>3 minutes</option>
                                    <option>4 minutes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="ddmSetGameType">
                                    <option>Set game type</option>
                                    <option>Public</option>
                                    <option>Private</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                    <div id="bdyFamilyData" class="panel-body pnlbsize hidden">
                        <form class="form-horizontal" role="form">
                            <div id="msgFamilyData" class="alert alert-success fade in text-justify">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <p>Here you will set your families last name which is also known as Sir name.<br>
                                You will also set your title. For example Lord, Knight etc. 
                            </p>
                            </div>

                            <div class="input-group frm_input_space">
                                <span class="input-group-addon" id="baSirNameGO"><i class="fa fa-fort-awesome"></i></span>
                                <input type="text" class="form-control" id="txtSirNameGO"
                                       placeholder="Enter your Sir name" 
                                       aria-describedby="baSirNameGO">
                            </div>

                            <div class="input-group frm_input_space">
                                <span class="input-group-addon" id="baTitleGO"><i class="fa fa-fort-awesome"></i></span>
                                <input type="text" class="form-control" id="txtTitleGO" 
                                       placeholder="Enter your title" 
                                       aria-describedby="baTitleGO">
                            </div>
                        </form>
                    </div>
                    
                    <div id="bdyShieldSelection" class="panel-body pnlbsize hidden">
                        
                        <div id="msgShieldSelection" class="alert alert-success fade in text-justify">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p>You have reached the final step to host a new game. Here you will select one of the 4 shields that will 
                            represent your family. 
                        </p>
                        </div>
                        <form class="form-inline" role="form">
                        <div class="text-center">
                            <button id="btnShield1GO" class="btn btn-lg tssheildHG" type="button"></button>
                            <button id="btnShield2GO" class="btn btn-lg bssheildHG" type="button"></button>
                            <button id="btnShield3GO" class="btn btn-lg dssheildHG" type="button"></button>
                            <button id="btnShield4GO" class="btn btn-lg mssheildHG" type="button"></button>
                        </div>
                        </form>
                    </div>
                    <div id="bdyInviteSelection" class="panel-body pnlbsize hidden">
                        
                        <div id="msgInviteSelection" class="alert alert-success fade in text-justify">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p>You have reached the final step to host a new game. Here you will select one of the 4 shields that will 
                            represent your family. 
                        </p>
                        </div>
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                
                                <select class="form-control" id="ddmSetInvite2">
                                    <option>Player 2</option>
                                    <?php //need a list of members logged in ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control hidden" id="ddmSetInvite3">
                                    <option>Player 3</option>
                                    <?php //need a list of members logged in ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control hidden" id="ddmSetInvite4">
                                    <option>Player 4</option>
                                    <?php //need a list of members logged in ?>
                                </select>
                            </div>
                            
                            <div class="input-group frm_input_space">
                            <span class="input-group-addon" id="baMsg"><i class="fa fa-fort-awesome"></i></span>
                            <input type="text" class="form-control" id="txtPersonMsg" 
                                   placeholder="Enter a personal message to send with invite" 
                                   aria-describedby="baMsg">
                            </div>
                        </form>
                    </div>
                    
                    <div id="bdyConfirmSetting" class="panel-body pnlbsize hidden">
                        
                        <div id="msgConfirmSettings" class="alert alert-success fade in text-justify">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p> 
                            Confirm and review
                        </p>
                        </div>
                        
                        <div id="gameSettingsData">
                            
                        </div>
                    </div>
                    <div class="panel-footer addmarg">
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-block" id="btnBackGO"><i class="fa fa-angle-double-left"></i> Back</button>

                            </div>
                            <div class="col-md-6">
                                <div class="progress pbsize">
                                    <div id="progressBarGO" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-block" id="btnNextGO">Next <i class="fa fa-angle-double-right"></i></button>
                                
                                <button type="button" class="btn btn-default btn-block hidden" id="btnHostGame">Host Game</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
