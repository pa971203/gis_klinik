<?php if ($this->session->flashdata('status') == '1') { ?>
    <script>
        toastr.success('berhasil');
    </script>
<?php } elseif ($this->session->flashdata('status') == '0') { ?>
    <script>
        toastr.error('gagal');
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
      $('[name = "id_klinik"]').val(variabels.id_klinik);
      $('[name = "nama"]').val(variabels.nama);
      $('[name = "alamat"]').val(variabels.alamat);
      $('[name = "dr_penanggung_jawab"]').val(variabels.dr_penanggung_jawab);
      $('[name = "izin_operasional"]').val(variabels.izin_operasional);
      $('[name = "kp_rj"]').val(variabels.kp_rj);
      $('[name = "kp_ri"]').val(variabels.kp_ri);
      $('[name = "ku_rj"]').val(variabels.ku_rj);
      $('[name = "ku_ri"]').val(variabels.ku_ri);
      $('[name = "spesialis"]').val(variabels.spesialis);
      $('[name = "bersalin"]').val(variabels.bersalin);
      $('[name = "jp"]').val(variabels.jp);
      $('[name = "wp"]').val(variabels.wp);
      $('[name = "kepemilikan"]').val(variabels.kepemilikan);
      $('[name = "dikeluarkan"]').val(variabels.dikeluarkan);
      $('[name = "koordinat"]').val(variabels.koordinat);
      $("#simpan").text('Edit').removeClass('btn-primary').addClass('btn-success');
  </script>
<?php endif ?>
