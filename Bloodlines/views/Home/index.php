<?php 
require("api/PageBuilder.php");
//$homePage = new PageHome($viewModel->get('tst'));
$homePage = new PageHome($viewModel);



echo $viewModel->get('script');