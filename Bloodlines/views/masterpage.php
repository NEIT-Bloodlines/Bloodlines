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
<title><?php echo $viewModel->get('pageTitle');?></title>
<!-- Bootstrap CSS -->
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<!-- FontAwsome CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- blCustom CSS -->
<link href="public/css/blCustom.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</head>
<body>


<?php require($this->viewFile); #echo $this->viewFile;?>    

    
<script src="<?php /*TODO need function to set path*/ ?>"></script>
<!-- src="js/blCustom.min.js" -->
<script src="<?php /*TODO need function to set path*/ ?>"></script>
</body>
</html>
