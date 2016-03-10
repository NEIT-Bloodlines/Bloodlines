<?php
/* 
 * Developer: David Landi
 * Created: 2/10/16
 * Purpose: HTML for stats page
 * 
 * Developer: Justin Barreira
 * Created: 3/1/16
 * Purpose: PHP to return top players list
 * 
 * TODO: 
 *      - Complete all php and js todos 
 * Modifed by: (Name, Reason, Date)
 *  */
$stats = $templateData->get('stats');
?>
<div class="jumbotron text-center">
    <p class="bl_logo">BLOODLINES</p>
    <p>Power Rankings</p>
    <p>Number One Ranked Member: </p><?php echo $stats[0]['username'] ?>
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

                    </tr>
                </thead>
                <tbody>
                    <?php                    
                        foreach($stats as $stat => $value){
                            echo '<tr>'
                            . '<td>'. $value['username'] .'</td>'
                            . '<td>'. ($stat+1) .'</td>'
                            . '<td>'. ($value['wins'] + $value['losses']) .'</td>'
                            . '<td>'. $value['wins'] .'</td>'
                            . '<td>'. $value['losses'] .'</td>'
                            . '</tr>';
                        }
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