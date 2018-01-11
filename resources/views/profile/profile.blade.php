@extends('layouts.index_profile')

@section('content')
<h1><i class="entypo-user"></i> My Profile</h1>
		
		<br />
		
		<!-- UI Panels -->
		<div class="row">
			
			<div class="col-md-12">
			
				<div class="panel minimal minimal-gray">
					
					<div class="panel-heading">
						<div class="panel-title"><h4>Profile account</h4></div>
						<div class="panel-options">
							
							<ul class="nav nav-tabs">
								<li class="active"><a href="#profile-1" data-toggle="tab"><i class="entypo-user"></i> Profile</a></li>
								<li><a href="#profile-2" data-toggle="tab"><i class="entypo-pencil"></i> Edit Pofile</a></li>
							</ul>
						</div>
					</div>
					
					<div class="panel-body">
						
						<div class="tab-content">
							<div class="tab-pane active" id="profile-1">

								<div class="row">
									<div class="col-md-5">
									
										<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->

											<!-- panel body -->
											<div class="panel-body">
												
												<div class="row">
												  <div class="col-md-4">
												    <a href="#" class="thumbnail">
												      <img src="images/kagurachan.png" alt="...">
												    </a>
												  </div>
												  <div class="col-md-6">
												  <h4><strong>Rajaka Kauthar Allam</strong></h4>
												  <ul class="user-details">
													<li>
														<a href="#">
															<i class="entypo-location"></i>
															Prishtina
														</a>
													</li>
													
													<li>
														<a href="#">
															<i class="entypo-suitcase"></i>
															Works as <span>Laborator</span>
														</a>
													</li>
													
													<li>
														<a href="#">
															<i class="entypo-calendar"></i>
															16 October
														</a>
													</li>
													<li>
														<a href="#">
															<i class="entypo-mail"></i>
															srakaal@gmail.com
														</a>
													</li>
													<li>
														<a href="#">
															<i class="entypo-phone"></i>
															+62 898 7538 782
														</a>
													</li>
												</ul>
												
												</div>

												</div>
												
											</div>
											
										</div>
									
									</div>

									<div class="col-md-7">
									
										<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
											<div class="panel-heading">
												<div class="panel-title">Points and Reedem</div>
												
											</div>
											<!-- panel body -->
											<div class="panel-body">
												
												<div class="row">
												  
												  <div class="col-sm-6">
			
													<div class="tile-stats tile-primary">
														<div class="icon"><i class="entypo-suitcase"></i></div>
														<div class="num" data-start="0" data-end="175" data-prefix="" data-postfix=" Pts" data-duration="1500" data-delay="0">0 &pound;</div>
														
														<h3>Your Points</h3>
														<p>redeem your points with rewards.</p>
													</div>
													
												</div>

												<div class="col-sm-6">
			
													<div class="tile-stats tile-white-gray">
														<div class="icon"><i class="glyphicon glyphicon-gift"></i></div>
														<div class="num"><i class="glyphicon glyphicon-gift"></i></div>
														
														<h3>Redeem Rewards</h3>
														<p>Redeem your points here!</p>
													</div>
													
												</div>

												</div>
												
											</div>
											
										</div>
									
									</div>

								</div>

							</div>
							
							<div class="tab-pane" id="profile-2">
								<div class="row">
									<div class="col-md-4">
									
										<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->

											<!-- panel body -->
											<div class="panel-body">
												
												<a href="#" title="">
												<div class="col-md-12"><h4><i class="entypo-user"></i> Pengaturan Akun</h4></div>
												</a>

												<a href="#" title="">
												<div class="col-md-12"><h4><i class="entypo-phone"></i> Hubungkan Ponsel</h4></div>
												</a>

												<a href="#" title="">
												<div class="col-md-12"><h4><i class="entypo-mail"></i> Verifikasi Email</h4></div>
												</a>

												<a href="#" title="">
												<div class="col-md-12"><h4><i class="entypo-up-circled"></i> Pro Member</h4></div>
												</a>
												
											</div>
											
										</div>
									
									</div>

									<div class="col-md-8">
									
										<div class="panel panel-primary">
										
											<div class="panel-heading">
												<div class="panel-title">Edit Data</code></small></div>
										
												<div class="panel-options">
													<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
													<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
													<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
												</div>
											</div>
										
											<div class="panel-body">
										
												<form role="form" id="form1" method="post" class="validate">
										
													<div class="form-group">
														<label class="control-label">Username</label>
										
														<input type="text" class="form-control" name="name" data-validate="required" data-message-required="This is custom message for required field." placeholder="Required Field" />
													</div>
										
													<div class="form-group">
														<label class="control-label">Email Field</label>
										
														<input type="text" class="form-control" name="email" data-validate="email" placeholder="Email Field" />
													</div>
										
													<div class="form-group">
														<label class="control-label">Full Name</label>
										
														<input type="text" class="form-control" name="text" data-validate="text" placeholder="Name" />
													</div>
										
													<div class="form-group">
														<label class="control-label">Password</label>
										
														<input type="password" class="form-control" name="password" data-validate="text" placeholder="Password" />
													</div>
										
													<div class="form-group">
														<label class="control-label">Retype Password</label>
										
														<input type="password" class="form-control" name="repassword" data-validate="text" placeholder="Retype Password" />
													</div>
										
													<div class="form-group">
														<button type="submit" class="btn btn-success">Submit</button>
														<button type="reset" class="btn">Reset</button>
													</div>
										
												</form>
										
											</div>
										
										</div>
									
									</div>

								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>
		
		</div>
@endsection