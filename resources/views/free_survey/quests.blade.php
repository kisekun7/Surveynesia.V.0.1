@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <meta name="csrf-token" content="{{ csrf_token() }}">
<h1 class="text-center">Try Free Survey First!</h1>
		<h4 class="text-center">We give you a free real survey sent to our 100 respondent as a trial</h4>
		<hr />
		
		<div class="well well-sm">
			<h4>Please fill in the details to create a free survey.</h4>
		</div>
		
		<form id="rootwizard-2" method="post" action="/free_survey" class="form-wizard validate">
			
			<div class="steps-progress">
				<div class="progress-indicator"></div>
			</div>
			
			<ul>
				<li class="active">
					<a href="#tab2-1" data-toggle="tab"><span>1</span>Survey Info</a>
				</li>
				<li>
					<a href="#tab2-2" data-toggle="tab"><span>2</span>Write Question</a>
				</li>
				<li>
					<a href="#tab2-3" data-toggle="tab"><span>3</span>Send Survey</a>
				</li>
				
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane active" id="tab2-1">
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="survey_title">Survey Title</label>
								<input class="form-control" name="survey_title" id="survey_title" data-validate="required" placeholder="Title" />
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Category">Category</label>
								
								<select name="category" class="selectboxit" data-validate="required">
									<optgroup label="United States">
										<option value="Beauty">Beauty</option>
										<option value="Financial">Financial</option>
										<option value="Game">Game</option>
										<option value="Health">Health</option>
										<option value="Housing">Housing</option>
										<option value="Housing">Holiday</option>
										<option value="Lifestyle">Lifestyle</option>
										<option value="Mobile">Mobile</option>
										<option value="Transport">Transport</option>
										<option value="Politic">Politic</option>
									</optgroup>
								</select>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" for="description">Survey Description</label>
								<textarea class="form-control autogrow" name="description" id="description" data-validate="minlength[10]" rows="5" placeholder="Description"></textarea>
							</div>
						</div>
		
					</div>
					
				</div>
				
				<div class="tab-pane" id="tab2-2">
					
					<div class="row">
						<div class="col-md-12">
						
							<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
								
								<!-- panel head -->
								<div class="panel-heading">
									<div class="panel-title">Question Survey</div>
									
									<div class="panel-options">
										<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
										<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
										<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
										<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
									</div>
								</div>
								
								<!-- panel body -->
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
												<div class="form-group">
												<label class="control-label" for="Question">Question</label>
												<input class="form-control" name="question" id="question" data-validate="required" placeholder="Write Your Question" />
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<div class="col-sm-5">
													<div class="checkbox checkbox-replace">
														<input type="checkbox" id="chk-1">
														<label>Display options in random order</label>
													</div>
												</div>
												
											</div>
										</div>
									</div>
									<br>
									
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<form name="add_name" id="add_name">  

										            <div class="alert alert-danger print-error-msg" style="display:none">
										            <ul></ul>
										            </div>

										            <div class="alert alert-success print-success-msg" style="display:none">
										            <ul></ul>
										            </div>

										            <div class="table-responsive">  
										                <table class="table table-bordered" id="dynamic_field">  
										                    <tr>  
										                        <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
										                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
										                    </tr>  
										                </table>  
										                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
										            </div>

										         </form>  
											</div>
										</div>
									</div>
									
								</div>

								
							</div>
						
						</div>
					</div>

					<div class="row">
						
						<div class="col-md-8">
							<div class="form-group">
								<div class="btn-group">
								  <button class="btn btn-success btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Create Question <span class="glyphicon glyphicon-plus"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								    <li><a href="#">Action</a></li>
								    <li><a href="#">Another action</a></li>
								    <li><a href="#">Something else here</a></li>
								    <li role="separator" class="divider"></li>
								    <li><a href="#">Separated link</a></li>
								  </ul>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="tab-pane" id="tab2-3">
					
					<strong>Create account to login to your Dashboard</strong>
					<br />
					<br />
					
					<div class="row">
						<div class="col-md-4">	
							<div class="form-group">
								<label class="control-label">Choose Username</label>
								
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-user"></i>
									</div>
									
									<input type="text" class="form-control" name="username" id="username" data-validate="required,minlength[5]" data-message-minlength="Username must have minimum of 5 chars." placeholder="Could also be your email" />
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label">Choose Password</label>
								
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-key"></i>
									</div>
									
									<input type="password" class="form-control" name="password" id="password" data-validate="required" placeholder="Enter strong password" />
								</div>
							</div>
						</div>
						
						<div class="col-md-4">						
							<div class="form-group">
								<label class="control-label">Repeat Password</label>
								
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-cw"></i>
									</div>
									
									<input type="password" class="form-control" name="passwords" id="password" data-validate="required,equalTo[#password]" data-message-equal-to="Passwords doesn't match." placeholder="Confirm password" />
								</div>
							</div>
						</div>
						
					</div>
					
					<br />
					
					<strong>Submit Aditional Data</strong>
					<br />
					<br />
					
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="job_potition">Job Position</label>
								<input class="form-control" name="job_potition" id="job_potition" data-validate="require" placeholder="Job Potition" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="company">Company</label>
								<input class="form-control" name="company" id="company" placeholder="Company" />
							</div>
						</div>
						
						
					</div>
					
					<br />
					
					<strong>Get noticed when your survey is live by email and sms.</strong>
					<br />
					<br />
					
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="email">Email</label>
								<input class="form-control" type="email" name="email" id="email" data-validate="require" placeholder="Email" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="phone_number">Phone Number</label>
								<input class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" />
							</div>
						</div>
						
					</div>

					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Finish Registration</button>
						{{ csrf_field() }}
					</div>
					
				</div>

				<ul class="pager wizard">
					<li class="previous">
						<a href="#"><i class="entypo-left-open"></i> Previous</a>
					</li>
					
					<li class="next">
						<a href="#">Next <i class="entypo-right-open"></i></a>
					</li>
				</ul>
				
				
			</div>
		
		</form>
<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  

      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           });  
      });  

      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>
@endsection