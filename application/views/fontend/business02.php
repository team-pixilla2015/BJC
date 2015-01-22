<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/FE/css/business03.css">
<div class="contain">
  <div class="container">
      <div class="banner_business">
         <img src="<?php echo base_url(); ?>assets/FE/images/business/bg.png" style="width: 100%;  ">
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
<style>
	.right_blog{
		padding-top:0px;
	}
	#owl-demo{
		margin-top: 15px;
	}

	.company{
		overflow: hidden;
	}
</style>
<div class="container-fluid selected_blog">
  <div class="container">
    <div class="selected_text">
      <h1>Select a Business</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas egestas neque ac scelerisque dignissim.</p>
    </div>
    <div class="selected_menu row" >
      <div class="selected_item col-xs-12 col-md-3 " data-href="<?php echo site_url("business"); ?>" >
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
      <div class="selected_item col-xs-12 col-md-3 active" data-href="<?php echo site_url("business/category"); ?>">
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
      <div class="selected_item col-xs-12 col-md-3 " data-href="<?php echo site_url("business/company"); ?>">
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
      <div class="selected_item col-xs-12 col-md-3" data-href="<?php echo site_url("business/supply_chain"); ?>" >
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
  <div class="col-md-3 left_blog">
      <div class="select_head">
          <p>Select by</p>
      </div>
      <div class="company_list_title">
          <p>Category</p>
      </div>
     <!--  <div class="company_sublist">
          <p>Company</p>
      </div> -->

  </div>
  <?php /*<div class="col-md-9 brand_filter">
      	<div>Sort by</div>
      	<form method="get" >
      	<div>
      		<select name="sort" class="">
      			<option value="">Please Select</option>
      			<option <?php if($sort == "1"): echo "selected='selected'" ;endif;?> value="1">Brand Representative</option>
      			<option <?php if($sort == "2"): echo "selected='selected'" ;endif;?> value="2">Brand Representative2</option>
      		</select>
      		<input type="text" class="search_word" value="<?php echo $search_word;?>" name="search_word" />
      		<input type="submit" class="btn_search" value="Search">
      	</div>
      	</form>
      </div>
   *
   */ ?>
  <div class="clr"></div>
  <style>
  	ul.item{
  		height:auto;
  	}
  	ul.item li{
  		width: 16%;
  		float: left;
  		padding:10px 15px;
  	}

  	.item .thumbnail_blog{
  		width:100%;
  		margin: 0px;
  	}
  	.item .thumbnail_blog .thumbnail{
  		width:100%;
  		border: 0px;
  	}
  	.item .thumbnail_blog  p{
  		overflow:visible;
  		height: auto;
  	}
  </style>
  <div class="col-md-12 right_blog">

      <ul class="item">
          <?php foreach($category_list as $index => $item):?>

		  <li>
          <a href="<?php echo site_url(); ?>/sub_category?lang=<?php echo $lang;?>&category_id=<?php echo $item['id'];?>">
            <div class="thumbnail_blog">
              <div class="thumbnail">
                  <img src="<?php echo base_url(); ?>assets/FE/images/business/category_logo/<?php echo $item['thumbnail'];?>">
              </div>
              <p><?php echo $item['title'];?></p>
            </div>
          </a>
          </li>
        <?php endforeach;?>
       </ul>

    <div class="company col-md-12">
    <div class="head_list">
      <h1><?php echo $select_category_name;?></h1>
    </div>
      <div class="col-xs-12">
        <ul>
         <?php foreach ($brand_list as $key => $value) :?>
            <li>
              <a href="<?php echo site_url(); ?>/sub_category?lang=<?php echo $lang;?>&brand_id=<?php echo $item['id'];?>">
                <?php echo $value['title']?>
              </a>
            </li>
          <?php endforeach;?>
        </ul>
      </div>
  </div>
</div>
</div>
</div>
