$(document).ready(function() {


					 	 
	var mapCenter = new google.maps.LatLng(59.921119, 10.757408); //Google map Coordinates
	var map;

	kart_init(); // initialize google map

	// Starter google maps
	function kart_init()
{

			var kartEgenskaper =
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
            
    
            // For å få til denne "disco" effekten når man høyreklikker på kartet må jeg definere flere sett med "styles" som funksjonen bruker for å bytte stil
            // Jeg har brukt en style generator, der verdiene har blitt justert ved hjelp av programmvaren link: www.mapstyle.withgoogle.com
            // Her eksporterer man style i JSON format - der har har blitt klippet og limt inn under. 
            var customMapTypeId = 'custom_style';
            var customMapType = new google.maps.StyledMapType([
  {
    "featureType": "road.arterial",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#3efd43"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#3efd43"
      },
      {
        "weight": 2
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ef4bce"
      },
      {
        "weight": 3.5
      }
    ]
  }
], {
                name: 'Custom Style'
            });


            var customMapTypeId2 = 'custom_style2';
            var customMapType2 = new google.maps.StyledMapType([
  {
    "featureType": "road.arterial",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ff0080"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ff0080"
      },
      {
        "weight": 2
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffff00"
      },
      {
        "weight": 2.5
      }
    ]
  }
], {
                name: 'Custom Style'
            });


            var customMapTypeId3 = 'custom_style3';

            var customMapType3 = new google.maps.StyledMapType([
  {
    "featureType": "road.arterial",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#0000a0"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#0cff00"
      },
      {
        "weight": 2
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#00fc0c"
      },
      {
        "weight": 2.5
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



		   	map = new google.maps.Map(document.getElementById("google_map"), kartEgenskaper);

    
            // Legger til en map listener når brukeren høyreklikker på kartet og kaller på funksjonen styleStrobe 
            map.addListener('rightclick', function() {

              
                styleStrobe();

            });

            // Denne funksjonen endrer stilen på kartet i et fast tempo for å simulere disco, eller da party lys. 
            // Helt unødvendig funksjon, men viktig å prokrastinere til TK eksamen ved å bruke timesvis på dette. hehe. 
            // Det er satt opp en timeout funksjon slik at loopen ikke går for raskt. Antall ganger er deklarert under. 
            // setTimeOut sin parametere setter en tids
        
            var i = 0, hvorMangeGanger = 55;
            var byttIndex = 0;
    
            function styleStrobe() {
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
                    setTimeout( styleStrobe, 150);
                }
                else{
                    map.mapTypes.set(customMapTypeId4, customMapType4);
                    map.setMapTypeId(customMapTypeId4);
                }
            }


			$.get('kart_prosess.php', {dataType: 'json'}, function(data) {
  			//console.log(data); Debug - 
  			data.forEach(function(row) {
   			 var id = row.id;
   		 	var kartPos 	= new google.maps.LatLng(row.lat, row.lng);
			 var name = row.name; 
			 var address = row.address;
			 var type = row.type; 

			 if(type == 'aktivitet') {
			 lag_pin(kartPos, name, address, false, false, type, id);
			 }

 			 });
			});
   
}

        // Dette er funksjonen som opprretter markører på kartet. Den tar i mot flere parametere og blir kalt ovenfor når data er hentet fra XML (kart_prosess.php)
    
        function lag_pin(kartPosisjon, kartTittel, kartBeskrivelse,  infoVinduOpenDefault, flyttbar, type, id)
	{	  	  		  

        var ikon = ''; //deklarerer en varabel som skal ta vare på ikon navn.
        
        // Ut i hva hvilken type(kategori) markører en så settes det riktig ikon. 
        switch(type){
            case 'mat':
                ikon = 'mat.svg';
                break;
            case 'aktivitet':
                ikon = 'aktivitet.svg';
                break;
            case 'cafe':
                ikon = 'coffe.svg';
                break; 
	    case 'butikk':
                ikon = 'store.svg';
                break; 

	    case 'bar':
                ikon = 'bar.svg';
                break; 
            default:
                ikon = 'mat.svg';
        }

		// Kode for å opprette en ny markør
		var pin = new google.maps.Marker({
			position: kartPosisjon, //Hvilken posisjon markøren skal dukke opp på
			map: map, 
			draggable:flyttbar, //Boolean om det er mulig å flytte på markøren - det er det ikke. 
			animation: google.maps.Animation.BOUNCE,
			title:"Wzup world!",
			icon: {
                url: ikon, //Hvilket ikon som blir brukt på kartet - avhenger av type
                scaledSize: new google.maps.Size(70,70)

            }
            
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
            '<p class="marker-tekst">'+kartBeskrivelse+ '</p>' +
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