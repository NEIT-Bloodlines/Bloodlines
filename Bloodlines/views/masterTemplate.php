<?php
/* Developer: David Landi 1/16/2016
 * Purpose: 
 *  The default header is required for any html to be displayed.
 *  In order to link to the css php will set the path for a given page.
 * TODO: 
 *  1. We need to develope a routes class with will contain functionality
 *  to set the path to css files for a given page. Each page will end up being a
 *  different path to the css dir. 
 *  2. We will also need a function to set the tab title for each page. Default
 *  args should be set to Bloodlines
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $viewModel->get('pageTile');?></title>
<!-- Bootstrap CSS -->
<link href="<?php /*TODO need function to set path*/ ?>" rel="stylesheet">
<!-- FontAwsome CSS -->
<link href="<?php /*TODO need function to set path*/ ?>" rel="stylesheet">
<!-- blCustom CSS -->
<link href="<?php /*TODO need function to set path*/ ?>" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    
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


<?php /* TODO require($this->view file);*/ ?>    
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- src="js/bootstrap.min.js" -->
<script src="<?php /*TODO need function to set path*/ ?>"></script>
<!-- src="js/blCustom.min.js" -->
<script src="<?php /*TODO need function to set path*/ ?>"></script>
</body>
</html>
