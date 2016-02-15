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

<section id="join_game">
    <div class="container join_game_content">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Joinable Games</div>
                    <div class="panel-body">
                        <!-- TODO: PHP will need to return list of games-->
                    </div>
                </div> 
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Joinable Games</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group frm_input_space">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-fort-awesome"></i></span>
                                        <input type="text" class="form-control" id="txt_sir_name"
                                               accept=""placeholder="Enter your Sir name" 
                                               aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group frm_input_space">
                                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-fort-awesome"></i></span>
                                        <input type="text" class="form-control" id="txt_title" 
                                               placeholder="Enter your title" 
                                               aria-describedby="basic-addon2">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <!-- TODO: add image -->
                                </div>
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
                            <button type="button" class="btn btn-block btn-primary frm_btn" 
                                    id="btn_join_game">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>