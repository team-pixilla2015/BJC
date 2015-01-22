<script type="text/javascript">
  $(document).ready(function() {
     $('.openimg').on('click',function(){
      $('.imgexplore').slideDown(300);
      $('.btnexplore').addClass('closeimg').removeClass('openimg');
    });
    $('.closeimg').on('click',function(){
      $('.imgexplore').slideUp(300);
      $('.btnexplore').addClass('openimg').removeClass('closeimg');
    });

    // tabs
    $( "#tabsgroup" ).tabs();
  });
</script>
  <section>
    <div class="wrapper">
      <img src="<?php echo base_url(); ?>assets/FE/images/bu/s04.jpg" style="width:100%" usemap="#planetmap">
      <map name="planetmap">
        <area shape="rect" coords="800,435,990,965" href="business04.php" alt="Sun">
    </div>
  </section>

