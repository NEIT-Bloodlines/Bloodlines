<?php
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

<section id="host_game" class="hidden">
    <div class="container host_game_content">
        <div class="row">
            <div class="col-sm-12 col-md-4"><!-- Left col -->
                <div class="panel panel-default">
                    <div class="panel-heading">Game Setup</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            
                            <div class="input-group frm_input_space">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fort-awesome"></i></span>
                                <input type="text" class="form-control" id="txt_sir_name"
                                       placeholder="Enter your Sir name" 
                                       aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group frm_input_space">
                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-fort-awesome"></i></span>
                                <input type="text" class="form-control" id="txt_title" 
                                       placeholder="Enter your title" 
                                       aria-describedby="basic-addon2">
                            </div>

                            <div class="container"> 
                                <div class="row">
                                    <!-- TODO: Need shied icons -->
                                    <p>Select your families crest</p>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <button type="button" class="btn btn-block btn-default" 
                                                id="btn_red_shield">TODO</button>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <button type="button" class="btn btn-block btn-default" 
                                                id="btn_blue_shield">TODO</button>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <button type="button" class="btn btn-block btn-default" 
                                                id="btn_black_shield">TODO</button>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <button type="button" class="btn btn-block btn-default" 
                                                id="btn_white_shield">TODO</button>
                                    </div>
                                </div><!-- End row -->   
                            </div>

                            <div class="btn-group-vertical dropdown">
                            <button class="btn btn-default dropdown-toggle" id="btn_set_number_of_players" type="button" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Set number of players <span class="caret"></span>
                            </button>

                            <button class="btn btn-default dropdown-toggle" id="btn_set_time_per_turn" type="button" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Set max turn time <span class="caret"></span>
                            </button>

                            <button class="btn btn-default dropdown-toggle" id="set_public_or_private" type="button" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Set game type <span class="caret"></span>
                            </button>
                            </div>

                            <div class="input-group frm_input_space">
                                <span class="input-group-addon" id="basic-addon3"><i class="fa fa-fort-awesome"></i></span>
                                <input type="text" class="form-control" id="txt_game_name" 
                                       placeholder="Enter a name for your game" 
                                       aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group frm_input_space hidden">
                                <span class="input-group-addon" id="basic-addon4"><i class="fa fa-fort-awesome"></i></span>
                                <input type="text" class="form-control" id="txt_game_password" 
                                       placeholder="Enter a password" 
                                       aria-describedby="basic-addon4">
                            </div>

                            <button type="button" class="btn btn-block btn-primary frm_btn" 
                                    id="btn_add_new_game">Submit</button> 
                        </form>
                    </div>
                </div>
            </div><!-- End left col -->

            <div class="col-sm-12 col-md-8"><!-- Right col -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">Active Members</div>
                                <div class="panel-body">
                                    <!-- TODO: populate table with all members -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="panel panel-default">
                            <div class="panel-heading">Send Invites</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">

                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="HG_txt_is_member_loggedin" 
                                                       placeholder="Enter Members Username">
                                                
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default" 
                                                            id="HG_btn_is_member_loggedin">Check</button>
                                                </div>
                                            </div>

                                            <div class="input-group">
                                                <input type="text" class="form-control" id="HG_txt_add_to_invite"
                                                       placeholder="Enter Members Username">
                                                
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-default" id="HG_btn_add_to_invite">Add</button>
                                            </div>
                                            </div>

                                            <div class="input-group">
                                                <input type="text" class="form-control" id="HG_txt_custom_message" 
                                                       placeholder="Enter Message to include in email">
                                                
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-default" 
                                                        id="HG_btn_add_custom_message">Add</button>
                                            </div>
                                            </div>

                                            <button type="button" class="btn btn-block btn-primary frm_btn" 
                                                    id="btn_send_invite">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Right col -->
        </div>
    </div>
</section>
