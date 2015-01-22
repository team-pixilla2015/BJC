
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/FE/css/business03.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/FE/css/business04.css">
<!-- /header -->
<div class="contain">
  <div class="container">
      <div class="banner_business">
         <img src="<?php echo base_url(); ?>assets/FE/images/business/bg4.png" style="width: 100%;  ">
         <div class="cover_text">
            <h1>Business</h1>
            <p>
              Business operation of BJC Consumer Supply Chain (CSC) covers</br>
              a complete value chain of services for consumer products,</br>
              ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
            </p>
         </div>
      </div>

      <!-- <div class="business"> -->
        <!-- <h1><?php //echo $companyname;?></h1>
        <div class="company_info"><?php //echo $description;?></div>
        <?php //if($lang == "th"):?>
        <h2>ติดต่อ</h2>
      <?php //else:?>
          <h2>Contact</h2>
        <?php //endif;?>
        <div class="contact_info"><?php //echo $contact;?></div> -->
      <!-- </div> -->
   </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.selected_item').hover(function(){
      $(this).addClass('hover');
    },function(){
      $(this).removeClass('hover');
    })

    $('.selected_item').click(function(){
      window.location.href=$(this).data('href');
    })

    $("#owl-demo").owlCarousel(
    {
          navigation : false, // Show next and prev buttons
          slideSpeed : 1000,
          paginationSpeed : 1000,
          singleItem:true
          // "singleItem:true" is a shortcut for:
          // items : 1,
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
      });
  })

</script>
<div class="container-fluid selected_blog">
  <div class="container">
    <div class="selected_text">
      <h1>Select a Business</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas egestas neque ac scelerisque dignissim.</p>
    </div>
    <div class="selected_menu row" >
      <div class="selected_item col-xs-12 col-md-3" data-href="business01.php" >
         <div class="icon">
           <img src="<?php echo base_url(); ?>assets/FE/images/bu-icon01.png">
         </div>
         <div class="detail">
           <h2>Brands</h2>
           <p>Explore BJC Business operation covers a complete value chain of services for brands.</p>
         </div>
         <button type="button" class="btn btn-default"><div><span>SELECT</span><span class="icon "></span></div></button>
         <div class="border-bottom"></div>
      </div>
      <div class="selected_item col-xs-12 col-md-3 " data-href="business02.php">
         <div class="icon">
           <img src="<?php echo base_url(); ?>assets/FE/images/bu-icon02.png">
         </div>
         <div class="detail">
           <h2>Category</h2>
           <p>Explore a category of BJC Company leading trading and manufacturing company by industry.</p>
         </div>
         <button type="button" class="btn btn-default"><div><span>SELECT</span><span class="icon " ></span></div></button>
         <div class="border-bottom"></div>
      </div>
      <div class="selected_item col-xs-12 col-md-3 " data-href="business03.php">
         <div class="icon">
           <img src="<?php echo base_url(); ?>assets/FE/images/bu-icon03.png">
         </div>
         <div class="detail">
           <h2>Company</h2>
           <p>Explore list  companies based in the Berli Jucker Public Company Limited.</p>
         </div>
         <button type="button" class="btn btn-default"><div><span>SELECT</span><span class="icon " ></span></div></button>
         <div class="border-bottom"></div>
      </div>
      <div class="selected_item col-xs-12 col-md-3 active" data-href="business04.php" >
         <div class="icon">
           <img src="<?php echo base_url(); ?>assets/FE/images/bu-icon04.png">
         </div>
         <div class="detail">
           <h2>Supply Chain</h2>
           <p>Explore BJC Business unit Organization divided into five groups.</p>
         </div>
         <button type="button" class="btn btn-default"><div><span>SELECT</span><span class="icon "></span></div></button>
         <div class="border-bottom"></div>
      </div>
    </div>
  </div>

<div class="container selectby">
  <div class="col-md-12 left_blog">
      <div class="select_head">
          <p>Select by</p>
      </div>
      <div class="company_list_title">
          <p>Supply Chain</p>
      </div>
     <!--  <div class="company_sublist">
          <p>Company</p>
      </div> -->
  </div>
  <div class="col-md-12 right_blog">
      <div class="bu4_thumbnail_blog">
        <div class="col-sm-6 col-md-6">
          <div class="thumbnail bu4_thumbnail">
            <img src="<?php echo base_url(); ?>assets/FE/images/business/thumbnail.png" alt="...">
            <div class="caption">
              <p>Packaging Supply Chain</p>
            </div>
          </div>

        </div>
        <div class="col-sm-6 col-md-6">
          <div class="thumbnail bu4_thumbnail">
            <img src="<?php echo base_url(); ?>assets/FE/images/business/thumbnail.png" alt="...">
            <div class="caption">
              <p>Consumer Supply Chain</p>
            </div>
          </div>

        </div>
        <div class="col-sm-6 col-md-6">
          <div class="thumbnail bu4_thumbnail">
            <img src="<?php echo base_url(); ?>assets/FE/images/business/thumbnail.png" alt="...">
            <div class="caption">
              <p>Healthcare and Technical Supply Chain</p>
            </div>
          </div>

        </div>
        <div class="col-sm-6 col-md-6">
          <div class="thumbnail bu4_thumbnail">
            <img src="<?php echo base_url(); ?>assets/FE/images/business/thumbnail.png" alt="...">
            <div class="caption">
              <p>Other Business Group</p>
            </div>
          </div>

        </div>
      </div>
  </div>
</div>
</div>
