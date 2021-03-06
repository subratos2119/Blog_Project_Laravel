<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2018-2020 <a href="#">Laravel Blog</a>.</strong> All rights
    reserved.

  <!-- jQuery 2.2.3 -->
	<script src="{{ asset('public/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{ asset('public/admin/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- Morris.js charts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="{{ asset('public/admin/plugins/morris/morris.min.js')}}"></script>
	<!-- Sparkline -->
	<script src="{{ asset('public/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
	<!-- jvectormap -->
	<script src="{{ asset('public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{ asset('public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{ asset('public/admin/plugins/knob/jquery.knob.js')}}"></script>
	<!-- daterangepicker -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<!-- datepicker -->
	<script src="{{ asset('public/admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="{{ asset('public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
	<!-- Slimscroll -->
	<script src="{{ asset('public/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
	<!-- FastClick -->
	<script src="{{ asset('public/admin/plugins/fastclick/fastclick.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('public/admin/dist/js/app.min.js')}}"></script>
	
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ asset('public/admin/dist/js/pages/dashboard.js')}}"></script>

	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('public/admin/dist/js/demo.js')}}"></script>

	<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

	<script>
	  $(function () {
	    // Replace the <textarea id="editor1"> with a CKEditor
	    // instance, using default configuration.
	    CKEDITOR.replace('editor1');
	    //bootstrap WYSIHTML5 - text editor
	    $(".textarea").wysihtml5();
	  });
	</script>

	@section('footerSection')

	@show

 </footer>