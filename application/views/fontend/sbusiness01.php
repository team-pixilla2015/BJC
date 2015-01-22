
<?php if($lang == "th"):?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/style-th.css" type="text/css" media="screen"/>
<?php endif;?>

  <!-- End Header -->
<div class="contain">
	<div class="container">
    	<div class="banner">
    		<img src="<?php echo base_url(); ?>assets/FE/images/business/brand_banner/<?php echo $output['banner'];?>" style="width: 100%;" />
    	</div>
    	<div class="business">
    		<h1><div><?php echo $output['title'];?></div>
    			<?php if($output['ownedbrand'] == 1):?>
    			<span>Owned Brand</span>
    			<?php endif;?>
    			<?php if($output['subsidiary'] == 1):?>
    			<span>Subsidiary</span>
    			<?php endif;?>
    		</h1>
    		<div class="company_info"><?php echo $output['description'];?></div>
    		<?php if($lang == "th"):?>
				<h2>ติดต่อ</h2>
			<?php else:?>
    			<h2>Contact</h2>
    		<?php endif;?>
    		<div class="contact_info"><?php echo $output['contact'];?></div>
    	</div>

    </div>
</div>
