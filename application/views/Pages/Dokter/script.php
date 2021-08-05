<?php if ($this->session->flashdata('status') == '1') { ?>
    <script>
        swal({
      title: "Good job!",
      text: "Berhasil di simpan!",
      icon: "success",
      button: "OK",
    });
  </script>
<?php } elseif ($this->session->flashdata('status') == '0') { ?>
  <script>
   swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "error",
    button: "Aww yiss!",
  });
    </script>
<?php } ?>

<script type="text/javascript">
  $("#inp").hide();
  $("#view").show();
  $("#btn-inp").click(function(){
    $("#inp").show();
    $("#view").hide();
  });
  $("#btn-view").click(function(){
    $("#inp").hide();
    $("#view").show();
  })
</script>

<?php if ($edit != 'null') : ?>
  <script>
    $("#inp").show();
    $("#view").hide();
        var variabels = JSON.parse('<?= $edit ?>');
        $('[name = "id_dokter"]').val(variabels.id_dokter);
        $('[name = "id_user"]').val(variabels.id_user);
        $('[name = "nip"]').val(variabels.nip);
        $('[name = "nama"]').val(variabels.nama);
        $('[name = "jk"]').val(variabels.jk);
        $('[name = "alamat"]').val(variabels.alamat);
        $('[name = "no_hp"]').val(variabels.no_hp);
        $("#simpan").text('Edit').removeClass('btn-primary').addClass('btn-success');
    </script>
<?php endif ?>

<script type="text/javascript">
  $(".hapus").click(function(){
    const id_delete = $(this).data('id');
    swal({
      title: "Hapus Data?",
      text: "Setelah dihapus, Anda tidak akan dapat memulihkan file imajiner ini!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = '<?= base_url('Dokter/hapus/') ?>'+id_delete
      } 
    });
  })
</script>
