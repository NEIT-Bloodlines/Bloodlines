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
 *      - css
 * Modifed by: (Name, Reason, Date)
 *  */
?>
<section id="lobby" class="dynamic">
    <div class="container-fluid statscontainer">
        <div class="row">
            <!-- stats containers -->
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="stat_box text-center">
                    <h4 class="stat_lbl">Members Logged In</h4>
                    <p>5</p><!-- TODO: php will need to populate this from DB -->
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="stat_box text-center">
                    <h4 class="stat_lbl">Games In Progress</h4>
                    <p>10</p><!-- TODO: php will need to populate this from DB -->
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="stat_box text-center">
                    <h4 class="stat_lbl">Joinable Games</h4>
                    <p>16</p><!-- TODO: php will need to populate this from DB -->
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="stat_box text-center">
                    <h4 class="stat_lbl">Top Ranked Member</h4>
                    <p>David Landi</p><!-- TODO: php will need to populate this from DB -->
                </div>
            </div>
            <!-- /stats containers -->
        </div>
    </div>
    <div class="container-fluid chatcontainer">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Public Chatroom
                        <span class="pull-right btnPublicChatInfo"><i class="fa fa-info-circle" id="btnPublicChatInfo"></i></span>
                    </div>
                    
                    <div class="panel-body pnl_chat_size">
                        <!-- TODO: PHP will need to implement chatroom -->
                        <div id="chat-area"></div>
                    </div>
                    <div class="panel-footer">
                        <form class="form-horizontal" role="form" action="">
                            <div class="input-group">
                                <input type="text" class="form-control" id="txtChatText">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default" id="btnSendChatText">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Members Logged In
                        <span class="pull-right btnMembersLoggedInInfo"><i class="fa fa-info-circle" id="btnMembersLoggedInInfo"></i></span>
                    </div>
                    <div class="panel-body pnl_loggedin_size">
                        <!-- TODO: PHP will need to populate a list of all members logged in -->
                    </div>
                    <div class="panel-footer">
                        <form class="form-horizontal" role="form" action="">
                            <div class="input-group">
                                <input type="text" class="form-control" id="txtIsMemberLoggedIn" placeholder="Members Username">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default" id="btnIsMemberLoggedIn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

