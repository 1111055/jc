<!doctype html>
<html class="no-js" lang="en-US">
@include('frontend.head')
<body>
	 <div class="wrapper homepage">
			@include('frontend.navbar')

			 @yield('content')

	
		  	@include('frontend.footer')
	</div>


	    <!-- Wrapper End -->

    <!-- jquery 3.12.4 -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- mobile menu js  -->
    <script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
    <!-- scroll-up js -->
    <script src="{{asset('js/jquery.scrollUp.js')}}"></script>
    <!-- owl-carousel js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('js/slick.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- price slider js -->
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <!-- nivo slider js -->
    <script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
    <!-- fancybox js -->
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('js/popper.js')}}"></script>
    <!-- plugins -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('js/main.js')}}"></script>
     <!-- Wrapper End -->


    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

            //var long = {{ $setting->longitude }}
           // var lat = {{ $setting->latitude }}


            $('.descbody p').addClass('text-justify text-capitalize mb-40');

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(41.581237, -8.405879), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#444444"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#f1ac06"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "lightness": "-12"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#f1ac06"
                            }
                        ]
                    }
                ]
            };


            var long = -8.405879
            var lat = 41.581237

            var mapElement = document.getElementById('map');
            if(mapElement){
                    var map = new google.maps.Map(mapElement, mapOptions);

                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, long),
                        map: map,
                        title: 'Morada'
                    });
            }


        }
    </script>

	</body>
</html>
