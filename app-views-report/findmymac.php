<?php $this->view('partials/head', array(
        "scripts" => array(
                "clients/client_list.js"
        )
)); ?>

<div class="container">

  <div class="row">
   
        <?php $this->view('widgets/findmymac_widget'); ?>

  </div>

</div>

<script> src="<?php echo conf('subdirectory'); ?>assets/js/munkireport.autoupdate.js"  
    $('.scroll-box').removeClass('scroll-box');
</script>

<?php $this->view('partials/foot'); ?>
