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
				style: google.maps.ZoomControlStyle.LARGE, //zoom control size
                    position: google.maps.ControlPosition.BOTTOM
			},

				scaleControl: true, // enable scale control





			};

            var customMapTypeId = 'custom_style';
            var customMapType = new google.maps.StyledMapType([
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#242f3e"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#746855"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#242f3e"
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#d59563"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#d59563"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#263c3f"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#6b9a76"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#38414e"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#212a37"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9ca5b3"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#746855"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#1f2835"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#f3d19c"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#2f3948"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#d59563"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#17263c"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#515c6d"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#17263c"
                        }
                    ]
                }
            ], {
                name: 'Custom Style'
            });


            var customMapTypeId2 = 'custom_style2';
            var customMapType2 = new google.maps.StyledMapType([
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#6f9ba5"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8ec3b9"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#1a3646"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#4b6878"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#64779e"
                        }
                    ]
                },
                {
                    "featureType": "administrative.province",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#4b6878"
                        }
                    ]
                },
                {
                    "featureType": "landscape.man_made",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#334e87"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#023e58"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#283d6a"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#6f9ba5"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#6f9ba5"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#023e58"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#3C7680"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#304a7d"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#98a5be"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#1d2c4d"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#2c6675"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#255763"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#b0d5ce"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#023e58"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#98a5be"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#1d2c4d"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#283d6a"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#3a4762"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#0e1626"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#00ff40"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#4e6d70"
                        }
                    ]
                }
            ], {
                name: 'Custom Style'
            });


            var customMapTypeId3 = 'custom_style3';

            var customMapType3 = new google.maps.StyledMapType([
                {
                    stylers: [
                        {hue: '#823420'},
                        {visibility: 'simplified'},
                        {gamma: 0.5},
                        {weight: 0.5}
                    ]
                },
                {
                    elementType: 'labels',
                    stylers: [{visibility: 'on'}]
                },
                {
                    featureType: 'water',
                    stylers: [{color: '#470000'}]
                }
            ], {
                name: 'Custom Style3'
            });



		   	map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);

            map.addListener('click', function() {
                f();

            });

            var i = 0, hvorMangeGanger = 50;
            var byttIndex = 0;
            function f() {
                if(byttIndex == 0){
                    map.mapTypes.set(customMapTypeId, customMapType);
                    map.setMapTypeId(customMapTypeId);
                }
                else if(byttIndex == 1){
                    map.mapTypes.set(customMapTypeId2, customMapType2);
                    map.setMapTypeId(customMapTypeId2);
                }
                else if(byttIndex == 2){
                    map.mapTypes.set(customMapTypeId3, customMapType3);
                    map.setMapTypeId(customMapTypeId3);
                }
                else if(byttIndex == 3){
                    byttIndex = -1;
                }
                byttIndex++;
                i++;
                if( i < hvorMangeGanger ){
                    setTimeout( f, 700);
                }
            }


			//Hent markører fra XML filen, se (kart_prosess.php)
			$.get("kart_prosess.php", function (data) {
				$(data).find("marker").each(function () {
					  var name 		= $(this).attr('name');
					  var address 	= '<p>'+ $(this).attr('address') +'</p>';
					  
					  var point 	= new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
                   
                      var type = $(this).attr('type');
                    
                        lag_pin(point, name, address, false, false, false, type);
                   
                    
                    
					  
				});
			});
   
}


    
        function lag_pin(MapPos, MapTitle, MapDesc,  InfoOpenDefault, DragAble, Removable, type)
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
		var pin = new google.maps.Marker({
			position: MapPos,
			map: map,
			draggable:DragAble,
			animation: google.maps.Animation.BOUNCE,
			title:"Hello World!",
			icon: ikon
            
		});



        function bryter() {
            if (pin.getAnimation() !== null) {
                pin.setAnimation(null);
            }
        }

        map.addListener('click', bryter);
        map.addListener('drag', bryter);


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
		google.maps.event.addListener(pin, 'click', function() {
				infowindow.open(map,pin); // click på markør åpnerinfoWindow

	    });
		  
		if(InfoOpenDefault) //om infoWindow skal åpnes som default
		{
		  infowindow.open(map,pin);
		}
	
    }


    
});