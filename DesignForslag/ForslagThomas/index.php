<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

    <title>Wzup?</title>
    
    <link href="index.css" type="text/css" rel="stylesheet">
    
    <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUOSBwWQ1fKQHF-40kF5kK4h_h4VYA46U"></script>

</head>
<body>

<div id="main">
    
    <div id="side-menu">
        
        <div id="header"><h1 id="header-text">WZup? </h1></div>
        <hr id="header-hr">
        
        <div id="menu">
        
            <ul>
            
                <li>Om oss</li>
                <li>For partnere</li>
                <li>For studenter</li>
                <br>
    
                <li>Utesteder</li>
                <li>Mat og drikke</li>
                <li>Arrangementer</li>
            
            </ul>
        
        
        </div>
        
        <div id="today">
        <h1 id="todayTekst">Skjer idag?</h1>
        <ul id="today-ul">
            <li>18:00 - Konsert </li>    
            <li>19:00 - Bakekurs</li>
            <li>19:30 - Gudstjeneste</li>
            <li>20:00 - Stand-up</li>
            <li>22:00 - Konsert</li>
           
        </ul>
        
        </div>
        
        
    </div>
    
    <div id="side">
       <div id="line"></div>
        <div id="circle1" class="circle">
            <img class="ikon" src="drink.png">
        </div>
        <div id="circle2" class="circle">
            <img class="ikon" src="mat.png">
        </div>
        <div id="circle3" class="circle">
            <img class="ikon" src="event.png">
        </div>
         
    
    
    </div>
    <!-- Dette er kode for å få inn et veldig basic kart -->
    <div id="google_map">
        

    </div>
    
</div>

</body>
    
<script type="text/javascript">
$(document).ready(function() {
	var mapCenter = new google.maps.LatLng(59.916158, 10.759654); //Google map Coordinates
	var map;
	
	map_initialize(); // initialize google map
	
	//############### Google Map Initialize ##############
	function map_initialize()
	{
			var googleMapOptions = 
			{ 
				center: mapCenter, // map center
				zoom: 16, //zoom level, 0 = earth view to higher value
				maxZoom: 25,
				minZoom: 10,
				zoomControlOptions: {
				style: google.maps.ZoomControlStyle.LARGE //zoom control size
			},
				scaleControl: true, // enable scale control
				mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
			};
		
		   	map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);			
			
			//Load Markers from the XML File, Check (map_process.php)
			$.get("map_process.php", function (data) {
				$(data).find("marker"). each(function () {
					  var name 		= $(this).attr('name');
					  var address 	= '<p>'+ $(this).attr('address') +'</p>';
					  var type 		= $(this).attr('type');
					  var point 	= new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
                   
                   
                   
                    
                    create_marker(point, name, address, false, false, false, type);
                   
                    
                    
					  
				});
			});
   
        }
       
    
        function create_marker(MapPos, MapTitle, MapDesc,  InfoOpenDefault, DragAble, Removable, type)
	{	  	  		  
		
        var ikon = ''; //deklarerer en varabel som skal ta vare på ikon navn. 
        
        switch(type){
            case 'mat':
                ikon = 'food.svg';
                break;
            case 'bar':
                ikon = 'alc.svg';
                break;
            case 'event':
                ikon = 'cal.svg';   
                break; 
            default:
                ikon = 'food.svg'; 
        }
       
		//new marker
		var marker = new google.maps.Marker({
			position: MapPos,
			map: map,
			draggable:DragAble,
			animation: google.maps.Animation.DROP,
			title:"Hello World!",
			icon: ikon
            
		});
       
    
      
        
    
		
		//Content structure of info Window for the Markers
		var contentString = $('<div class="marker-info-win">'+
		'<div class="marker-inner-win"><span class="info-content">'+
		'<h1 class="marker-heading">'+MapTitle+'</h1>'+
		MapDesc+ 
		'</span><button name="remove-marker" class="remove-marker" title="Remove Marker">Til nettside</button>'+
		'</div></div>');	
		
		//Create an infoWindow
		var infowindow = new google.maps.InfoWindow();
		//set the content of infoWindow
		infowindow.setContent(contentString[0]);
        
        //add click listner to save marker button		 
		google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker); // click on marker opens info window 
	    });
		  
		if(InfoOpenDefault) //whether info window should be open by default
		{
		  infowindow.open(map,marker);
		}
	
    }
    
    
});
    
</script>
</html>