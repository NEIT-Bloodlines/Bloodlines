<?php 
require("api/PageBuilder.php");
$homePage = new PageHome();

echo $viewModel->get('script');