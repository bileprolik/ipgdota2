

jQuery(document).on('click', '.mega-dropdown', function(e) {
    e.stopPropagation()
});
var imageArray = new Array();
imageArray[0] = new Image();
imageArray[0].src = "gume/starfire-wt-200.jpg";
imageArray[0].imageCaption = "STARFIRE 155/70 R13 RS-C 2 75T";
imageArray[0].imagePrice = "2.889,00 RSD";
imageArray[0].url = 'tigar215.php';
imageArray[0].proizvodjac = 'STARFIRE';
imageArray[0].sirina = '155';
imageArray[0].visina = '70';
imageArray[0].precnik = '13';
imageArray[0].opterecenje = '75';
imageArray[0].indeks_brzine = 'V (215 km/h)';
imageArray[0].sezona = 'Zimska';
imageArray[0].garancija = '36 meseci';








console.log(imageArray);

function displayTigar225() {

    for (i=0;i<imageArray.length;i++) {
        document.write("" +
            "<div class='col-sm-4 col-md-4  mr-0'  style='padding: 60px;height:auto;border: 1px solid lightgrey'><br /><span>" +
            "<div class='productss'><img src='" + imageArray[i].src + "' alt='"+ imageArray[i].imageCaption+"'  class='img-responsive' /></div></span>" +
            "<h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>" +
            "<img src='ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span>" +
            "<div class='item-overlay top'></div>" +
            "</div>" +
            "<div class='col-sm-4 col-md-4' style='font-size: 18px;'><b>Cena:<br/><span style='float: right;color: orangered'>" + imageArray[i].imagePrice + "</span><br /><br />" +
            "<div style='background-color: lightgrey;color:white;width: 100%'>BESPLATNA ISPORUKA</div><div style='text-align: center'><br /><span style='font-size: 12px;margin-left: 7px;' ><img src='ikonice/zoom.png' style='width:30px; '>Pređite preko slike da biste zumirali</span></div></b>" +
            "<br /><input type='number' size='' pattern='[0-9]*' inputmode='numeric' class='form-control input-lg text-center place-order-input unos' value='1' min='1' max='99' name='unos' style='width: 100%'>" +
            "<br /><div style='text-align: center' class=''><span style='font-size: 10px'><img src='ikonice/i.png' style='width:50px;'>U polje iznad upišite koliko komada zelite da kupite </span></div>" +
            "<br /><button class='btn btn-primary btn-responsive' data-toggle='modal' data-target='#myModal' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'><a href='#'>NARUČITE</a></button><br />" +
            "</span></div>" +
            "<div class='col-xs-12 col-sm-4 col-md-4' style='padding: 0'><table style='width: 100%'>" +
            "<tr>" +
            "<th colspan='2' style='text-align: center;background-color: orangered;color:white;font-size: 14px'>SPECIFIKACIJE ZA : " + imageArray[i].imageCaption + "</th></tr>" +
            "<tr style='background-color: #f1f1f1;'><td>Proizvođač:</td><td>" + imageArray[i].proizvodjac + "</td></tr>" +
            "<tr><td>Širina:</td><td>" + imageArray[i].sirina + "</td></tr>" +
            "<tr style='background-color: #f1f1f1;'><td>Visina:</td><td>" + imageArray[i].visina + "</td></tr>" +
            "<tr><td>Prečnik:</td><td>" + imageArray[i].precnik + "</td></tr>" +
            "<tr style='background-color: #f1f1f1;'><td>Opterećenje:</td><td>" + imageArray[i].opterecenje + "</td></tr>" +
            "<tr><td>Indeks brzine:</td><td>" + imageArray[i].indeks_brzine + "</td></tr>" +
            "<tr style='background-color: #f1f1f1;'><td>Sezona:</td><td>" + imageArray[i].sezona + "</td></tr>" +
            "<tr><td>Garancija:</td><td>" + imageArray[i].garancija + "</td></tr></table></div> ");
    }


}

document.write("" +
    "<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>"+
    "<div class='modal-dialog'>"+
    "<div class='modal-content'>"+
    "<div class='modal-header'>"+
    "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>"+
    "<h4 class='modal-title' id='myModalLabel' style='color: #62C2E4'>Naručivanje</h4>"+

    "</div>"+
    "<div class='modal-bod' style='text-align:center'>Školski projekat - Poručivanje jos uvek nije dostupno.</div>" +
    "<div class='modal-footer'>"+
    "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>"+

    "</div>"+
    "</div>"+
    "</div>"+
    "</div>");

