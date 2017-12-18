jQuery(document).on('click', '.mega-dropdown', function(e) {
    e.stopPropagation()
});

var starfireArray = new Array();
starfireArray[0] = new Image();
starfireArray[0].src = "gume/tigar.jpg";
starfireArray[0].imageCaption = "GOODYEAR 220/60 R19 Winter Drive";
starfireArray[0].imagePrice = "Cena : 12.232,00 RSD";
starfireArray[0].url = "goodyear220.php";






function displayAllStarfire() {

    for (i=0;i<starfireArray.length;i++) {
        document.write("" +
            "<div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span>" +
            "<img src='" + starfireArray[i].src + "' alt='"+ starfireArray[i].imageCaption+"'  class='img-responsive'  /></span>" +
            "<h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>" +
            "<img src='ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span>" +
            "<div  style='background-color: white;z-index:20;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>" + starfireArray[i].imageCaption + "</span><br /><br /><span style='color: #428bca'>" + starfireArray[i].imagePrice + "</span><br/>" +
            "<span><br /><a href='" + starfireArray[i].url + "' style='z-index: 20'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>" +
            "</span></div></div>");
    }


}

$count = starfireArray.length;
console.log($count);

console.log();