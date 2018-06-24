<div class="col-lg-4">
	<div class="ibox float-e-margins">
		<div class="ibox-content">
			<div id="modal-form" class="modal fade" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="row">
								<div class="col-sm-12 b-r"><h3 class="m-t-none m-b">Visa Assessment Form </h3>
									<p>Please fill-up the form.</p>
									<form role="form" method="post" action="{{route('enquery')}}" id="form">
										@csrf
										<div class="form-group">
											<!-- <div class="col-sm-6"> -->
												<label>Full Name</label> 
												<input type="text" placeholder="Enter your full name" class="form-control" name="full_name">
											<!-- </div> -->
										</div>
										<div class="form-group">
											<!-- <div class="col-sm-6"> -->
												<label>Phone</label> 
												<input type="number" placeholder="Enter your phone number" class="form-control" name="phone_no">
											<!-- </div> -->
										</div>
										<div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" class="form-control" name="email"></div>
										<div class="form-group"><label>Contact Address</label> <input type="text" placeholder="Enter your current address" class="form-control"  name="address"></div>
										<!-- <div class="form-group"><label>Subject</label> <input type="text" placeholder="Enter subject of enquiry" class="form-control"></div> -->
										<div class="form-group"><label>Country</label> 
											<select name="country" class="form-control select2-c">
												@foreach($countr as $c)
													<option value="{{$c->id}}">{{$c->name}}</option>
												@endforeach
												
											</select>
										</div>
										<div class="form-group"><label>Purpose</label> <input type="text" placeholder="Enter Purpose of Going" class="form-control" name="purpose"></div>
										<div class="form-group"><label>Message</label> <textarea type="text" placeholder="Write your enquiry/message" class="form-control" name="message"></textarea></div>
										<div class="form-group">
											<div class="col-sm-12 col-sm-offset-2">
											    <button class="col-sm-3 btn btn-sm btn-primary  m-t-n-xs" type="submit"><strong>Send</strong></button>
											    <button class="col-sm-3 btn btn-sm btn-primary  m-t-n-xs" style="background-color: #ff4e44" type="submit"><strong>Cancel</strong></button>
											</div>
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
	<script src="/js/plugins/validate/jquery.validate.min.js"></script>
	<script>
         $(document).ready(function(){

             $("#form").validate({
                 rules: {
                     full_name: {
                         required: true,
                         minlength: 3
                     },
                     phone_no: {
                         required: true,
                         number: true
                     },
                     email: {
                         required: true,
                         email: true
                     },
                     address: {
                         required: true,
                         minlength: 6
                     },
                     country: {
                         required: true,
                     },
                     purpose: {
                        required: true,
                        minlength: 4
                     },
                     message: {
                         required: true,
                         minlength: 10,
                         maxlength: 1000,
                     }
                     

                 }
             });
        });
    </script>
