<?php 
require("api/PageBuilder.php");
$statisticsPage = new PageStatistics($viewModel);

echo $viewModel->get('script');
