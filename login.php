<?php include 'dependency.php'; ?>

<html lang="en">
    <head></head>
    <body>
<?php

//Checks if there was an input post
if(filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST')
{
    //Creates a new member object which sres the varom the input fields
    $member = new Member();
            
    //Runs the processLogin method which attempts to log the user in and echo's a message based on whether they were successful or not
    if($member->Login($member)) {
        echo '<p>Login successful</p>';
    }
    else
    {
        echo '<p>Login unsuccessful</p>';
    }
}
?>
        <form method="post">
            <div>
                <h3>Username</h3>
                <input type="username" name="username" class="form-control" placeholder="Username" required="true">
                <h3>Password</h3>
                <input type="password" name="password" class="form-control" placeholder="Password" required="true">
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="login">Login</button>
            </div>
       </form> 
    </body>
</html>