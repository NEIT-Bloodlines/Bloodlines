<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './view/header.php';
echo '<h3>Email</h3>';
echo '<input type="email" name="email" class="form-control" placeholder="Email" required="true">';
echo '<h3>Password</h3>';
echo '<input type="password" name="password" class="form-control" placeholder="Password" required="true">';
echo '<button class="btn btn-lg btn-primary btn-block" type="submit" value="login">Login</button>';