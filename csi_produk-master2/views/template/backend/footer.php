<form id="delete" method="POST">
			<input type="hidden" name="data_type">
			<input type="hidden" name="data_id">
			<input type="hidden" name="_method" value="DELETE">
</form>
<!-- Jquery Core Js -->
<script src="<?=base_url('assets')?>/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?=base_url('assets')?>/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?=base_url('assets')?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?=base_url('assets')?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?=base_url('assets')?>/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- SweetAlert Plugin Js -->
<script src="<?=base_url('assets')?>/plugins/sweetalert/sweetalert.min.js"></script>
<?=script_url('assets/plugins/ckeditor/ckeditor.js')?>
<!-- Custom Js -->
<script src="<?=base_url('assets')?>/js/admin.js"></script>
<script src="<?=base_url('assets')?>/js/pages/tables/jquery-datatable.js"></script>
<!-- Demo Js -->
<script src="<?=base_url('assets')?>/js/demo.js"></script>

<?php if (isset($_SESSION['message']) && $_SESSION['message'] != ''): ?>
	<script>
        swal({
            title: '<?php echo ucfirst($_SESSION['message']['type']); ?>',
            text: '<?php echo $_SESSION['message']['text']; ?>',
            icon: '<?php echo $_SESSION['message']['type']; ?>',
            timer: 2000
        });
	</script>
<?php endif; $_SESSION['message'] = ''; ?>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
				var url_target = $(this).parents("tr").attr("data-url");
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: url_target+'/'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "Your data has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your data is safe :)", "error");
        }
      });

    });

</script>
<?php
	if($this->uri->segment(2) == 'company'){
?>
<script type="text/javascript">
	CKEDITOR.replace('ckeditor');
	CKEDITOR.config.height = 300;
</script>
<?php } ?>
</body>

</html>
