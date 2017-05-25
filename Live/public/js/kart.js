$(document).ready(function() {



	var mapCenter = new google.maps.LatLng(59.923339, 10.752497); //Google map Coordinates
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
                    "featureType": "all",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ad3f3f"
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "gamma": 0.01
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "saturation": -31
                        },
                        {
                            "lightness": -33
                        },
                        {
                            "weight": 2
                        },
                        {
                            "gamma": 0.8
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#00ff49"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#00ff08"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "lightness": 30
                        },
                        {
                            "saturation": 30
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "saturation": 20
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "lightness": 20
                        },
                        {
                            "saturation": -20
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "hue": "#00ff28"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "lightness": 10
                        },
                        {
                            "saturation": -30
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "saturation": 25
                        },
                        {
                            "lightness": 25
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#00ff10"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "lightness": -20
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#12ff55"
                        }
                    ]
                }
            ], {
                name: 'Custom Style3'
            });

            var customMapTypeId4 = 'custom_style4';

            var customMapType4 = new google.maps.StyledMapType([
                {
                    "featureType": "water",
                    "stylers": [
                        {
                            "saturation": 43
                        },
                        {
                            "lightness": -11
                        },
                        {
                            "hue": "#0088ff"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "hue": "#ff0000"
                        },
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 99
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#808080"
                        },
                        {
                            "lightness": 54
                        }
                    ]
                },
                {
                    "featureType": "landscape.man_made",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ece2d9"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ccdca1"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#767676"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#b8cb93"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.sports_complex",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.medical",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                }
            ], {
                name: 'Custom Style4'
            });



		   	map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);

            map.addListener('rightclick', function() {

              // var myWindow =  window.open("https://www.youtube.com/watch?v=YQ2xtWgBlzk", "", "width=100, height=100, left=700");
                f();

            });

            var i = 0, hvorMangeGanger = 55;
            var byttIndex = 0;
            function f() {
                byttIndex++;
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
                    byttIndex = 0;
                }

                i++;
                if( i < hvorMangeGanger ){
                    setTimeout( f, 150);
                }
                else{
                    map.mapTypes.set(customMapTypeId4, customMapType4);
                    map.setMapTypeId(customMapTypeId4);
                }
            }


			//Hent markører fra XML filen, se (kart_prosess.php)
            //Her har jeg brukt JQuery da veileder som hjalp til ikke fikk til samme effekt med JavaScript. 
			$.get("kart_prosess.php", function (data) {
				$(data).find("marker").each(function () {
                      var id        = $(this).attr('id'); //Setter XML til en JS variabel
					  var name 		= $(this).attr('name'); // -----,----- 
					  var address 	= '<p>'+ $(this).attr('address') +'</p>'; //setter XML address til JS, og omkapsler det med <p> tags. 
                    
					  // Her henter den in lat og lng (koordinater) fra XML filen. Ved hjelp av en funksjon i google sin API blir de klartgjort
                      // For bruk. De blir også parset slik at riktig datatype som google.maps.LatLng krever. 
					  var kartPos 	= new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
                   
                      var type = $(this).attr('type'); //Setter XML til en JS variabel. 
                    
                        //Kaller på funksjonen lag_pin og gir den de nylig inhentede JS variablene som parametere.                 
                    
                        lag_pin(kartPos, name, address, false, false, type, id);
                   
                    
                    
					  
				});
			});
   
}


    
    
        function lag_pin(kartPosisjon, kartTittel, kartBeskrivelse,  infoVinduOpenDefault, flyttbar, type, id)
	{	  	  		  

        var ikon = ''; //deklarerer en varabel som skal ta vare på ikon navn.
        
        // Ut i hva hvilken type(kategori) markører en så settes det riktig ikon. 
        switch(type){
            case 'mat':
                ikon = 'food.svg';
                break;
            case 'aktivitet':
                ikon = 'alc.svg';
                break;
            case 'event':
                ikon = 'cal1.svg';
                break; 
            default:
                ikon = 'bank.svg';
        }

		// Kode for å opprette en ny markør
		var pin = new google.maps.Marker({
			position: kartPosisjon, //Hvilken posisjon markøren skal dukke opp på
			map: map, 
			draggable:flyttbar, //Boolean om det er mulig å flytte på markøren - det er det ikke. 
			animation: google.maps.Animation.BOUNCE,
			title:"Wzup world!",
			icon: ikon //Hvilket ikon som blir brukt på kartet - avhenger av type
            
		});


        var lydklipp = document.getElementById('audio'); //Henter inn ID som er satt på HTML audio tag
        
        //En funksjon som blir trigget når det høyreklikkes på kartet. Da starter animasjonen og musikken blir avspilt. 
        function partyBryter() {
            if (pin.getAnimation() !== null) { 
                pin.setAnimation(null);

            }
            else{
                pin.setAnimation(google.maps.Animation.BOUNCE); //Sett markør animasjon til BOUNCE. 

                lydklipp.play(); //spill musikk
            }
        }

        map.addListener('rightclick', partyBryter); //Starter partyBryter funksjonen. aka. starter DISCO PARTY

        // Når du trykker eller avslutter en "drag" så stopper animasjonen som ble startet av partyBryter ^
        // Dette er for å stoppe animasjonen til markørene etter 
        map.addListener('click', avBryter);
        map.addListener('dragend', avBryter);
        map.addListener('mouseover', avBryter);
        
        
        //Funksjonen som avbryter animasjonen
        function avBryter() {
            if (pin.getAnimation() !== null) {
                pin.setAnimation(null);

            }
        }

		////Innhold  til infoWindow for markørene
        var contentString = $('<div class="marker-info-win">'+
            '<div class="marker-inner-win"><span class="info-content">'+
            '<h1 class="marker-heading">'+kartTittel+'</h1>'+
            kartBeskrivelse+
            '</span><a href="merinfo.php?id='+id+'#merInfoAnchor"<button name="til-nettside" class="til-nettside" title="Til Nettside">Mer Info</button></a>'+
            '</div></div>');

		
		//opprett et infoWindow
		var infowindow = new google.maps.InfoWindow();
		//setter innholdet til infoWindow
		infowindow.setContent(contentString[0]);
        
        //legger til click listener på knappen		 
		google.maps.event.addListener(pin, 'click', function() {
				infowindow.open(map,pin); // når du klikker på markører åpner info window seg 
	    });
		  
		if(infoVinduOpenDefault) //om infoWindow skal åpnes som default
		{
		  infowindow.open(map,pin);
		}
	
    }


    
});