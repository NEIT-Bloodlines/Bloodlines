/*
 * Developer: David Landi
 * Created: 2/18/16
 * Purpose: Creates dynamic on click listerns for the 42 counties on the map
 *          To use: call on inex page and pass in a js object that conatins 
 *          the data for each element.
 * Modifed by: (Name, Reason, Date)
 *  */

var CountyEventBuilder = (function(){
    var countyElements;
    
    var setCountyData = function(obj){
        countyElements = obj;
    };
    
    function getJsonCountyObj(){
        return JSON.parse(JSON.stringify(countyElements));
    };
    
    var generateOnClickListeners =  function(){
        var btnCounty = getJsonCountyObj();
        console.log(btnCounty);
        console.log(btnCounty.county.length);
        console.log('"' + btnCounty.county[1].btnID.selector + '"');
        console.log('"' + btnCounty.county[1].modalID.selector + '"');
        var i = 0;
        for(i=0; i < btnCounty.county.length; i++){
            
            (function(j){
                var county = btnCounty.county[j].btnID.selector;
                var modalID = btnCounty.county[j].modalID.selector;
                var pnlBody = btnCounty.county[2].btnClpIntelID.selector;
                onCountyClick(county, modalID, pnlBody);
            })(i);
            
        }
   };
   
//    var ma1 = $("a, .county1");
//   ma1.click(function(e){
//       e.preventDefault();
//        console.log("click");
//        var canv = document.getElementById('blCanvas');
//        var ctx = canv.getContext('2d');
//        var img = new Image;
//        img.onload = function(){
//            ctx.drawImage(img, 524,115);
//        };
//        img.src = 'public/img/iconBsheild.jpg';
//    });
   
   
   
   function onCountyClick(countyID, modalID, pnlBodyID){
       $(countyID).click(function(e){
           e.preventDefault();
           console.log('county click');
           $(modalID).modal('show');
           $(pnlBodyID).hide();
       });
   };
    
    function onBtnAddUnitToCountyClick(buttonID){
        $(buttonID).click(function(e){
            e.preventDefault();
            console.log('Adding unit to county');
            
        });
    };
    
    function onBtnAttackCountyClick(buttonID){
        $(buttonID).click(function(e){
            e.preventDefault();
            console.log('Attacking County');
            
        });
    };
    
    function displayBdyBattleScreen(){
        
    };
    
    
    
    return{setCountyData : setCountyData, generateOnClickListeners : generateOnClickListeners};
})();


