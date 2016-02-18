<?php 
require("api/PageBuilder.php");
$statisticsPage = new PageStatistics();

echo $viewModel->get('script');
