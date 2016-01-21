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
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php /*TODO need function to set title of page*/ ?></title>

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