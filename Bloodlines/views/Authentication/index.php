<?php 
/*this could also be called in the controller but it seems to load quicker when 
done here */
require("api/PageBuilder.php");
$homePage = new PageAuthentication($viewModel);

echo $viewModel->get('script');

