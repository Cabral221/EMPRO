 @extends('user.app')
 @section('bg-img',asset('user/img/home-bg.jpg'))
 @section('title','Admission')
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
				<div class="col-md-4 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://freehtml5.co">freeHTML5.co</a></li>
						</ul>
					</div>

        </div>
        
				<div class="col-md-8 animate-box">
					<h3>Register here</h3>
					<form action="{{ route('admission.store') }}" method="post">
            @csrf
						<div class="row form-group">
        <!-- les button -->
            <div class="col-md-12 form-group">
            <label for="">Votre situation matriminial</label>
              <div class="row form-group">
                  <div class="col-md-2 pull-left">
                   <div class="form-group">
                   <label style="margin-top:-10px;" for="damme"> Ma Damme <input type="radio" class="" name="damme" id="damme" ></label>
                   </div>
                  </div>
                  <div class="col-md-2 pull-left">
                   <div class="form-group">
                   <label style="margin-top:-10px;" for="demoisel"> Ma Demoisel  <input type="radio" class="" name="demoisel"  id="demoisel" ></label>
                   </div>
                  </div>
                  <div class="col-md-2 pull-left">
                      <div class="form-group">
                      <label style="margin-top:-10px;" for="monsier"> Monsier   <input type="radio" class="" name="monsier"  id="monsier" ></label>
                      </div>
                  </div>
              </div>
            </div>
        <!-- fin des button -->

					<div class="form-group">
          <div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" id="fname" name="firstname" class="form-control" placeholder="Your firstname">
              </div>
              
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" id="lname" name="lastname" class="form-control" placeholder="Your lastname">
							</div>
          </div>
            

           <div class="col-md-12">
             <br>
             <div class="row">
             <div class="form-group">
            <div class="col-md-6">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Your email address">
            </div>
            <div class="col-md-6">
              <label for="phone">Phone</label>
              <input type="number" id="phone" name="phone" class="form-control" placeholder="Your phone number">
            </div>
            </div>
             </div>
           </div>
              
           <div class="col-md-12">
             <br>
             <div class="row">
             <div class="form-group">

              <div class="col-md-4">
                <label for="date">Date Naissance</label>
                <input type="date" id="date" name="date" class="form-control" placeholder="">
              </div>

                <div class="col-md-4">
                <label for="lieu">Lieu</label>
                <input type="text" id="lieu" name="lieu" class="form-control" placeholder="">
                </div>

                <div class="col-md-4">
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse" class="form-control" placeholder="">
                </div>

            </div>
             </div>
           </div>

				
							<div class="col-md-12">
                <br>
                <div class="row">
                <div class="col-md-4 checkbox" >
                <label for="">Chisir votre niveau</label>
              
                  <div class="">
                    <label for="initial">  <input type="checkbox" name="initial[]" id="initial"> Initial</label>
                   
                  </div>
                  <div class="">
                    <label for="itermediare"> <input type="checkbox" name="itermediare[]" id="itermediare"> Intermediare</label>
                    
                  </div>
                  <div class="">
                    <label for="avance"> <input type="checkbox" name="avance[]" id="avance"> Avance</label>
                    
                  </div>
              </div>

        <!-- les button -->
            <div class="col-md-4">
            <label for="">Avez-vous des notions en TIC</label>
              <div class="form-group radio">
                  <div class="form-group">
                    <label for="oui"> <input type="radio" name="oui" value="oui" id="oui">Oui</label>
                  </div>

                  <div class="form-group">
                    <label for="non"> <input type="radio" name="non" value="non" id="non">Non</label>
                  </div>
              </div>
            </div>
        <!-- fin des button -->



                 <!-- les button -->
              <div class="col-md-4">
              <label for="">Disposer vous d'un ordinateur</label>
                <div class="form-group radio">
                    <div class="form-group">
                      <label for="oui_ord"> <input type="radio" name="oui" value="oui_ord" id="oui_ord">Oui</label>
                    </div>

                    <div class="form-group">
                      <label for="non_ord"> <input type="radio" name="non" value="non_ord" id="non_ord">Non</label>
                    </div>
                </div>
            </div>
        <!-- fin des button -->

                </div>
              </div>

              
          <div class="form-group col-md-12 text-center"  style="">
              <div class="row">
              <div class="col-md-6">
								<button type="submit" class="btn btn-primary btn-block">Send</button>
              </div>
              
							<div class="col-md-6">
              <button type="reset" class="btn btn-secondary btn-block">Reset</button>
              </div>
              </div>
          </div>


					</form>		
				</div>
			</div>
			
		</div>
	</div>
	</div>


 @endsection

 @section('js')
<script src=" {{ asset('js/app.js') }} "></script>
 @endsection

