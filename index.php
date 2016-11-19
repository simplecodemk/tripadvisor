
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TripAdvisor</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta charset="utf-8">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
  </head>
  <body>
  <div class="container">
  <div class="header"><h> Trip Advisor </h> </div> 
  <div class="moto">  Find <strong> hotel </strong> for your vacation </div> <Br>
<div class="jumbotron">
<div class="row">
	<div class="col-md-4">
	<h id="error"> Wrong value, days value must be whole number less then 31 </h>
	<div class="btn-group">
  <button id="countryBtn" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Country <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#" onclick="bg()">Bulgaria</a></li>
    <li><a href="#" onclick="gr()">Greece</a></li>
    <li><a href="#" onclick="mk()">Macedonia</a></li>
  </ul>
</div>

	<div class="btn-group">
  <button id="countryBtn" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   City <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a id="citya" onclick="citya()" href="#"> Varna </a></li>
    <li><a id="cityb" onclick="cityb()" href="#"> Sofia </a></li>
    <li><a id="cityc" onclick="cityc()" href="#"> Blagoevgrad </a></li>
  </ul>
</div>
 <input id="daysNumber" type="text" class="form-control" placeholder="How many days?" aria-describedby="basic-addon1">
<button id="search" onclick="chose()" class="btn btn-warning"> Search </button>
<br>

</div>
<div id="chosen" class="col-md-4">
<h id="cH"> You have entered: </h> <br>
<button id="cCity" class="btn btn-warning"> not entered  </button>, 
<button id="cCountry" class="btn btn-warning"> not entered  </button>
<h id="cDays"> </h>
<button id="confirm" onclick="confirm()" class="btn btn-warning"> Confirm </button>
</div>
<div id="confirmBudget" class="col-md-4">
<h class="enterBudget"> Your <strong> budget </strong> in euros.</h>
 <input id="bdgNumber" type="text" class="form-control" placeholder="Enter your budget" aria-describedby="basic-addon1">
<button id="confirm" onclick="confirmbdg()" class="btn btn-warning"> Confirm </button></div>
</div>

</div>
<div id="final" class="jumbotron">
<Div class="row">
	<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." id="hotelImg" alt="...">
      <div class="caption">
        <h id="test">Thumbnail label</h>
        <p id="hotelInfo">...</p>
        <p><a id="book" href="#" class="btn btn-primary" role="button">Book</a> 
      </div>
    </div>
  </div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." id="whatToImg" alt="...">
      <div class="caption">
        <h id="whatTo">Thumbnail label</h>
        <p id="whatToVisit">...</p>
        <p><a href="#" class="btn btn-primary" role="button">Maps</a> 
      </div>
    </div>
  </div>
<div class="Col-md-4">
	<h id="totalDays"> With your budget you can afford:  </h> 
	<h id="totalInfo">  </h> 
</div>
</div>
	</div>
</div>
</div>
<!--

<div class="jumbotron">
<div class="row">
<div class="col-md-4">
<h id="budgetH"> How much money you have saved? </h> <br>
<input type="text" id="inputbudget" placeholder="Your budget">
<button class="btn btn-info" id="inputbudget" onClick="budget()"> Enter </button> </div>
<div class="col-md-4">
<div id="days">
	<h id="daysNm"> How many days will you stay? </h> <br>
	<input id="inputdays" type="text" placeholder="Number of days">
	<button class="btn btn-info" onClick="days()"> Enter </button>
</div>
</div>
<div class="col-md-4">
<div id="country">
<div class="btn-group" role="group" aria-label="...">
  <button type="button" onclick="bg()" class="btn btn-default">Bulgaria</button>
  <button type="button" onclick="gr()" class="btn btn-default">Greece</button>
  <button type="button" onclick="mk()" class="btn btn-default">Macedonia</button>
</div>
<div id="city">
<br>
	<div class="btn-group" role="group" aria-label="...">
  <button type="button" id="city1" class="btn btn-default">Sofia</button>
  <button type="button" id="city2" class="btn btn-default">Blagoevgrad</button>
  <button type="button" id="city3" class="btn btn-default">Vargas</button>
</div>
</div>

</div> -->
</div>
</div></div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">
var budget;
var days;
var city;
var country;
var budget;
var aprox;
var perday;
var daysTotal;
var a;
var hotel;
function budget() {
budget = document.getElementById('inputbudget').value; 
if (budget > 0 && budget <10000) {
document.getElementById('budgetH').innerHTML = "You have entered "+budget+" euros as your budget"; 
document.getElementById('days').style = "visibility: visible;";

}
else {
document.getElementById('budgetH').innerHTML = "Wrong input";
document.getElementById('inputbudget').value = "";
}
}
function days() {
days = document.getElementById('inputdays').value;
document.getElementById('daysNm').innerHTML = "You will stay "+days+" days";
document.getElementById('country').style = "visibility: visible;";
}

function bg() {
	country = "Bulgaria";
	document.getElementById('citya').innerHTML = "Sofia";
	document.getElementById('cityb').innerHTML = "Blagoevgrad";
	document.getElementById('cityc').innerHTML = "Varna";
	document.getElementById('city').style = "visibility: visible;";
}
function gr() {
	country = "Greece";
	document.getElementById('citya').innerHTML = "Atina";
	document.getElementById('cityb').innerHTML = "Solun";
	document.getElementById('cityc').innerHTML = "Paralia";
	document.getElementById('city').style = "visibility: visible;";
}
function mk() {
	country = "Macedonia";
	document.getElementById('citya').innerHTML = "Ohrid";
	document.getElementById('cityb').innerHTML = "Prespa";
	document.getElementById('cityc').innerHTML = "Dojran";
	document.getElementById('city').style = "visibility: visible;";
}
function citya() {
city = document.getElementById('citya').innerHTML;
}
function cityb() {
city = document.getElementById('cityb').innerHTML;
}
function cityc() {
city = document.getElementById('cityc').innerHTML;
}
function chose() {

days = document.getElementById('daysNumber').value;
if (days > 0 && days < 31) {
document.getElementById('chosen').style = "visibility: visible;";
document.getElementById('cCity').innerHTML = city;
document.getElementById('cCountry').innerHTML = country;
document.getElementById('cDays').innerHTML = "<br> You will stay for: "+days+" days."; 
document.getElementById('error').style = "visibility: hidden;"; }
else {
document.getElementById('error').style = "visibility: visible;";
}
}
function confirm() {
document.getElementById('confirmBudget').style = "visibility: visible; ";
}
function confirmbdg() {
budget = document.getElementById('bdgNumber').value;
if (city=="Blagoevgrad"){
if (budget>0 && budget<1000000) {
aprox = budget/days;
perday = 20;

document.getElementById('test').innerHTML = 'Where should i stay in '+city+"?";
document.getElementById('final').style = "visibility: visible;";
if (aprox<100) {
perday = 41;
hotel = "Rio";
document.getElementById("hotelImg").src = "/images/rio.jpg";
document.getElementById("whatToImg").src = "/images/ski.jpg";
document.getElementById('book').href = "http://www.booking.com/searchresults.bg.html?aid=356938;label=metagha-link-localuniversalBG-hotel-502311_dev-desktop_los-1_bw-3_dow-Tuesday_room-0_lang-bg_curr-BGN;sid=420a1bda02f7693fbe71d5ece6d1e5e2;checkin=2016-11-22;checkout=2016-11-23;dest_id=-832251;dest_type=city;highlighted_hotels=502311;hlrd=12;keep_landing=1;redirected=1;source=hotel&utm_campaign=BG&utm_content=los-1_bw-3_dow-Tuesday_lang-bg_curr-BGN&utm_medium=localuniversal&utm_source=metagha&utm_term=hotel-502311&";

document.getElementById("whatTo").innerHTML = "What to visit in Blagoevgrad? ";
document.getElementById("whatToVisit").innerHTML = "The ski resort Bansko is located in the Blagoevgrad Province (Bulgaria). For skiing and snowboarding, there are 48.2 km of slopes and 8.1 km of ski routes available. 14 lifts transport the guests. The winter sports area is situated between the elevations of 990 and 2,560 m.  ";
document.getElementById('hotelInfo').innerHTML = "<br>Hotel name: <b> RIO </b> <br> Hotel rating: <b> 3 </b> <br> <br> <strong> Adress: </strong> 'St.Dimitar Solunski', 2700 Blagoevgrad  <Br> <strong> Phone: </strong> 089 986 2198";}
else if (aprox>100){
perday = 120;
hotel = "Apart";
document.getElementById("hotelImg").src = "/images/apart.jpg";
document.getElementById("whatToImg").src = "/images/ski.jpg";
document.getElementById('hotelInfo').innerHTML = "<br>Hotel name: <b> APART </b> <br> Hotel rating: <b> 5 </b> <br> <br><strong> Adress: </strong> 'St.Beli Izvor', 2700 Blagoevgrad  <Br> <strong> Phone: </strong> 088 564 1241";
document.getElementById("whatTo").innerHTML = "What to visit in Blagoevgrad? ";
document.getElementById("whatToVisit").innerHTML = "The ski resort Bansko is located in the Blagoevgrad Province (Bulgaria). For skiing and snowboarding, there are 48.2 km of slopes and 8.1 km of ski routes available. 14 lifts transport the guests. The winter sports area is situated between the elevations of 990 and 2,560 m.  ";}

}
}
if (city=="Sofia"){
if (budget>0 && budget<1000000) {
aprox = budget/days;
document.getElementById('test').innerHTML = 'Where should i stay in '+city+"?";
document.getElementById('final').style = "visibility: visible;";
if (aprox<100) {
perday = 50;
hotel = "Vega";
document.getElementById("hotelImg").src = "/images/vega.jpg";
document.getElementById("whatToImg").src = "/images/nevski.jpg";
document.getElementById('book').href = "http://www.booking.com/searchresults.bg.html?aid=356938;label=metagha-link-localuniversalBG-hotel-502311_dev-desktop_los-1_bw-3_dow-Tuesday_room-0_lang-bg_curr-BGN;sid=420a1bda02f7693fbe71d5ece6d1e5e2;checkin=2016-11-22;checkout=2016-11-23;dest_id=-832251;dest_type=city;highlighted_hotels=502311;hlrd=12;keep_landing=1;redirected=1;source=hotel&utm_campaign=BG&utm_content=los-1_bw-3_dow-Tuesday_lang-bg_curr-BGN&utm_medium=localuniversal&utm_source=metagha&utm_term=hotel-502311&";

document.getElementById("whatTo").innerHTML = "What to visit in Sofia? ";
document.getElementById("whatToVisit").innerHTML = "The St. Alexander Nevsky Cathedral (Bulgarian: Храм-паметник „Свети Александър Невски“, Hram-pametnik „Sveti Aleksandar Nevski“) is a Bulgarian Orthodox cathedral in Sofia, the capital of Bulgaria. Built in Neo-Byzantine style, it serves as the cathedral church of the Patriarch of Bulgaria and it is one of the largest Eastern Orthodox cathedrals in the world, as well as one of Sofia's symbols and primary tourist attractions. ";
document.getElementById('hotelInfo').innerHTML = "<br>Hotel name: <b> VEGA </b> <br> Hotel rating: <b> 3 </b> <br> <br><strong> Adress: </strong> 'bul. Doktor Ofboli', 2700 Sofia  <Br> <strong> Phone: </strong> 089 986 3498";}
else if (aprox>100){
perday = 134;
hotel = "Hiltan";
document.getElementById("hotelImg").src = "/images/hiltan.jpg";
document.getElementById("whatToImg").src = "/images/nevski.jpg";
document.getElementById('hotelInfo').innerHTML = "<br>Hotel name: <b> HILTAN </b> <br> Hotel rating: <b> 4.5 </b> <br> <br><strong> Adress: </strong> 'St.Beli Izvor', 2700 Sofia  <Br> <strong> Phone: </strong> 088 564 6976";
document.getElementById("whatTo").innerHTML = "What to visit in Sofia? ";
document.getElementById("whatToVisit").innerHTML = "The St. Alexander Nevsky Cathedral (Bulgarian: Храм-паметник „Свети Александър Невски“, Hram-pametnik „Sveti Aleksandar Nevski“) is a Bulgarian Orthodox cathedral in Sofia, the capital of Bulgaria. Built in Neo-Byzantine style, it serves as the cathedral church of the Patriarch of Bulgaria and it is one of the largest Eastern Orthodox cathedrals in the world, as well as one of Sofia's symbols and primary tourist attractions. ";}

}
}
if (city=="Varna"){
if (budget>0 && budget<1000000) {
aprox = budget/days;
document.getElementById('test').innerHTML = 'Where should i stay in '+city+"?";
document.getElementById('final').style = "visibility: visible;";
if (aprox<100) {
perday = 34;
hotel = "Detelina";
document.getElementById("hotelImg").src = "/images/detelina.jpg";
document.getElementById("whatToImg").src = "/images/sea.jpg";
document.getElementById('book').href = "http://www.booking.com/searchresults.bg.html?aid=356938;label=metagha-link-localuniversalBG-hotel-502311_dev-desktop_los-1_bw-3_dow-Tuesday_room-0_lang-bg_curr-BGN;sid=420a1bda02f7693fbe71d5ece6d1e5e2;checkin=2016-11-22;checkout=2016-11-23;dest_id=-832251;dest_type=city;highlighted_hotels=502311;hlrd=12;keep_landing=1;redirected=1;source=hotel&utm_campaign=BG&utm_content=los-1_bw-3_dow-Tuesday_lang-bg_curr-BGN&utm_medium=localuniversal&utm_source=metagha&utm_term=hotel-502311&";

document.getElementById("whatTo").innerHTML = "What to visit in Varna? ";
document.getElementById("whatToVisit").innerHTML = "The Seaside Garden (Bulgarian: Морска градина, Morska gradina) is the Bulgarian port city of Varna's largest, oldest and best known public park, also said to be the largest landscaped park in the Balkans. Located along the city's coast on the Black Sea, it is an important tourist attraction and a national monument of landscape architecture. ";
document.getElementById('hotelInfo').innerHTML = "<br>Hotel name: <b> DETELINA </b> <br> Hotel rating: <b> 3.5 </b> <br> <br><strong> Adress: </strong> 'bul. Goce Delchev', 2100 Varna  <Br> <strong> Phone: </strong>  052 356 608";}
else if (aprox>100){
perday = 157;
hotel = "Modus";
document.getElementById("hotelImg").src = "/images/modus.jpg";
document.getElementById("whatToImg").src = "/images/nevski.jpg";
document.getElementById('hotelInfo').innerHTML = "<br>Hotel name: <b> MODUS </b> <br> Hotel rating: <b> 4.5 </b> <br> <br><strong> Adress: </strong> 'ul. Stefan Stambalov', 46, 9000 Varna  <Br> <strong> Phone: </strong> 088 564 6976";
document.getElementById("whatTo").innerHTML = "What to visit in Sofia? ";
document.getElementById("whatToVisit").innerHTML = "The St. Alexander Nevsky Cathedral (Bulgarian: Храм-паметник „Свети Александър Невски“, Hram-pametnik „Sveti Aleksandar Nevski“) is a Bulgarian Orthodox cathedral in Sofia, the capital of Bulgaria. Built in Neo-Byzantine style, it serves as the cathedral church of the Patriarch of Bulgaria and it is one of the largest Eastern Orthodox cathedrals in the world, as well as one of Sofia's symbols and primary tourist attractions. ";}

}
}
if (budget/perday > days) {
a = budget - (days*perday);
document.getElementById("totalInfo").innerHTML = "Room for one person in hotel " + hotel + " per day is: " +perday + " euros<Br>+ You can afford to stay all "+days + " days <Br> + Money left: " + a + " euros";
}
else 
{
b = 0;
while (budget / perday > 1 ) {
	budget = budget - perday;
	b = b+1;
}

document.getElementById("totalInfo").innerHTML = "Person perday in hotel " + hotel + " is " + perday + "euros <br>You can not afford all " + days + " days in hotel "+ hotel + " <Br> You can stay only  " + b + " days";
}


}
 
</script>
  </body>
</html>

