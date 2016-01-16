<?php
/* Developer: David Landi 1/16/2016
 * Purpose: 
 *  Contains all of the html elements for the sign up page.
 * Requirements:
 *  To build the signin page the php controller will need to add the 
 *  header then the signupContent and then footer.  Navbar is optional.
 * TODO: 
 *  1. php session functionality
 *  2. php routing functionality 
 *  3. css class will need to be added for each class that contains underscore
 */
?>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            Sign Up
            <div class="pull-right">
                <a href="#">Help</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="frm_err_message alert alert-danger col-sm-12" id="frm_signin_err">
            </div>
            <form id="frm_signup" class="form-horizontal" role="form">
                <div class="input-group">
                    <span class="input_group_addon"><i class="fa fa-lock"></i></span>
                    <input id="signup_user_email" type="email" class="form-control" name="email" value="" placeholder="email">
                </div>
                <div class="input-group">
                    <span class="input_group_addon"><i class="fa fa-user"></i></span>
                    <input id="signup_username" type="text" class="form-control" name="username" value="" placeholder="username">
                </div>
                <div class="input-group">
                    <span class="input_group_addon"><i class="fa fa-lock"></i></span>
                    <input id="signup_password" type="password" class="form-control" name="password" value="" placeholder="password">
                </div>
                <div class="input-group">
                    <span class="input_group_addon"><i class="fa fa-lock"></i></span>
                    <input id="conf_password" type="password" class="form-control" name="confpassword" value="" placeholder="confirm password">
                </div>

                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                      <a id="btn_signup" href="#" class="btn btn-success">Submit  </a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 control">
                        Already have an account? 
                        <a href="#">
                            Login Here
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

