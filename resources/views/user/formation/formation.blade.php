 @extends('user.app')
 @section('bg-img',asset('user/img/home-bg.jpg'))
 @section('title','Clean Blog')
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

      	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>NOS FORMATIONS</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
      </div>
      <!-- debut du row -->
			<!-- <div class="row">
				<div class="col-md-3 col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-study"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Formations</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Design</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Creation de site web</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Mintenance Informatique</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>

        <div class="col-md-3 col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-study"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Formations</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Design</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Creation de site web</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-md-4 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Mintenance Informatique</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
        </div>
        
      </div> -->
      <!-- fin du row -->

      <!-- debut du row -->
      <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-6 text-center animate-box shadow">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(user/images/project-1.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Creation de site web</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
				</div>
        <div class="col-md-3 col-lg-3 col-sm-6 text-center animate-box shadow">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(user/images/project-2.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Design</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
				</div>
        <div class="col-md-3 col-lg-3 col-sm-6 text-center animate-box shadow">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(user/images/project-3.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Bureautique</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 text-center animate-box shadow">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(user/images/project-3.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Maintenace</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-6 text-center animate-box shadow">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(user/images/project-1.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Creation de site web</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
				</div>
        <div class="col-md-3 col-lg-3 col-sm-6 text-center animate-box shadow">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(user/images/project-2.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Design</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
				</div>
        <div class="col-md-3 col-lg-3 col-sm-6 text-center animate-box shadow">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(user/images/project-3.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Bureautique</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 text-center animate-box shadow">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(user/images/project-3.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Maintenace</a></h3>
							<span class="posted_on">March. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div> 
					</div>
        </div>
        
      </div>
      <!-- fin du row -->
		</div>
    </div>

 @endsection

 @section('js')
<script src=" {{ asset('js/app.js') }} "></script>
 @endsection

