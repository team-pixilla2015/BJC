
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
								<li><a id="menu2" href="<?php echo site_url("career/jop"); ?>" >Job Opportunity</a></li>
								<li><a id="menu3" href="<?php echo site_url("career/register"); ?>" class="active" >Register</a></li>
							</ul>
						</div>
					</div>

					<div class="menu-destop">
						<div class="career-sub-menu visible-md-block visible-lg-block">
							<ul>
								<li><a id="menu1" href="<?php echo site_url("career"); ?>" >Why BJC</a></li>
								<li><a id="menu2" href="<?php echo site_url("career/jop"); ?>" >Job Opportunity</a></li>
								<li><a id="menu3" href="<?php echo site_url("career/register"); ?>" class="active" >Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<form action="#" method="POST" role="form">
					<!-- <div class="form-group">
						<label for="">label</label>
						<input type="text" class="form-control" id="" placeholder="Input field">
					</div> -->
					<div class="step">
						<div class="step-start"></div>

						<div class="accordion-section">
						<!-- Step 1 -->
						<div id="head-step-1" class="head-step active" data-href="#step-1">
							step 1 personal - family detail
							<i style="float: right;" class="glyphicon glyphicon-chevron-down"></i>
							<div style="clear: both;"></div>
						</div>
						<div id="step-1" class="body-step">
							<div class="text-body">
								<!-- 1 -->
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-3">
										<div class="row">
											<img src="<?php echo base_url(); ?>assets/FE/images/career/img-account.png" class="img-responsive img-thumbnail" alt="Image">
										</div>
										<br>
									</div>
									<div class="padding-rl col-sx-12 col-sm-9">
										<div class="form-group">
											<input type="file" class="filestyle" data-icon="false" data-buttonText="Upload" data-size="lg">
											<small>( filetype .jpg, .gif, .png, maximum filesize 250Kb )</small>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-3">
										<div class="form-group">
											<select class="selectpicker">
												<option value="">Prefix Name</option>
												<option value="">Prefix Name2</option>
											</select>
										</div>
									</div>
									<div class="padding-rl col-sm-9 hidden-sx"></div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Name - Surname (Thai)">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Name - Surname (English)">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Nickname">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Height">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Weight">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Registered address"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Present address"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Telephone no">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Office Telephone">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Mobile">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="E-Mail">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Place of birth">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Date of birth">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Time of birth">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Nationality">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Race">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Relegion">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Identification no.">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Identification card Issued at">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="issued date">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="expired date">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Tax code no.">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Social security code no">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<select class="selectpicker">
												<option value="">Marital status</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<select class="selectpicker">
												<option value="">if married does the spouse earn income ?</option>
											</select>
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Number of children">
										</div>
									</div>
								</div>
								<!-- /1 -->
								<br>
								<!-- 2 -->
								<div class="text-head">
									<h3>Wife/Husband</h3>
								</div>
								<div class="text-body">
									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-3">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Prefix Name</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Name - Surname (Thai)">
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-3">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Age">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Occupation/Position">
											</div>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Telephone">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-12">
											<div class="form-group">
												<textarea class="form-control input-lg" rows="3" placeholder="Office/Address"></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /2 -->
								<br>
								<!-- 3 -->
								<div class="text-head">
									<h3>Father</h3>
								</div>
								<div class="text-body">
									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-3">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Prefix Name</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Name - Surname (Thai)">
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-3">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Age">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Occupation/Position">
											</div>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Telephone">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-12">
											<div class="form-group">
												<textarea class="form-control input-lg" rows="3" placeholder="Office/Address"></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /3 -->
								<br>
								<!-- 4 -->
								<div class="text-head">
									<h3>Mother</h3>
								</div>
								<div class="text-body">
									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-3">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Prefix Name</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Name - Surname (Thai)">
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-3">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Age">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Occupation/Position">
											</div>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Telephone">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="padding-rl col-sx-12 col-sm-12">
											<div class="form-group">
												<textarea class="form-control input-lg" rows="3" placeholder="Office/Address"></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /4 -->
								<br>
								<!-- 5 -->
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="text-head">
											<h3>Number of brothers and sisters</h3>
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="form-group">
											<input type="number" class="form-control input-lg" value="0">
										</div>
									</div>
								</div>
								<!-- /5 -->
								<br><br>
								<div align="center">
									<button id="btn-step-1" type="button">Next Step</button>
								</div>
							</div>
						</div>
						<!-- /End Step 1 -->
						</div>

						<div class="accordion-section">
						<!-- Step 2 -->
						<div id="head-step-2" class="head-step " data-href="#step-2">
							step 2 education background - training recore
							<i style="float: right;" class="glyphicon glyphicon-chevron-down"></i>
							<div style="clear: both;"></div>
						</div>
						<div id="step-2" class="body-step">
							<!-- 1 -->
							<div class="text-head">
								<h3>Show/Hide : Primary School</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Institute name and location"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate/Diploma/Degree">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Point Average">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Major Subject">
										</div>
									</div>
								</div>
							</div>
							<!-- /1 -->
							<br>
							<!-- 2 -->
							<div class="text-head">
								<h3>Show/Hide : Secondary School</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Institute name and location"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate/Diploma/Degree">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Point Average">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Major Subject">
										</div>
									</div>
								</div>
							</div>
							<!-- /2 -->
							<br>
							<!-- 3 -->
							<div class="text-head">
								<h3>Show/Hide : High School Certificate</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Institute name and location"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate/Diploma/Degree">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Point Average">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Major Subject">
										</div>
									</div>
								</div>
							</div>
							<!-- /3 -->
							<br>
							<!-- 4 -->
							<div class="text-head">
								<h3>Show/Hide : Diploma</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Institute name and location"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate/Diploma/Degree">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Point Average">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Major Subject">
										</div>
									</div>
								</div>
							</div>
							<!-- /4 -->
							<br>
							<!-- 5 -->
							<div class="text-head">
								<h3>Show/Hide : Bachelor's Degree</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Institute name and location"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate/Diploma/Degree">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Point Average">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Major Subject">
										</div>
									</div>
								</div>
							</div>
							<!-- /5 -->
							<br>
							<!-- 6 -->
							<div class="text-head">
								<h3>Show/Hide : Master Degree</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Institute name and location"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate/Diploma/Degree">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Point Average">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Major Subject">
										</div>
									</div>
								</div>
							</div>
							<!-- /6 -->
							<br>
							<!-- 7 -->
							<div class="text-head">
								<h3>Show/Hide : Others</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Institute name and location"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate/Diploma/Degree">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Point Average">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Major Subject">
										</div>
									</div>
								</div>
							</div>
							<!-- /7 -->
							<br>
							<!-- 8 -->
							<div class="text-head">
								<h3>Show/Hide : Record no. 1</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Subject">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Institute">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Period of Training From">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Period of Training To">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="No. of hour">
										</div>
									</div>
								</div>
							</div>
							<!-- /8 -->
							<br>
							<!-- 9 -->
							<div class="text-head">
								<h3>Show/Hide : Record no. 2</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Subject">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Institute">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Period of Training From">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Period of Training To">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="No. of hour">
										</div>
									</div>
								</div>
							</div>
							<!-- /9 -->
							<br>
							<!-- 10 -->
							<div class="text-head">
								<h3>Show/Hide : Record no. 3</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Subject">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Institute">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Certificate">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Period of Training From">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Period of Training To">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="No. of hour">
										</div>
									</div>
								</div>
							</div>
							<!-- /10 -->
							<br><br>
							<div align="center">
								<button id="btn-step-2" type="button">Next Step</button>
							</div>
						</div>
						<!-- /End Step 2 -->
						</div>


						<div class="accordion-section">
						<!-- Step 3 -->
						<div id="head-step-3" class="head-step " data-href="#step-3">
							step 3 present / last / previous employment
							<i style="float: right;" class="glyphicon glyphicon-chevron-down"></i>
							<div style="clear: both;"></div>
						</div>
						<div id="step-3" class="body-step">
							<!-- 1 -->
							<div class="text-head">
								<h3>Employment status</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1"> New Graduated
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" checked> Employee
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="3"> Unemployee
										</label>
									</div>
								</div>
								<br><br>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<font color="red">กรอกเฉพาะผู้ที่เคยมีประสบการณืทำงานกับบริษัท</font>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Name of company">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Telephone no">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Address"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Position">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Salary">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Brief description of duties"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Date employed">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Date left">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Name and title of your immediate supervisor"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="May inquiries be made from your past or present employer(s)?"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="text-head">
											<h4>May inquiries be made from your past or present employer(s)?</h4>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2"> No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Transportation">
										</div>
									</div>
								</div>

							</div>
							<!-- /1 -->
							<br>
							<!-- 2 -->
							<div class="text-head">
								<h3>Other income/month</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Transportation">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Commission">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="OT">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Bonus">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Medical">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Provident Fund">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Others (Spexify)"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Bath">
										</div>
									</div>
								</div>
							</div>
							<!-- /2 -->
							<br>
							<!-- 3 -->
							<div class="text-head">
								<h3>Show/Hide : Record no. 1</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From Date">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To Date">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="OT">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Bonus">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Previous Company's Name/Address & Telephone no."></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Position">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Salary">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Allowances/Welfare">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Reason for Leaving"></textarea>
										</div>
									</div>
								</div>

							</div>
							<!-- /3 -->
							<br>
							<!-- 4 -->
							<div class="text-head">
								<h3>Show/Hide : Record no. 2</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="From Date">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="To Date">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="OT">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Bonus">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Previous Company's Name/Address & Telephone no."></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Position">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Salary">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Allowances/Welfare">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea class="form-control input-lg" rows="3" placeholder="Reason for Leaving"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="add-record" align="right">
											<i class="glyphicon glyphicon-plus-sign"></i> Add Record
										</div>
									</div>
								</div>

							</div>
							<!-- /4 -->
							<br><br>
							<div align="center">
								<button id="btn-step-3" type="button">Next Step</button>
							</div>
						</div>
						<!-- /End Step 3 -->
						</div>



						<div class="accordion-section">
						<!-- Step 4 -->
						<div id="head-step-4" class="head-step" data-href="#step-4">
							step 4 ability / further information / contact / other information
							<i style="float: right;" class="glyphicon glyphicon-chevron-down"></i>
							<div style="clear: both;"></div>
						</div>
						<div class="body-step" id="step-4">
							<!-- 1 -->
							<div class="text-head">
								<h3>Language</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="text-head">
											<h4>Thai</h4>
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-10">
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Speaking</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Reading</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Writing</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="text-head">
											<h4>English</h4>
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-10">
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Speaking</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Reading</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Writing</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="text-head">
											<h4>Other 1</h4>
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-10">
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg">
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="text-head">
											<!-- <h4>English</h4> -->
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-10">
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Speaking</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Reading</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Writing</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="text-head">
											<h4>Other 2</h4>
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-10">
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg">
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="text-head">
											<!-- <h4>English</h4> -->
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-10">
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Speaking</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Reading</option>
												</select>
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-4">
											<div class="form-group">
												<select class="selectpicker">
													<option value="">Writing</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="text-head">
											<h4>Typing</h4>
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-10">
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="Thai Typing">
											</div>
										</div>
										<div class="padding-rl col-sx-12 col-sm-6">
											<div class="form-group">
												<input type="text" class="form-control input-lg" placeholder="English Typing">
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-2">
										<div class="text-head">
											<h4>Typing</h4>
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-10">
										<div class="padding-rl col-sx-12 col-sm-12">
											<div class="form-group">
												<textarea rows="3" class="form-control input-lg"></textarea>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- /1 -->
							<hr>
							<br>
							<!-- 2 -->
							<div class="text-head">
								<h3>Further Information</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="text-head">
										<h4>Have you ever been arrested, been sued or has been convicted or are controlled by criminal or civil cases or not ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>You were the last illness / surgery. Or diseases, chronic diseases, chemical of food allerfies or not?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>Do you own a motorcycle ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>Do you hold a car driving licence ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>Do you hold motorcycle driving licence ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>If necessary,can you provide a car for work ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>If neccesary,can you provide a motorcycle for work ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>Can you travel upcountry ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>If Can upcountry (Frequency)</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Permanent
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > Temporary
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Present hobbies,sports interest">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="text-head">
										<h4>What associations or professional organizations are you a member of and what position do you hold ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Permanent
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > Temporary
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>Details of guarantor</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Permanent
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > Temporary
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="text-head">
										<h4>Have you completed military service ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Permanent
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > Temporary
										</label>
									</div>
								</div>
								<hr>
							</div>
							<!-- /2 -->
							<br>
							<!-- 3 -->
							<div class="text-head">
								<h3>Contact Person</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="text-head">
										<h4>Person(s) for quick contact Incase of emergency</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Name">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Telephone no.">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Relationship">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea rows="3" class="form-control input-lg" placeholder="Address"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="text-head">
										<h4>Name of person(s) not related to applicant to whom reference may be made</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Name">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Telephone no.">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Relationship">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea rows="3" class="form-control input-lg" placeholder="Address"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="text-head">
										<h4>Person(s) in the Company whom applicant knows (If any)</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Name">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Telephone no.">
										</div>
									</div>
									<div class="padding-rl col-sx-12 col-sm-4">
										<div class="form-group">
											<input type="text" class="form-control input-lg" placeholder="Relationship">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<textarea rows="3" class="form-control input-lg" placeholder="Address"></textarea>
										</div>
									</div>
								</div>
							</div>
							<!-- /3 -->
							<br>
							<!-- 4 -->
							<div class="text-head">
								<h3>Others Information</h3>
							</div>
							<div class="text-body">
								<div class="row">
									<div class="text-head">
										<h4>How do know about this job application ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="checkbox-inline">
							  				<input type="checkbox" value="1"> Campus
										</label>
										<label class="checkbox-inline">
							  				<input type="checkbox" value="2" > Walk In
										</label>
										<label class="checkbox-inline">
							  				<input type="checkbox" value="3"> Website (Specify)
										</label>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="checkbox-inline">
							  				<input type="checkbox" value="1"> Recommended (Specify)
										</label>
										<label class="checkbox-inline">
							  				<input type="checkbox" value="2" > Other (Specify)
										</label>
									</div>
								</div>

								<div class="row">
									<div class="text-head">
										<h4>Have you ever been employed by BJC/BJC Group before ?</h4>
									</div>
								</div>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<label class="radio-inline">
							  				<input type="radio" value="1" checked> Yes
										</label>
										<label class="radio-inline">
							  				<input type="radio" value="2" > No
										</label>
									</div>
								</div>
								<br>

								<div class="row">
									<div class="padding-rl col-sx-12 col-sm-12">
										<div class="form-group">
											<input type="file" class="filestyle" data-icon="false" data-buttonText="Upload" data-size="lg">
										</div>
										<small>( filetype .doc, .pdf, maximum filesize 4 Mb. )</small>
									</div>
								</div>
							</div>
							<!-- /4 -->
							<br><br>
							<div align="center">
								<button type="Submit">Apply Now</button>
							</div>
						</div>
						<!-- /End Step 4 -->
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$(".menu-slide").click(function(){
			$(".menu-mobile .career-sub-menu").toggle("slow");
		});

		$("#step-1").show();

		function close_accordion_section(){
			$(".step .head-step").removeClass('active');
			$(".step .body-step").slideUp(1000).removeClass('open');
		}

		$(".head-step").click(function(e){

			var currenAttrValue = $(this).attr('data-href');

			if($(e.target).is('.active')){
				close_accordion_section();
			}else{
				close_accordion_section();

				$(this).addClass('active');

				$('.step ' + currenAttrValue).slideDown(1000).addClass('open');
			}

			e.preventDefault();

		});

		$("#btn-step-1").click(function(e){
			$(".step .head-step").removeClass('active');
			$(".step .body-step").slideUp(700 , function(){
				$(this).removeClass('open');
				$('html, body').animate({
		            	scrollTop: $("#head-step-1").offset().top
		        }, 700 , function(){
		        	$("#head-step-2").addClass('active');
		        	$('.step #step-2').slideDown(1000,function(){
						$(this).addClass('open');

					});
		        });
			});
			e.preventDefault();
		});

		$("#btn-step-2").click(function(e){

			$(".step .head-step").removeClass('active');
			$(".step .body-step").slideUp(700 , function(){
				$(this).removeClass('open');
				$('html, body').animate({
		            	scrollTop: $("#head-step-2").offset().top
		        }, 700 , function(){
		        	$("#head-step-3").addClass('active');
		        	$('.step #step-3').slideDown(1000,function(){
						$(this).addClass('open');

					});
		        });
			});
			e.preventDefault();
		});

		$("#btn-step-3").click(function(e){

			$(".step .head-step").removeClass('active');
			$(".step .body-step").slideUp(700 , function(){
				$(this).removeClass('open');
				$('html, body').animate({
		            	scrollTop: $("#head-step-3").offset().top
		        }, 700 , function(){
		        	$("#head-step-4").addClass('active');
		        	$('.step #step-4').slideDown(1000,function(){
						$(this).addClass('open');

					});
		        });
			});
			e.preventDefault();
		});

/*
		$("#step-1").show();

		$("#btn-step-1").click(function(){
			$("#head-step-1").removeClass('show');
			$("#head-step-1").addClass('active');
			$("#head-step-2").addClass('show');
			//$("#step-2").slideDown();
			//$("#step-1").slideUp();
			$("#step-2").show();
			$("#step-1").hide();
			$('html, body').animate({
            	scrollTop: $("#head-step-2").offset().top
            }, 2000);
		});

		$("#btn-step-2").click(function(){
			$("#head-step-2").removeClass('show');
			$("#head-step-2").addClass('active');
			$("#head-step-3").addClass('show');
			// $("#step-3").slideDown();
			// $("#step-2").slideUp();
			$("#step-3").show();
			$("#step-2").hide();
			$('html, body').animate({
            	scrollTop: $("#head-step-3").offset().top
            }, 2000);
		});

		$("#btn-step-3").click(function(){
			$("#head-step-3").removeClass('show');
			$("#head-step-3").addClass('active');
			$("#head-step-4").addClass('show');
			// $("#step-4").slideDown();
			// $("#step-3").slideUp();
			$("#step-4").show();
			$("#step-3").hide();
			$('html, body').animate({
            	scrollTop: $("#head-step-4").offset().top
            }, 2000);
		});
		*/
	});

</script>
