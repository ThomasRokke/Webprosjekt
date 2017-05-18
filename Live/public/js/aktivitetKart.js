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
                scrollwheel: false,
				zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL //zoom control size
			},
				scaleControl: true, // enable scale control
				mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
			};
		
		   	map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);			
			
			//Hent markører fra XML filen, se (kart_prosess.php)
			$.get("kart_prosess.php", function (data) {
				$(data).find("marker").each(function () {
					  var name 		= $(this).attr('name');
					  var address 	= '<p>'+ $(this).attr('address') +'</p>';
					  
					  var point 	= new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
                   
                      var type = $(this).attr('type');
                    
                        if(type == 'aktivitet'){
                        create_marker(point, name, address, false, false, false, type);
                        }
                    
                    
					  
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
            case 'aktivitet':
                ikon = 'alc.svg';
                break;
            case 'event':
                ikon = 'cal.svg';
                break; 
            default:
                ikon = 'bank.svg'; 
        }
       
		//ny markør
		var marker = new google.maps.Marker({
			position: MapPos,
			map: map,
			draggable:DragAble,
			animation: google.maps.Animation.DROP,
			title:"Hello World!",
			icon: ikon
            
		});
       
		
		////Innhold struktur til info Window for markørene
		var contentString = $('<div class="marker-info-win">'+
		'<div class="marker-inner-win"><span class="info-content">'+
		'<h1 class="marker-heading">'+MapTitle+'</h1>'+
		MapDesc+ 
		'</span><button name="til-nettside" class="til-nettside" title="Til Nettside">Mer Info</button>'+
		'</div></div>');	

		
		//Lag et infoWindow
		var infowindow = new google.maps.InfoWindow();
		//setter innholdet til infoWindow
		infowindow.setContent(contentString[0]);
        
        //legger til click listener på knappen		 
		google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker); // click på markør åpnerinfoWindow
	    });
		  
		if(InfoOpenDefault) //om infoWindow skal åpnes som default
		{
		  infowindow.open(map,marker);
		}
	
    }
    
    
});