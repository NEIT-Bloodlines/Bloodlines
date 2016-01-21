<?php
/* Developer: David Landi 1/16/2016
 * Purpose: 
 *  Contains all of the html elements for the sign in page.
 * Requirements:
 *  To build the signin page the php controller will need to add the 
 *  header then the signinContent and then footer.  Navbar is optional.
 * TODO: 
 *  1. php session functionality
 *  2. php routing functionality 
 *  3. css class will need to be added for each class that contains underscore
 */
?>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            Sign In
            <div class="pull-right">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="frm_err_message alert alert-danger col-sm-12" id="frm_signin_err">
            </div>
            <form id="frm_signin" class="form-horizontal" role="form">
                <div class="input-group">
                    <span class="input_group_addon"><i class="fa fa-user"></i></span>
                    <input id="signin_username" type="text" class="form-control" name="username" value="" placeholder="username">
                </div>
                <div class="input-group">
                    <span class="input_group_addon"><i class="fa fa-lock"></i></span>
                    <input id="signin_password" type="password" class="form-control" name="password" value="" placeholder="password">
                </div>
                <div class="input-group">
                    <div class="checkbox">
                        <label>
                            <input id="signin_remeber_me" type="checkbox" name="remember" value="1"> Remember me
                        </label>
                    </div>
                </div>
                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                      <a id="btn_signin" href="#" class="btn btn-success">Login  </a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 control">
                        Don't have an account! 
                        <a href="#">
                            Sign Up Here
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
