<?php
/* 
 * Developer: David Landi
 * Created: 3/7/16
 * Purpose: 
 *        This section is holds the game board and controls 
 * TODO: 
 *      
 * Modifed by: (Name, Reason, Date)
 *  */
?>

<section id="gameInterface" class="remove_pad dynamic">
    <div class="center-block bl_map_container_size">
        <div class="bl_map_area">
            <canvas id="blCanvas" width="3000" height="1421"></canvas>
            <img class="remove_pad" style="position: absolute; top: 0; left: 0; opacity: 0; width: 3000px; height: 1421px;"  
                 src="public/img/placeholder.jpg" usemap="#Map">
        </div>
    </div>
    <button type="button" id="btnScrollRight" class="btn btn-danger">Scroll right</button>
</section>
