{{-- checkout page er ager sob code --}}
@extends('frontend.master')
@section('content')
    	<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<!-- Billing Details -->
						<div class="billing-details">
							<form action="{{url('save-shipping-address/')}}" method="post">
								@csrf
								<div class="section-title">
									<h3 class="title">Shiping address</h3>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="name" placeholder="Full Name">
								</div>
								<div class="form-group">
									<input class="input" type="email" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="address" placeholder="Address">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="city" placeholder="City">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="country" placeholder="Country">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="zip_code" placeholder="ZIP Code">
								</div>
								<div class="form-group">
									<input class="input" type="tel" name="phone" placeholder="phone">
								</div>
								<div class="text-right">
									<button type="submit" class="primary-btn order-submit">next</button>
								</div>
							</form>

						</div>
						<!-- /Billing Details -->
					</div>
					<div class="col-md-2"></div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection