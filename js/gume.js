

jQuery(document).on('click', '.mega-dropdown', function(e) {
    e.stopPropagation()
});
var imageArray = new Array();
imageArray[0] = new Image();
imageArray[0].src = "gume/tigar.jpg";
imageArray[0].imageCaption = "TIGAR 225/40 R18 Wintera 92V XL TL";
imageArray[0].imagePrice = "Cena : 4.123,00 RSD";
imageArray[0].url = 'tigar225.php';


imageArray[1] = new Image();
imageArray[1].src = "gume/tigar.jpg";
imageArray[1].imageCaption = "TIGAR 215/55 R16 Wintera 97H TL XL";
imageArray[1].imagePrice = "Cena : 6.623,00 RSD";
imageArray[1].url = 'tigar215.php';

imageArray[2] = new Image();
imageArray[2].src = "gume/cor.jpg";
imageArray[2].imageCaption = "CORDIANT 205/65 R15 Winter Drive ";
imageArray[2].imagePrice = "Cena : 5.283,00 RSD";
imageArray[2].url = 'cordiant205.php';

imageArray[3] = new Image();
imageArray[3].src = "gume/tigar.jpg";
imageArray[3].imageCaption = "GOODYEAR 220/60 R19 Winter Drive";
imageArray[3].imagePrice = "Cena : 12.232,00";
imageArray[3].url = 'goodyear220.php';
imageArray[3].proizvodjac = 'MICHELIN';
imageArray[3].sirina = '220';
imageArray[3].visina = '60';
imageArray[3].precnik = '19';
imageArray[3].opterecenje = '90';
imageArray[3].indeks_brzine = 'V (230 km/h)';
imageArray[3].sezona = 'Zimska';
imageArray[3].garancija = '36 meseci';

imageArray[4] = new Image();
imageArray[4].src = "gume/tigar.jpg";
imageArray[4].imageCaption = "MICHELIN 220/35 R15 Winter Drive";
imageArray[4].imagePrice = "Cena : 5.600,00 RSD";
imageArray[4].url = 'michelin210.php';
imageArray[4].proizvodjac = 'MICHELIN';
imageArray[4].sirina = '220';
imageArray[4].visina = '35';
imageArray[4].precnik = '15';
imageArray[4].opterecenje = '80';
imageArray[4].indeks_brzine = 'V (230 km/h)';
imageArray[4].sezona = 'Zimska';
imageArray[4].garancija = '36 meseci';

imageArray[5] = new Image();
imageArray[5].src = "gume/tigar.jpg";
imageArray[5].imageCaption = "NOKIAN 210/70 R13 Winter Drive";
imageArray[5].imagePrice = "Cena : 4.099,00 RSD";
imageArray[5].url = 'nokian210.php';
imageArray[5].proizvodjac = 'NOKIAN';
imageArray[5].sirina = '210';
imageArray[5].visina = '70';
imageArray[5].precnik = '13';
imageArray[5].opterecenje = '60';
imageArray[5].indeks_brzine = 'V (190 km/h)';
imageArray[5].sezona = 'Zimska';
imageArray[5].garancija = '36 meseci';

imageArray[6] = new Image();
imageArray[6].src = "gume/tigar.jpg";
imageArray[6].imageCaption = "SAVA 210/70 R13 Winter Drive";
imageArray[6].imagePrice = "Cena : 8.799,00 RSD";
imageArray[6].url = 'sava210.php';
imageArray[6].proizvodjac = 'SAVA';
imageArray[6].sirina = '210';
imageArray[6].visina = '70';
imageArray[6].precnik = '13';
imageArray[6].opterecenje = '60';
imageArray[6].indeks_brzine = 'V (190 km/h)';
imageArray[6].sezona = 'Zimska';
imageArray[6].garancija = '36 meseci';

imageArray[7] = new Image();
imageArray[7].src = "gume/starfire-wt-200.jpg";
imageArray[7].imageCaption = "STARFIRE 155/70 R13 RS-C 2 75T";
imageArray[7].imagePrice = "Cena : 2.889,00 RSD";
imageArray[7].url = 'starfire155.php';
imageArray[7].proizvodjac = 'STARFIRE';
imageArray[7].sirina = '155';
imageArray[7].visina = '70';
imageArray[7].precnik = '13';
imageArray[7].opterecenje = '75';
imageArray[7].indeks_brzine = 'V (215 km/h)';
imageArray[7].sezona = 'Zimska';
imageArray[7].garancija = '36 meseci';

imageArray[8] = new Image();
imageArray[8].src = "gume/starfire-wt-200.jpg";
imageArray[8].imageCaption = "STARFIRE 195/60 R14    Wintera 80V XL ";
imageArray[8].imagePrice = "Cena : 4.530,00 RSD";
imageArray[8].url = 'tigar215.php';
imageArray[8].proizvodjac = 'STARFIRE';
imageArray[8].sirina = '195';
imageArray[8].visina = '60';
imageArray[8].precnik = '14';
imageArray[8].opterecenje = '80';
imageArray[8].indeks_brzine = 'V (220 km/h)';
imageArray[8].sezona = 'Zimska';
imageArray[8].garancija = '36 meseci';





console.log(imageArray);

function displayAllImages() {

    for (i=0;i<imageArray.length;i++) {
        document.write("" +
            "<div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span>" +
            "<img src='" + imageArray[i].src + "' alt='"+ imageArray[i].imageCaption+"'  class='img-responsive'  /></span>" +
            "<h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>" +
            "<img src='ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span>" +
            "<div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>" + imageArray[i].imageCaption + "</span><br /><br /><span style='color: #428bca'>" + imageArray[i].imagePrice + "</span><br/>" +
            "<span><br /><a href=" + imageArray[i].url + "><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>" +
            "</span></div></div>");
    }


}
$count = imageArray.length;
console.log($count);



