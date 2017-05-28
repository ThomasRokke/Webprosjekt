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



// Select alle radene i markers tabellen

$resultat = $mysqli->query("SELECT * FROM markers WHERE 1");

if (!$resultat) {  

	header('HTTP/1.1 500 Error: Kunne ikke hente markører!'); 

	exit();

} 

//setter dokument headeren til text/xml

header("Content-type: text/xml"); 

// Iterer igjennom radene, og legger til XML nodes for hver enkelt

while($obj = $resultat->fetch_object())

{

  $node = $dom->createElement("marker");  

  $newnode = $parnode->appendChild($node);

  $newnode->setAttribute("id",$obj->id);

  $newnode->setAttribute("name",$obj->name);

  $newnode->setAttribute("address",$obj->address);

  $newnode->setAttribute("lat", $obj->lat);  

  $newnode->setAttribute("lng", $obj->lng);  

  $newnode->setAttribute("type", $obj->type);

}

echo $dom->saveXML();