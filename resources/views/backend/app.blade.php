<!doctype html>
<html class="no-js" lang="en-US">
@include('backend.head')


<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
            @include('backend.navbar')
			      @include('backend.sidebar')

              @yield('content')

	
		       	@include('backend.footer')
            @include('backend.rightsite')
	</div>

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="backend/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="backend/dist/js/adminlte.min.js"></script>

     <script src="{{ asset('js/jquery.imgareaselect.min.js') }}"></script>
        <script>
                $(function($) {
          
                    var fileInput = document.getElementById('exampleInputImage');
                    var fileDisplayArea = document.getElementById('fileDisplayArea');


                    fileInput.addEventListener('change', function(e) {
                        var file = fileInput.files[0];
                        var imageType = /image.*/;

                        if (file.type.match(imageType)) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                fileDisplayArea.innerHTML = "";

                                var img = new Image();
                                img.src = reader.result;

                                fileDisplayArea.appendChild(img);
                            }

                            reader.readAsDataURL(file); 
                        } else {
                            fileDisplayArea.innerHTML = "File not supported!"
                        }
                    });
                });
            </script>

    </body>
</html>