<?php

require("api/PageBuilder.php");
require('BloodlinesApp/CountyModalCreator.php');
require('BloodlinesApp/JsonDataCreator.php');

$gamePage = new PageGame($viewModel);
$cmc = new CountyModalCreator();
echo $cmc->generateModalHtml(41);
$countyData = new CountyData();
echo $viewModel->get('script');
?>
<script src="public/js/blCountyHandler.js"></script>
<script>
    
    $( document ).ready(function(){
        <?php echo $countyData->getCountyData(); ?>
        CountyEventBuilder.setCountyData(countyElements);
        CountyEventBuilder.generateOnClickListeners();
    });
    
    
</script>
