    <!-- <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018.</strong> All rights
        reserved. <a href="http://justalab.in" target="_blank">Powered by JustALab.</a>
      </footer>
 -->
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <script>
        var servicesUrl = <?php echo "'".SERVICES_URL."'" ?>;
    </script>
    <!-- jQuery -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DateMask -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo HOMEURL; ?>/assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo HOMEURL; ?>/assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- InputMask -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo HOMEURL; ?>/assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo HOMEURL; ?>/assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo HOMEURL; ?>/assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo HOMEURL; ?>/assets/dist/js/demo.js"></script>
    <!-- jQuery Validate -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/jquery-validate/jquery.validate.js"></script>
    <!-- DataTables -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo HOMEURL; ?>/assets/plugins/datatables/dataTables.bootstrap4.js"></script>
    <!-- Bootbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <!-- Bootstrap-Datepicker -->
    <script src="<?php echo HOMEURL; ?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    

  <?php if($_SESSION['user_type'] != 'ADMIN') { ?>
   	<script type="text/javascript">
		var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
		{widgetcode:"5c3123b1392b384720adf04bb0efc2b7ed466ada3db386bd07111fe7ec765a16", values:{},ready:function(){}};
		var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
		s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
	</script>
  <?php } ?>

   <script>
    function comingsoon() {
        bootbox.alert("This feature is coming soon");
    }
   </script>