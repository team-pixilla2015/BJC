<link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/business03.css" type="text/css" media="screen"/>

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


		$(".slider1").bxSlider({
			auto:true,
		});
	});
</script>
<style>
	.right_blog{
		padding-top:0px;
	}
	.slide1{
		margin-top: 15px;
	}

	.company{
		overflow: hidden;
	}

	.bx-wrapper .bx-viewport{
		box-shadow:none;
	}
	.bx-wrapper img{
		width:100%;
	}
	.bx-pager-item a  {
		width: 17px !important;
		height: 17px !important;
		border:4px solid #fff !important;
		background:#888888 !important;
		color:transparent !important;
		-webkit-border-radius: 50% !important;
		-moz-border-radius: 50% !important;
		border-radius: 50% !important;
	}

	.bx-pager-item .active {
		background: #fff !important;
		border: 4px solid #35a240 !important;
		-webkit-border-radius: 50% !important;
		-moz-border-radius: 50% !important;
		border-radius: 50% !important;
		width: 17px !important;
		height: 17px !important;
	}

	.bx-wrapper .bx-pager{
		text-align:right;

	}



</style>
<div class="container-fluid selected_blog">
  <div class="container">
    <div class="selected_text">
      <h1>Select a Business</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas egestas neque ac scelerisque dignissim.</p>
    </div>
    <div class="selected_menu row" >
      <div class="selected_item col-xs-12 col-md-3 active" data-href="business01.php" >
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
      <div class="selected_item col-xs-12 col-md-3 " data-href="<?php echo site_url("business/category"); ?>">
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
          <p>Brands</p>
      </div>
     <!--  <div class="company_sublist">
          <p>Company</p>
      </div> -->

  </div>
  <div class="col-md-9 brand_filter">
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
  <div class="clr"></div>
  <div class="col-md-12 right_blog">

    <div class="slider1" >
      <div class="slide">
          <?php foreach($thumb_list as $index => $item):?>
          <?php //echo $index%6;?>
          <?php if((($index%8)==0)&&($index!=0)):?>
	        </div>
	        <div class="slide">
          <?php endif;?>

          <a href="<?php echo site_url();?>/sub_brands?lang=<?php echo $lang;?>&brand_id=<?php echo $item['id'];?>">
            <div class="thumbnail_blog">
              <div class="thumbnail">
                  <img src="<?php echo base_url(); ?>assets/FE/images/business/brand_logo/<?php echo $item['thumbnail'];?>">
              </div>
              <p><?php echo $item['title'];?></p>
            </div>
          </a>
        <?php endforeach;?>
       </div>

    </div>
    <div class="company col-md-9">
    <div class="head_list">
      <h1>Brand List</h1>
    </div>
      <div class="col-xs-12">
        <ul>
         <?php foreach ($brand_list as $key => $value) :?>
            <li>
              <a href="<?php echo site_url();?>/sub_brands?lang=<?php echo $lang;?>&brand_id=<?php echo $item['id'];?>">
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
<!-- include footer -->
