 @extends('user.app')
 @section('bg-img',asset('user/img/home-bg.jpg'))
 @section('title','Contact As')
@section('sub-heding','Bootstrap Template')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    .fa-thumbs-up:hover{
        color:red;
    }
  </style>
@endsection
 @section('main-content')

 <div id="fh5co-contact">
		<div class="container">
			<div class="row">
			@include('includes.message')
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Ecole Biscuiterie<br> Niary Tally</li>
							<li class="phone"><a href="tel://1234567920">+ 221 000 00 00</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">empro@gmail.com</a></li>
							<li class="url"><a href="http://freehtml5.co">empro-sn.com</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="{{ route('contact.index') }}" method="post" class="form">
					@csrf
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" name="firstname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname"  name="lastname" class=" lname form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
    
						<div class="form-group col-md-12 "  style="">
						<div class="row">
						<div class="col-md-6">
						<button type="submit" class="btn btn-empro btn-block">Send</button>
						</div>
						
						<div class="col-md-6">
						<button type="reset" class="btn btn-empro2 btn-block">Reset</button>
						</div>
						</div>
					</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

 @endsection

 @section('js')
<script src=" {{ asset('js/app.js') }} "></script>
 @endsection

