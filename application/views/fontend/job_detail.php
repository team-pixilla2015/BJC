
<div class="contain">
	<div class="container">
		<div class="row">
			<img src="<?php echo base_url(); ?>assets/FE/images/career/banner1.png" class="img-responsive" style="width: 100%;" alt="banner-career">
		</div>
		<div class="row career">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<div class="career-menu">
					<div class="menu-mobile visible-xs-block visible-sm-block">
						<div class="career-head-menu">
							<a class="menu-slide" href="javascript:;">Menu</a>
						</div>
						<div class="career-sub-menu">
							<ul>
								<li><a id="menu1" href="<?php echo site_url("career"); ?>" >Why BJC</a></li>
								<li><a id="menu2" href="<?php echo site_url("career/jop"); ?>" class="active" >Job Opportunity</a></li>
								<li><a id="menu3" href="<?php echo site_url("career/register"); ?>" >Register</a></li>
							</ul>
						</div>
					</div>

					<div class="menu-destop">
						<div class="career-sub-menu visible-md-block visible-lg-block">
							<ul>
								<li><a id="menu1" href="<?php echo site_url("career"); ?>" >Why BJC</a></li>
								<li><a id="menu2" href="<?php echo site_url("career/jop"); ?>" class="active" >Job Opportunity</a></li>
								<li><a id="menu3" href="<?php echo site_url("career/register"); ?>" >Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 uncareer">
				<div class="job-text-head">
					<h1>job opportunity</h1>
					<div class="top-line"></div>
				</div>

				<!-- Sub head -->
				<div class="job-sub-text">
					<h3>Technical Sales Representive - Industrial Chemicals</h3>
				</div>
				<!-- /Sub head -->

				<!-- Main Job -->
				<div class="job-data">
					<div class="sub">
						<h4>Job Descriptions and Responsibilities</h4>
						<div class="data-text">
							<ul>
								<li>Responsible for handling customers in Petroleum Additive business and achieve sales target</li>
								<li>Expand & Explore business opportunity of Petroleum Additive business</li>
								<li>Manage key accounts in order to achieve sales target and deliver good customer relationship</li>
							</ul>
						</div>
					</div>

					<div class="sub">
						<h4>Qualifications</h4>
						<div class="data-text">
							<ul>
								<li>Responsible for handling customers in Petroleum Additive business and achieve sales target</li>
								<li>Expand & Explore business opportunity of Petroleum Additive business</li>
								<li>Manage key accounts in order to achieve sales target and deliver good customer relationship</li>
							</ul>
						</div>
					</div>

					<div class="data-text-sub">
						<div class="row">
							<div class="col-sm-1 hidden-sx"></div>
							<div class="col-sm-10 col-sx-12">
								We offer an attractive compensation; benefit package and career opportunities to the successful candidate. Interested candidates are invited to send full resume, stating current and expected salary, and enclosing a recent photograph to the address below
							</div>
							<div class="col-sm-1 hidden-sx"></div>
						</div>
					</div>

					<div class="text-address">
						<div class="row">
							<div class="col-sm-6 address">
								<h4>Berli Jucker Public Co.,Ltd.</h4>
								<div>Human Resources Division</div>
								<div> 99 Soi Rubia, Sukhumvit 42,</div>
								<div> Phrakanong, Klongtoey, Bangkok 10110</div>
								<div>Tel. 02-356-1407</div>
								<div>E-mail : ramaiphw@bjc.co.th</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div align="center">
							<button type="button">Apply Now</button>
						</div>
					</div>

				</div>
				<!-- /Main Job -->

			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$(".menu-slide").click(function(){
			$(".menu-mobile .career-sub-menu").toggle("slow");
		});
	});
</script>
