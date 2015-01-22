
<div class="contain">
	<div class="container">
		<!-- New Banner -->
		<div class="row">
			<img src="<?php echo base_url(); ?>assets/FE/images/contact.png" class="img-responsive" alt="contact_banner" style="width: 100%;">
		</div>
		<!-- New Banner -->

		<!-- Map & Menu -->
		<div class="row" style="padding-top: 2em; padding-bottom: 1em;">
			<div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<!-- <img src="<?php echo base_url(); ?>assets/FE/images/map.png" class="img-responsive img-thumbnail" alt="Image_map" style="width: 100%;"> -->
					<div id="map" class="gmap">

					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4" style="padding-left: 2em;">
					<h1 class="head-menu-contact">CONTACT US</h1>
					<div class="border-line"></div>
					<br>
					<div><a href="#berli" id="menu1" class="menu-contact active" onclick="click_menu('1')">Berli Jucker House</a></div>
					<div><a href="#packaging" id="menu2" class="menu-contact" onclick="click_menu('2')">Packaging Supply Chain</a></div>
					<div><a href="#" id="menu3" class="menu-contact" onclick="click_menu('3')">Consumer Supply Chain</a></div>
					<div><a href="#" id="menu4" class="menu-contact" onclick="click_menu('4')">Healthcare & Technicial</a></div>
					<div><a href="#" id="menu5" class="menu-contact" onclick="click_menu('5')">Others Busines Group</a></div>
				</div>
			</div >
		</div>
		<!-- /Map & Menu -->
		<br><br><br>
		<!-- Detail -->
		<div class="row" style="padding: 0 2em;">
			<div id="berli">
				<h1 class="berli-header">Berli Jucker House</h1>
				<div class="berli-bold">Tel. (662)367-1111</div>
				<div class="berli-bold">Fax. (662)367-1000</div>
				<br>
				<div class="berli-text">Berli Jucker Public Co.,Ltd.</div>
				<div class="berli-text">99 Soi Rubia, Sukhumvit 42 Road,</div>
				<div class="berli-text">Prakhanong, Klongtoey, Bangkok 10110</div>
			</div>

			<div id="packaging">
				<h1 class="packag-header">Packaging Supply Chain</h1>
				<div class="packag-sub-header">BJC Packaging Products</div>
				<br><br>
				<div id="owl-package" class="owl-carousel">
					<div class="item">
						<div class="packag-bold">Mr. Somporn Bhumiwat</div>
				      	<div class="packag-text">Senior Vice President</div>
				      	<br>
				      	<div class="packag-bold">Tel. (662)367-1513-15</div>
				      	<div class="packag-bold">Fax. (662)381-4540</div>
				      	<div class="packag-bold">Email: sompornb@bjc.co.th</div>
				      	<br>
				      	<div class="packag-text">Berli Jucker Public Co.,Ltd.</div>
						<div class="packag-text">99 Soi Rubia, Sukhumvit 42 Road,</div>
						<div class="packag-text">Prakhanong, Klongtoey, Bangkok 10110</div>
					</div>
					<div class="item">
						<div class="packag-bold">Mr. Somporn Bhumiwat</div>
				      	<div class="packag-text">Senior Vice President</div>
				      	<br>
				      	<div class="packag-bold">Tel. (662)367-1513-15</div>
				      	<div class="packag-bold">Fax. (662)381-4540</div>
				      	<div class="packag-bold">Email: sompornb@bjc.co.th</div>
				      	<br>
				      	<div class="packag-text">Berli Jucker Public Co.,Ltd.</div>
						<div class="packag-text">99 Soi Rubia, Sukhumvit 42 Road,</div>
						<div class="packag-text">Prakhanong, Klongtoey, Bangkok 10110</div>
					</div>
					<div class="item">
						<div class="packag-bold">Mr. Somporn Bhumiwat</div>
				      	<div class="packag-text">Senior Vice President</div>
				      	<br>
				      	<div class="packag-bold">Tel. (662)367-1513-15</div>
				      	<div class="packag-bold">Fax. (662)381-4540</div>
				      	<div class="packag-bold">Email: sompornb@bjc.co.th</div>
				      	<br>
				      	<div class="packag-text">Berli Jucker Public Co.,Ltd.</div>
						<div class="packag-text">99 Soi Rubia, Sukhumvit 42 Road,</div>
						<div class="packag-text">Prakhanong, Klongtoey, Bangkok 10110</div>
					</div>
					<div class="item">
						<div class="packag-bold">Mr. Somporn Bhumiwat</div>
				      	<div class="packag-text">Senior Vice President</div>
				      	<br>
				      	<div class="packag-bold">Tel. (662)367-1513-15</div>
				      	<div class="packag-bold">Fax. (662)381-4540</div>
				      	<div class="packag-bold">Email: sompornb@bjc.co.th</div>
				      	<br>
				      	<div class="packag-text">Berli Jucker Public Co.,Ltd.</div>
						<div class="packag-text">99 Soi Rubia, Sukhumvit 42 Road,</div>
						<div class="packag-text">Prakhanong, Klongtoey, Bangkok 10110</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Detail -->
	</div>

</div>


<script>

	$(document).ready(function() {

		$("#owl-package").owlCarousel({
			autoPlay: 3000, //Set AutoPlay
			items: 3, //Set Item Show
			itemsDesktop: [1199,3], //Set Item Show = 3 item at Desktop size 1199
			itemsDesktopSmall: [979,2],
			itemsTablet: [600,2],
			itemsMobile: [400,1]
		});

	});

	function click_menu(id){
		if(id == 1){
			$("#menu1").addClass('active');
			$("#menu2").removeClass('active');
			$("#menu3").removeClass('active');
			$("#menu4").removeClass('active');
			$("#menu5").removeClass('active');

			$("#berli").css("display","block");
			$("#packaging").css("display","none");
		}

		if(id == 2){
			$("#menu1").removeClass('active');
			$("#menu2").addClass('active');
			$("#menu3").removeClass('active');
			$("#menu4").removeClass('active');
			$("#menu5").removeClass('active');

			$("#berli").css("display","none");
			$("#packaging").css("display","block");
		}

		if(id == 3){
			$("#menu1").removeClass('active');
			$("#menu2").removeClass('active');
			$("#menu3").addClass('active');
			$("#menu4").removeClass('active');
			$("#menu5").removeClass('active');
		}

		if(id == 4){
			$("#menu1").removeClass('active');
			$("#menu2").removeClass('active');
			$("#menu3").removeClass('active');
			$("#menu4").addClass('active');
			$("#menu5").removeClass('active');
		}

		if(id == 5){
			$("#menu1").removeClass('active');
			$("#menu2").removeClass('active');
			$("#menu3").removeClass('active');
			$("#menu4").removeClass('active');
			$("#menu5").addClass('active');
		}
	}
</script>
