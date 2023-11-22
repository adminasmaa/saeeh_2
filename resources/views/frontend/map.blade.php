<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Google Map with Multiple Marker and Info Box in Laravel - CodeSolutionStuff </title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body class="antialiased">
<div class="container">
    <!-- main app container -->
    <div class="readersack">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h3>Google Map with Multiple Marker and Info Box in Laravel - CodeSolutionStuff </h3>

                    <input id="searchMapInput" class="mapControls controls" type="text"
                           placeholder="" name="address2" value="{{$place->address ??''}}"   required  >
                    <div id="map" style='height:1000px ; weight:1000px'></div>



                    <ul id="geoData">

                        <li>@lang('site.latitude'): <span id="lat-span"></span></span> <input value="{{$place->latitude}}" id="lat"
                                                                                              name="latitude"
                                                                                              class="latitude" required >
                        </li>

                        <li>@lang('site.longitude'): <span id="lon-span"></span> <input value="{{$place->longitude}}" id="lng"
                                                                                        name="longitude"
                                                                                        class="longitude"  required ></li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- credits -->
    <div class="text-center">
        <p>
            <a href="#" target="_top">Google Map with Multiple Marker and Info Box in Laravel
            </a>
        </p>
        <p>
            <a href="https://www.codesolutionstuff.com" target="_top">CodeSolutionStuff.com</a>
        </p>
    </div>
</div>

</body>


<script>

    function initializeMap () {
        let lat = document.getElementById("lat").value;
        let lng = document.getElementById("lng").value;
        var mapOptions, map, marker, searchBox, city,
            infoWindow = '',
            addressEl = document.querySelector('#searchMapInput'),
            latEl = document.querySelector('.latitude'),
            longEl = document.querySelector('.longitude'),
            element = document.getElementById('map');

        mapOptions = {
            // How far the maps zooms in.
            zoom: 8,
            // Current Lat and Long position of the pin/
            center: new google.maps.LatLng(lat,lng),
            // center : {
            // 	lat: -34.397,
            // 	lng: 150.644
            // },
            disableDefaultUI: false, // Disables the controls like zoom control on the map if set to true
            scrollWheel: true, // If set to false disables the scrolling on the map.
            draggable: true, // If set to false , you cannot move the map around.
            // mapTypeId: google.maps.MapTypeId.HYBRID, // If set to HYBRID its between sat and ROADMAP, Can be set to SATELLITE as well.
            // maxZoom: 11, // Wont allow you to zoom more than this
            // minZoom: 9  // Wont allow you to go more up.

        };

        /**
         * Creates the map using google function google.maps.Map() by passing the id of canvas and
         * mapOptions object that we just created above as its parameters.
         *
         */
        // Create an object map with the constructor function Map()
        map = new google.maps.Map(element, mapOptions); // Till this like of code it loads up the map.

        /**
         * Creates the marker on the map
         *
         */
        marker = new google.maps.Marker({
            position: mapOptions.center,
            map: map,
            // icon: 'http://pngimages.net/sites/default/files/google-maps-png-image-70164.png',
            draggable: true
        });

        /**
         * Creates a search box
         */
        searchBox = new google.maps.places.SearchBox(addressEl);

        /**
         * When the place is changed on search box, it takes the marker to the searched location.
         */
        google.maps.event.addListener(searchBox, 'places_changed', function () {
            var places = searchBox.getPlaces(),
                bounds = new google.maps.LatLngBounds(),
                i, place, lat, long, resultArray,
                addresss = places[0].formatted_address;

            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);  // Set marker position new.
            }

            map.fitBounds(bounds);  // Fit to the bound
            map.setZoom(15); // This function sets the zoom to 15, meaning zooms to level 15.
            // console.log( map.getZoom() );

            lat = marker.getPosition().lat();
            long = marker.getPosition().lng();
            latEl.value = lat;
            longEl.value = long;

            resultArray = places[0].address_components;

            // Get the city and set the city input value to the one selected
// 		for( var i = 0; i < resultArray.length; i++ ) {
// 			if ( resultArray[ i ].types[0] && 'administrative_area_level_2' === resultArray[ i ].types[0] ) {
// 				citi = resultArray[ i ].long_name;
// 				city.value = citi;
// 			}
// 		}

            // Closes the previous info window if it already exists
            if (infoWindow) {
                infoWindow.close();
            }
            /**
             * Creates the info Window at the top of the marker
             */
            infoWindow = new google.maps.InfoWindow({
                content: addresss
            });

            infoWindow.open(map, marker);
        });


        /**
         * Finds the new position of the marker when the marker is dragged.
         */
        google.maps.event.addListener(marker, "dragend", function (event) {
            var lat, long, address, resultArray, citi;

            console.log('i am dragged');
            lat = marker.getPosition().lat();
            long = marker.getPosition().lng();

            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({latLng: marker.getPosition()}, function (result, status) {
                if ('OK' === status) {  // This line can also be written like if ( status == google.maps.GeocoderStatus.OK ) {
                    address = result[0].formatted_address;
                    resultArray = result[0].address_components;

                    // Get the city and set the city input value to the one selected
                    // for( var i = 0; i < resultArray.length; i++ ) {
                    // 	if ( resultArray[ i ].types[0] && 'administrative_area_level_2' === resultArray[ i ].types[0] ) {
                    // 		citi = resultArray[ i ].long_name;
                    // 		console.log( citi );
                    // 		city.value = citi;
                    // 	}
                    // }
                    addressEl.value = address;
                    latEl.value = lat;
                    longEl.value = long;

                } else {
                    console.log('Geocode was not successful for the following reason: ' + status);
                }

                // Closes the previous info window if it already exists
                if (infoWindow) {
                    infoWindow.close();
                }

                /**
                 * Creates the info Window at the top of the marker
                 */
                infoWindow = new google.maps.InfoWindow({
                    content: address
                });

                infoWindow.open(map, marker);
            });
        });


    }

</script>


<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDa3Ma_OClkpGeMBt1hqTSsFhLAOe_5xPQ&language=ar&dir=rtl&libraries=places&callback=initializeMap"
    async defer></script>


</html>




