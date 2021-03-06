@include('header')

<body class="sec2-bg2">
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
	<!-- Navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="d-flex align-center space-between">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{URL::to('/')}}">
						<img src="images/metro-logo.svg" />
					</a>
				</div>
				<div class=" navbar-collapse right-header text-right" id="myNavbar">
					<h1>#<span>M</span>vironment</h1><strong>Sustainability & WORK</strong>
				</div>
			</div>
		</div>
	</nav>
	<div class="container ">
	<form class="final-steps survey-form step1-page required-validation" data-validation-type="single-input-field">
		<div class="relative">
			<div class="page-width mt-1">
				<div class="row">
					<div class="col-sm-12">
						<div class="sec1-box-center text-center mt">
							<div class="box-top">
								<div class="box-icon animate__animated animate__fadeInLeft">
									<img src="images/leaves.svg" />
								</div>
								<div class="animate__animated animate__fadeIn green-text">Mark your awareness level on the various Metro Sustainability initiatives.</div>
							</div>
							<p class="animate__animated animate__fadeIn gray-text">This wheel indicates Metro's Sustainability initiatives. The wheel will now start blinking, one section at a time.</br>
              For the questions corresponding to each section, please select one box as your answer.</br>
              And below each question choose the box most relevant to you.</p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="sec1-box-right animate__animated animate__fadeInUp ">
							<div class="popup-type-container ">
								<h2 class="clr-blue " style="text-align:center;">How aware are you about METRO's Sustainability Strategy and its 8 focus areas?</h2>
								<p class="animate__animated animate__fadeIn gray-text">Select your answer and click next to proceed</p>
								<div class="emoji-cover">
									<div class="emoji-cover-item emoji-option-js active" data-value="5">
										<img src="images/sec-3-01.svg" alt="Emoji">
										<div class="emoji-title">Actively Involved</div>
									</div>

									<div class="emoji-cover-item emoji-option-js" data-value="4">
										<img src="images/sec-3-02.svg" alt="Emoji">
										<div class="emoji-title">Indirectly Involved</div>
									</div>

									<div class="emoji-cover-item emoji-option-js" data-value="3">
										<img src="images/sec-3-03.svg" alt="Emoji">
										<div class="emoji-title">Yes, I am aware</div>
									</div>

									<div class="emoji-cover-item emoji-option-js" data-value="2">
										<img src="images/sec-3-04.svg" alt="Emoji">
										<div class="emoji-title">Not fully Aware</div>
									</div>

									<div class="emoji-cover-item emoji-option-js" data-value="1">
										<img src="images/sec-3-05.svg" alt="Emoji">
										<div class="emoji-title">This is new to me</div>
									</div>

								</div>
<input type="hidden" name="final_level_step1" value="" class="hidden-smiley-data"/>
								<div class="mt-3 btn-cover">
								<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
					        <a href="{{url('/final-level-step2')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
					      </div>
							</div>
							</div>
						</div>
					
				</div>
			</div>
			
			
		</div>
	<div class="col-sm-12 text-center step-text">
	<p class="animate__animated animate__fadeIn gray-text">17 of 25</p>
</div>
	</form>
	</div>
	
	</div>
</body>

</html>