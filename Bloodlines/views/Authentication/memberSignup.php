<?php
/* 
 * Developer: David Landi
 * Created: 1/29/16
 * Purpose: View for member signup.
 * TODO: 
 *      - Add to form tag action=""
 *      - Once connected the form will need UI testing 
 *      - Minor css style elements 
 *      - Need to add jquery method for displaying error msg only when there is an error.
 *      - Popup modal needs to have text filled out. 
 *      - Needs a controller and model implemented.
 *      - Need php to handle member post.
 * Modifed by: (Name, Reason, Date)
 *  */
?>
<!-- MEMBER LOGIN FORM -->
<section id="member_signup" class="hidden">
<div class="container member_signup_content">
    <div class="panel panel-primary pnl_authentication center-block">
        <div class="panel-heading">Member Signup
            <span class="pull-right"><i class="fa fa-info-circle" id="btn_member_help"></i></span>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form">
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon2">
                </div>
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon3">
                </div>
                <div class="input-group frm_input_space">
                    <span class="input-group-addon" id="basic-addon4"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon4">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                      <button type="button" class="btn btn-block btn-primary frm_btn" id="btn_new_member">Login</button>  
                    </div>
                    <div class="col-xs-12 col-md-9">
                        <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Signup Failed!</strong> The Username and Password given does not match our records.
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<!-- / MEMBER LOGIN FORM -->