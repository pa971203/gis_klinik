<script type="text/javascript">
  $(document).ready(function() {
    $('#tentang').summernote({
      tabsize: 2,
      height: 300
    });
    $("#tentang").summernote("code", "<?=!empty($query)?$query['tentang']:''?>");
  });

</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#visi').summernote({
      tabsize: 2,
      height: 300
    });
    $("#visi").summernote("code", "<?=!empty($query)?$query['visi']:''?>");
  });
  
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#misi').summernote({
      tabsize: 2,
      height: 300
    });
    $("#misi").summernote("code", "<?=!empty($query)?$query['misi']:''?>");
  });
  
</script>