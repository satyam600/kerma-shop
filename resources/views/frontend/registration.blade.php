@extends("frontend.layouts.main");
@section("main-container")


	

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
					<nav class="d-flex align-items-center">
						<a href="{{url('index')}}">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="{{url('category')}}">Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{url('frontend/img/login.jpg')}}" alt="">
						<div class="hover">
							<h4>Already Registered on our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="{{url('login')}}">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Register Your Self</h3>
						<form class="row login_form" action="registration" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" value="{{old('username')}}">
								<span style="color:red">@error('username')
									{{$message}}
								@enderror</span>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
								<span style="color:red">@error('password')
									{{$message}}
								@enderror</span>
							</div>
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password_confirmation" placeholder="Conform Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Conform Password'">
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="fname" placeholder="Fist Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Fist Name'" value="{{old('fname')}}">
								<span style="color:red">@error('fname')
									{{$message}}
								@enderror</span>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" value="{{old('lname')}}">
								<span style="color:red">@error('lname')
									{{$message}}
								@enderror</span>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="radio" id="f-option2" name="gender_id" value=1>
									<label for="f-option2">Male </label>
                                    <input type="radio" id="f-option2" name="gender_id" value=2>
									<label for="f-option2">Female </label>
                                    <input type="radio" id="f-option2" name="gender_id" value=3>
									<label for="f-option2">Other </label>
									<span style="color:red">@error('gender_id')
									{{$message}}
								@enderror</span>
								</div>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" value="{{old('phone')}}">
								<span style="color:red">@error('phone')
									{{$message}}
								@enderror</span>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" value="{{old('email')}}">
								<span style="color:red">@error('email')
									{{$message}}
								@enderror</span>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" value="{{old('address')}}">
								<span style="color:red">@error('address')
									{{$message}}
								@enderror</span>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="state" placeholder="State" onfocus="this.placeholder = ''" onblur="this.placeholder = 'State'" value="{{old('state')}}">
								<span style="color:red">@error('state')
									{{$message}}
								@enderror</span>
							</div>

                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="status" placeholder="Status" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Status'" value="{{old('status')}}">
								<span style="color:red">@error('status')
									{{$message}}
								@enderror</span>
							</div>

							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="terms" value="Yes">
									<label for="f-option2">Accept Terms</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="newsletters" value="Yes">
									<label for="f-option2">Want to recive our newsletters</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="terms" value="Yes">
									<label for="f-option2">Hear more about our products</label>
								</div>
							</div>

							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->





@endsection