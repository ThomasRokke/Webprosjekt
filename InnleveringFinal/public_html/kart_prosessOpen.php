<?php



// Jeg definerer verdiene siden de aldri skal byttes

    	define("DB_SERVER", "localhost:3306");
	define("DB_USER", "roktho16_thomas");
	define("DB_PASS", "MU8GTHJBXE66");
	define("DB_NAME", "roktho16_wzup");



//mysqli

$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);



if (mysqli_connect_errno()) 

{

	header('HTTP/1.1 500 Error: Kan ikke koble til database!'); 

	exit();

}



//Lag et nytt DOMDocument objekt

$dom = new DOMDocument("1.0");

$node = $dom->createElement("markers"); //lag ny element node

$parnode = $dom->appendChild($node); //få noden til å dukke opp


date_default_timezone_set('Europe/Berlin');

$engDay = date('l');

$time = date('His');



$day = "";

switch($engDay) {
    case "Monday":
        $day = "Mandag";
        break;
    case "Tuesday":
        $day = "Tirsdag";
        break;
    case "Wednesday":
        $day = "Onsdag";
        break;
    case "Thursday":
        $day = "Torsdag";
        break;
    case "Friday":
        $day = "Fredag";
        break;
    case "Saturday":
        $day = "Lordag";
        break;
    case "Sunday":
        $day = "Sondag";
        break;

}



if($time > 000000 && $time < 050000 ) {

    switch($engDay) {
        case "Monday":
            $day = "Sondag";
            break;
        case "Tuesday":
            $day = "Mandag";
            break;
        case "Wednesday":
            $day = "Tirsdag";
            break;
        case "Thursday":
            $day = "Onsdag";
            break;
        case "Friday":
            $day = "Torsdag";
            break;
        case "Saturday":
            $day = "Fredag";
            break;
        case "Sunday":
            $day = "Lordag";
            break;

    }

    $resultat = $mysqli->query("SELECT * FROM markers AS ma join OpeningHours AS oh on ma.id = oh.BarId JOIN Days AS da on
        oh.DayId = da.DayId WHERE oh.EndTime > 000000 && oh.EndTime < 050000 && da.Weekday = '$day'");
}
else{
    $resultat = $mysqli->query("SELECT * FROM markers AS ma join OpeningHours AS oh on ma.id = oh.BarId JOIN Days AS da on
        oh.DayId = da.DayId WHERE (oh.EndTime > $time || oh.EndTime BETWEEN 000000 AND 050000) && oh.StartTime < $time && da.Weekday = '$day';");
}
if (!$resultat) {  

	header('HTTP/1.1 500 Error: Kunne ikke hente marker!'); 

	exit();

} 


//setter dokument headeren til text/xml

header("Content-type: application/json"); 
$resultArray = $resultat->fetch_all(MYSQLI_ASSOC);
		echo json_encode($resultArray);



