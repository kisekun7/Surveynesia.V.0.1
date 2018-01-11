@extends('layouts.index_profile')

@section('content')
<div class="row">
			<div class="col-md-9 col-sm-7">
				<h2>Surveys</h2>
			</div>
			
			<div class="col-md-3 col-sm-5">
				
				<form method="get" role="form" class="search-form-full">
				
					<div class="form-group">
						<input type="text" class="form-control" name="s" id="search-input" placeholder="Search..." />
						<i class="entypo-search"></i>
					</div>
					
				</form>
				
			</div>
		</div>

		<!-- Member Entries -->
		@foreach($quests as $quest)
		<!-- Single Member -->
		<div class="member-entry">
				
			<h3> {{ $quest->survey_title }} </h3>
					
					<div class="row">
						<div class="col-md-4">	
							<div class="form-group">
								<label class="control-label">Status</label>
								
								<div class="input-group">
									<div class="label label-success">Active</div>
								</div>
							</div>
						</div>

						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label">Question</label>
								
								<div class="input-group">
									
									<h4 class="text-center text-danger"><strong>0</strong></h4>
								</div>
							</div>
						</div>
						
						<div class="col-md-2">						
							<div class="form-group">
								<label class="control-label">Responses</label>
								
								<div class="input-group">
									
									<h4 class="text-center text-danger"><strong>0</strong></h4>
								</div>
							</div>
						</div>

						<div class="col-md-2">						
							<div class="form-group">
								<label class="control-label">Preview</label>
								
								<div class="input-group">
									
									<h4 class="text-center text-danger"><strong>0</strong></h4>
								</div>
							</div>
						</div>

						<div class="col-md-2">						
							<div class="form-group">
								<label class="control-label">Option</label>
								
								<div class="input-group">
									
									<h4 class="text-center text-danger"><strong>0</strong></h4>
								</div>
							</div>
						</div>
						
					</div>
			
		</div>
		@endforeach
		<!-- Single Member -->
		
@endsection