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
    <script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>

    <script src="{{ asset('js/jquery.imgareaselect.min.js') }}"></script>

    <script src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
         CKEDITOR.replace('descricao')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
    </script>

    </body>
</html>