<script type="text/javascript">
  <?php if(session('success')){?>
    alertify.success('<?=session("success")?>','15');
  <?php } ?>
  <?php if(session('msgError')){?>
    alertify.error('Error! <?=session("msgError")?>','15');
  <?php } ?>
  <?php if(session('msgWarning')){?>
    alertify.warning('Warning! <?=session("msgWarning")?>','15');
  <?php } ?>
</script>