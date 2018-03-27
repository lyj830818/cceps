<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>

<?php if(commonModel::isAvailable('stat')){ ?>

  <script>
  var logLink = "<?php echo helper::createLink('log', 'record'); ?>";
  var browserLanguage = navigator.language || navigator.userLanguage; 
  var resolution      = screen.availWidth + ' X ' + screen.availHeight;
  $.get(logLink, {browserLanguage:browserLanguage, resolution:resolution});
  </script>
<?php } ?>

