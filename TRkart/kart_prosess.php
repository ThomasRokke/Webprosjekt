<?php

// Jeg definerer verdiene siden de aldri skal byttes
    define("DB_SERVER", "localhost");
	define("DB_USER", "my_cms");
	define("DB_PASS", "webprosjekt");
	define("DB_NAME", "my_company");

//mysqli
$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) 
{
	header('HTTP/1.1 500 Error: Kan ikke koble til database!'); 
	exit();
}

///////////////// Lagre/slette markører ///////////////

if($_POST) //kjør bare om det er post data
{
	//sørg for at forespørselen kommer fra Ajax 
	$xhr = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'; 
	if (!$xhr){ 
		header('HTTP/1.1 500 Error: Forespørsel må komme fra Ajax!'); 
		exit();	
	}
	
	// Få markør posisjon og split den opp for databasen 
	$mLatLang	= explode(',',$_POST["latlang"]);
	$mLat 		= filter_var($mLatLang[0], FILTER_VALIDATE_FLOAT);
	$mLng 		= filter_var($mLatLang[1], FILTER_VALIDATE_FLOAT);
	
	//Slett markør
	if(isset($_POST["del"]) && $_POST["del"]==true)
	{
		$resultat = $mysqli->query("DELETE FROM markers WHERE lat=$mLat AND lng=$mLng");
		if (!$resultat) {  
		  header('HTTP/1.1 500 Error: Kunne ikke slette markør!'); 
		  exit();
		} 
		exit("Done!");
	}
	
	$mName 		= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$mAddress 	= filter_var($_POST["address"], FILTER_SANITIZE_STRING);
	$mType		= filter_var($_POST["type"], FILTER_SANITIZE_STRING);
	
	$resultat = $mysqli->query("INSERT INTO markers (name, address, lat, lng, type) VALUES ('$mName','$mAddress',$mLat, $mLng, '$mType')");
	if (!$resultat) {  
		  header('HTTP/1.1 500 Error: Kunne ikke opprette markør!'); 
		  exit();
	} 
	
	$output = '<h1 class="marker-heading">'.$mName.'</h1><p>'.$mAddress.'</p>';
	exit($output);
}


///////////////   Fortsettelse i generering av Map XML   ////////////////////////

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
  $newnode->setAttribute("name",$obj->name);
  $newnode->setAttribute("address", $obj->address);  
  $newnode->setAttribute("lat", $obj->lat);  
  $newnode->setAttribute("lng", $obj->lng);  
  $newnode->setAttribute("type", $obj->type);	
}

echo $dom->saveXML();
