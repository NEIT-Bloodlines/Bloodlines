<?php
/* 
 * Developer: David Landi
 * Created: 2/6/16
 * Purpose: 
 *        This section will contain 4 boxes at top of page that will display
 *        stats such as total logged in members, total games being played, 
 *        total joinable games, and the top 3 ranked members.
 *        Under the stats display there will be a chatroom interface.
 * TODO: 
 *      - Add links 
 * Modifed by: (Name, Reason, Date)
 *  */
?>

<section id="joinGame" class="hidden">
    <div class="container join_game_content">
        <div class="panel panel-default pnl_join_game">
            
        <div class="panel-heading">
            Join Games
            <span class="pull-right"><i class="fa fa-info-circle" id="btnDisplayMdlJoinGames"></i></span>
        </div>
        
        <div id="pnlSectionJoinGame" class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <p>Select a game to join</p>
                    <?php /*TODO populate a list of games that are waiting for people*/ ?>  
                </div>
                <div class="col-md-6">
                    <form class="form-horizontal" role="form">
                        <p>Game Details</p>
                        <?php /*TODO populate details on the game selected*/ ?> 

                        <!-- If the game selected is private show password field -->
                        <div id="txtGamePassword" class="input-group-btn hidden">
                            <button type="button" class="btn btn-default" id="btnGamePassword">Verify</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>    
            
        <div id="pnlSectionFamilyData" class="panel-body hidden">
            <form class="form-horizontal" role="form">
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-fort-awesome"></i></span>
                        <input type="text" class="form-control" id="txtSirName" placeholder="Enter your Sir Name" aria-describedby="basic-addon2">
                </div>
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-fort-awesome"></i></span>
                        <input type="text" class="form-control" id="txtTitle" placeholder="Enter your title" aria-describedby="basic-addon3">
                </div>
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon4"><i class="fa fa-fort-awesome"></i></span>
                        <input type="text" class="form-control" id="txtLogan" placeholder="Enter family slogan" aria-describedby="basic-addon4">
                </div>
            </form>
        </div>
            
        <div id="pnlSectionFamilyShield" class="panel-body hidden">
            <form class="form-inline" role="form">
                <p>Select your families shield</p>
                <div class="text-center">
                <button id="btnShield1" class="btn btn-lg dragon_sheild" type="button"></button>
                <button id="btnShield2" class="btn btn-lg tree_sheild" type="button"></button>
                <button id="btnShield3" class="btn btn-lg mountain_sheild" type="button"></button>
                <button id="btnShield4" class="btn btn-lg boat_sheild" type="button"></button>
                </div>
                <div id="msgShieldSection" class="hidden">
                    <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <!-- JavaScript will fill in the error message.  If the shield is already taken notify user.
                             If the shield is not taken notify usr which shield they selected-->
                        <p id="msgSheildText"></p>
                    </div>
                </div>
            </form>
        </div>
            
        <div class="panel-footer addmarg">
            <div class="row">
                <div class="col-md-3">
                    <button type="button" class="btn btn-default btn-block" id="btnBack"><i class="fa fa-angle-double-left"></i> Back</button>
                    
                </div>
                <div class="col-md-6">
                    <div class="progress pbsize">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-default btn-block" id="btnNext">Next <i class="fa fa-angle-double-right"></i></button>
                    <button id="btnEnterGame" type="button" class="btn btn-warning hidden">Let The War Begin!</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>