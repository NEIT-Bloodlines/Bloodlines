<?php
/* 
 * Developer: David Landi
 * Created: 1/29/16
 * Purpose: View for member login.
 * TODO: 
 *      - Add to form tag action=""
 *      - Minor css style elements 
 *      - Need to add jquery method for displaying error msg only when there is an error.
 *      - Popup modal needs to have text filled out. 
 *      - Needs a controller and model implemented.
 *      - Need php to handle member post.
 * Modifed by: (Name, Reason, Date)
 *  */
?>
<!-- MEMBER LOGIN FORM -->
<section id="member_login" class="dynamic">
<div class="container member_login_content">
    <div class="panel panel-primary pnl_authentication center-block">
        <div class="panel-heading">Member Login
            <span class="pull-right"><i class="fa fa-info-circle" id="btn_member_help"></i></span>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form">
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" id="chk_remeber_me"> Remember me</label>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                      <button type="button" class="btn btn-block btn-primary frm_btn" id="btn_member_login">Login</button>  
                    </div>
                    <div class="col-xs-12 col-md-9">
                        <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Login Failed!</strong> The Username and Password given does not match our records.
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<!-- / MEMBER LOGIN FORM -->
