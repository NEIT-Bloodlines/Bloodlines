<?php
/* Developer: David Landi 1/16/2016
 * Purpose: 
 *  Contains all of the html elements for the landing page. The controller for
 *  the landing page is the root index.php file.
 * Requirements:
 *  To build the signin page the php controller will need to add the 
 *  header, dfltNav, landingContent and then footer.
 * TODO: 
 *  1. php get data for player rankings section
 *  2. php routing functionality 
 *  3. css class will need to be added for each class that contains underscore
 */
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid nav_spacing">
    <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nd_collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#page-top">Bloodlines</a>
    </div>
    <div class="collapse navbar-collapse" id="nd_collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="hidden">
                <a href="#page-top"></a>
            </li>
            <li class="page-scroll">
                <a href="#about">About</a>
            </li>
            <li class="page-scroll">
                <a href="#manual">Manual</a>
            </li>
            <li class="page-scroll">
                <a href="#rankings">Rankings</a>
            </li>
            <li>
                <a href="#">Login</a>
            </li>
            <li>
                <a href="#">Sign Up</a>
            </li>
            </ul>
        </div>
    </div>
</nav>

