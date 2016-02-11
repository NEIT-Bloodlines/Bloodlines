<?php
/* 
 * Developer: David Landi
 * Created: 2/10/16
 * Purpose: HTML for stats page
 * TODO: 
 *      - Complete all php and js todos 
 * Modifed by: (Name, Reason, Date)
 *  */
?>
<div class="jumbotron text-center">
    <p class="bl_logo">BLOODLINES</p>
    <p>Power Rankings</p>
    <p>Number One Ranked Member: </p><?php //TODO: Get number 1 ranked member ?>
</div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Member Rankings</div>
        <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th>Username</th>
                      <th>Rank</th>
                      <th>Total Games</th>
                      <th>Won</th>
                      <th>Lost</th>
                      <th>DNF%</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //TODO: call function that will generate rows and data 
                          //for table. Each row must be in this format:
                          // <tr><td>Username</td><td>Rank</td><td>Total Games</td><td>Won</td><td>Lost</td><td>DNF</td></tr> 
                    ?>
                </tbody>
            </table>
            </div>    
        </div>
        <div class="panel-footer">
            <!-- TODO: Need to add js events for filtering results -->
            <button type="button" class="btn btn-primary" id="btn_member_login">Top 5</button>
            <button type="button" class="btn btn-primary" id="btn_member_login">Top 10</button>
            <button type="button" class="btn btn-primary" id="btn_member_login">Top 20</button>
        </div>
    </div>
</div>
