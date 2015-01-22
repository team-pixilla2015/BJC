
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

				<form action="" method="POST" class="form-horizontal" role="form">
					<div class="filter-menu">
						<div class="row">
							<div class="padding-rl col-sm-4 ">
								<div class="padding-rl form-group">
									<div class="input-group">
										<input type="text" class="form-control input-lg" placeholder="Search">
										<div class="input-group-addon"><i class="glyphicon glyphicon-search"></i></div>
									</div>
								</div>
							</div>
							<div class="padding-rl col-sm-4">
								<div class="form-group">
									<select class="selectpicker">
										<option value="">All Company</option>
									</select>
								</div>
							</div>
							<div class="padding-rl col-sm-4">
								<div class="form-group">
									<select class="selectpicker">
										<option value="">All Job Category</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="padding-rl col-sm-4">
								<div class="padding-rl form-group">
									<select class="selectpicker">
										<option value="">All Level</option>
									</select>
								</div>
							</div>
							<div class="padding-rl col-sm-4">
								<div class="padding-rl form-group">
									<select class="selectpicker">
										<option value="">All Location</option>
									</select>
								</div>
							</div>
							<div class="padding-rl col-sm-4">
								<div class="form-group" align="right">
									<button type="button">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>

				<!-- Main Job -->
				<div class="job-data">
					<table class="table">
						<thead>
							<tr>
								<th>Posted</th>
								<th>Job Title</th>
								<th>Company</th>
								<th>Location</th>
							</tr>
						</thead>
						<tbody>
							<tr onclick="tr_click();">
								<td>30/07/2014</td>
								<td>ผู้ช่วยผู้จัดการ,พนักงานแนะนำสินค้า OGENKI (ร้านเพื่อความงามและสุขภาพ) สาขาเซ้นทรัล ชลบุรี <font color="red"> Urgently Required</font></td>
								<td>OGENKI</td>
								<td>อยุธยาพาร์ค</td>
							</tr>
							<tr>
								<td>30/07/2014</td>
								<td>Web Developer (ECOM)</td>
								<td>BJC</td>
								<td>Bangkok</td>
							</tr>
							<tr>
								<td>28/06/2014</td>
								<td>ผู้ช่วยผู้จัดการร้านด้านสุขภาพและความงาม (Ogenki Shop) สาขาซีคอนสแควร์ ด่วน !!! <font color="red"> Urgently Required</font></td>
								<td>OGENKI</td>
								<td>อยุธยาพาร์ค</td>
							</tr>
							<tr>
								<td>28/06/2014</td>
								<td>Product Advisor</td>
								<td>AB</td>
								<td>BTS/MRT</td>
							</tr>
							<tr>
								<td>30/07/2014</td>
								<td>ผู้ช่วยผู้จัดการ,พนักงานแนะนำสินค้า OGENKI (ร้านเพื่อความงามและสุขภาพ) สาขาเซ้นทรัล ชลบุรี <font color="red"> Urgently Required</font></td>
								<td>OGENKI</td>
								<td>อยุธยาพาร์ค</td>
							</tr>
							<tr>
								<td>30/07/2014</td>
								<td>Web Developer (ECOM)</td>
								<td>BJC</td>
								<td>Bangkok</td>
							</tr>
							<tr>
								<td>28/06/2014</td>
								<td>ผู้ช่วยผู้จัดการร้านด้านสุขภาพและความงาม (Ogenki Shop) สาขาซีคอนสแควร์ ด่วน !!! <font color="red"> Urgently Required</font></td>
								<td>OGENKI</td>
								<td>อยุธยาพาร์ค</td>
							</tr>
							<tr>
								<td>28/06/2014</td>
								<td>Product Advisor</td>
								<td>AB</td>
								<td>BTS/MRT</td>
							</tr>
							<tr>
								<td>30/07/2014</td>
								<td>ผู้ช่วยผู้จัดการ,พนักงานแนะนำสินค้า OGENKI (ร้านเพื่อความงามและสุขภาพ) สาขาเซ้นทรัล ชลบุรี <font color="red"> Urgently Required</font></td>
								<td>OGENKI</td>
								<td>อยุธยาพาร์ค</td>
							</tr>
							<tr>
								<td>30/07/2014</td>
								<td>Web Developer (ECOM)</td>
								<td>BJC</td>
								<td>Bangkok</td>
							</tr>
							<tr>
								<td>28/06/2014</td>
								<td>ผู้ช่วยผู้จัดการร้านด้านสุขภาพและความงาม (Ogenki Shop) สาขาซีคอนสแควร์ ด่วน !!! <font color="red"> Urgently Required</font></td>
								<td>OGENKI</td>
								<td>อยุธยาพาร์ค</td>
							</tr>
							<tr>
								<td>28/06/2014</td>
								<td>Product Advisor</td>
								<td>AB</td>
								<td>BTS/MRT</td>
							</tr>
							<tr>
								<td>30/07/2014</td>
								<td>ผู้ช่วยผู้จัดการ,พนักงานแนะนำสินค้า OGENKI (ร้านเพื่อความงามและสุขภาพ) สาขาเซ้นทรัล ชลบุรี <font color="red"> Urgently Required</font></td>
								<td>OGENKI</td>
								<td>อยุธยาพาร์ค</td>
							</tr>
							<tr>
								<td>30/07/2014</td>
								<td>Web Developer (ECOM)</td>
								<td>BJC</td>
								<td>Bangkok</td>
							</tr>
							<tr>
								<td>28/06/2014</td>
								<td>ผู้ช่วยผู้จัดการร้านด้านสุขภาพและความงาม (Ogenki Shop) สาขาซีคอนสแควร์ ด่วน !!! <font color="red"> Urgently Required</font></td>
								<td>OGENKI</td>
								<td>อยุธยาพาร์ค</td>
							</tr>
							<tr>
								<td>28/06/2014</td>
								<td>Product Advisor</td>
								<td>AB</td>
								<td>BTS/MRT</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="paginat-item active"></div>
									<div class="paginat-item"></div>
									<div class="paginat-item"></div>
									<div class="paginat-item"></div>
								</td>
								<td><a href="#" class="show_all">show all</a></td>
							</tr>
						</tbody>
					</table>
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

	function tr_click(){
		window.location.href="<?php echo site_url('career/jop/detail'); ?>";
	}
</script>
