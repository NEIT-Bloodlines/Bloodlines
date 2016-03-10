<?php
/* 
 * Developer: David Landi
 * Created: 2/6/16
 * Purpose: Navagation Bar for the preGame page
 * TODO: 
 *      - Add links 
 * Modifed by: (Name, Reason, Date)
 *  */
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid nav_width">
<div class="navbar-header page-scroll">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nd_collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/">Bloodlines</a>
</div>
<div class="collapse navbar-collapse" id="nd_collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#" id="lobbyLink">Main Lobby</a>
</li>
<li>
<a href="#" id="hostGameLink">Host Game</a>
</li>
<li>
<a href="#" id="joinGameLink">Join Game</a>
</li>
<li>
<a href="#" id="btnManualModel">Manual</a>
</li>
<li>
<a href="/Statistics">Stats</a>
</li>
<li>
<a href="#" id="btnHelpModal">Help</a>
</li>
<li>
<a href="#">Sign Out</a>
</li>
</ul>
</div>
</div>
</nav>

