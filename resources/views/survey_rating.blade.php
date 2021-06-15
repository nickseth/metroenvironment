@include('header')

<body class="sec2-bg2 final-level-step15">
	<!-- Navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="d-flex align-center space-between">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img src="images/metro-logo.svg" />
					</a>
				</div>
				<div class=" navbar-collapse right-header text-right" id="myNavbar">
					<h1>#<span>M</span>vironment</h1><strong>Professional level</strong>
				</div>
			</div>
		</div>
	</nav>
	<div class="container ">
	<form class="survey-form">
		<div class="relative">
			<div class="page-width mt-1 survey-ratingpage">
				<div class="row">
					<div class="col-sm-12">
						<div class="sec1-box-center text-center">
		
							<p class="animate__animated animate__fadeIn  thank-title">Thank You!</p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="sec3-box-center animate__animated animate__fadeInUp ">
							<div class="fieldset-box">
							<div class="legend-title"><span>Rate your Surve Experience</span></div>
							<ul class="d-flex user-rating">
							<li data-value="1"><img src="images/rate-0.svg"/>
							<span class="rate-title">Very unsatisfied</span>
							</li>
							<li data-value="2"><img src="images/rate-1.svg"/>
							<span class="rate-title">Unsatisfied</span>
							</li>
							<li data-value="3"><img src="images/rate-2.svg"/>
							<span class="rate-title">Neutral</span>
							</li>
							<li data-value="4"><img src="images/rate-3.svg"/>
							<span class="rate-title">Satisfied</span>
							</li>
							<li data-value="5"><img src="images/rate-4.svg"/>
							<span class="rate-title">Very Satisfied</span>
							</li>
							
							</ul>
							<input type="hidden" class="hidden-survey-rating" value="" name="survey_rating"/>
							</div>
							</div>
							<div class=" text-center">Please rank your experience of taking this survey by clicking one of the stars.</div>
							<div class="center-btn text-center"><a href="{{url('/')}}" class="btn-flip next-btn get-survey-details submit-details" data-back="Submit" data-front="Submit"></a></div>
						</div>
					
				</div>
			</div>
			
			
		</div>
	</form>
	</div>
	
	</div>
	<div class="rate-bg">
	<img src="images/rate-bg.svg" />
	</div>
</body>

</html>