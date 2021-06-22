@include('header')

<body class="sec2-bg2">
<div class="loader-wrap"><div class="loader"><img src="images/anim-tree.gif" /></div></div>
	<!-- Navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="d-flex align-center space-between">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{url('/')}}">
						<img src="images/metro-logo.svg" />
					</a>
				</div>
				<div class=" navbar-collapse right-header text-right" id="myNavbar">
					<h1>#<span>M</span>vironment</h1><strong>Sustainability & YOU</strong>
				</div>
			</div>
		</div>
	</nav>
	<div class="container ">
	<form class="survey-form">
		<div class="relative">
			<div class="page-width mt-1 page9">
				<div class="row">
					<div class="col-sm-12">
						<div class="sec1-box-center text-center">
							<div class="box-top">
								<div class="box-icon animate__animated animate__fadeInLeft">
									<img src="images/leaves.svg" />
								</div>
								<div class="animate__animated animate__fadeIn green-text">Have you changed your consumption patterns for the following foods in the past few years?</div>
							</div>
							<p class="animate__animated animate__fadeIn gray-text">Move the slider to the right, corresponding to the option that is most relevant to you. Tick the box if the statement is true for you</p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="sec1-box-right animate__animated animate__fadeInUp ">
							<div class="foods-list">
								<div class="grid-container animate__zoomIn ">
									<div class="grid-list">
										<div class="grid-item">
											<div class="grid-icons">
											<img src="images/chicken-egg.png" />
											</div>
											<p class="light-text">Chickens</p>
										</div>
									</div>
									<div class="grid-list">
										<div class="grid-item">
											<div class="grid-icons">
											<img src="images/quails-egg.png" />
											</div>
											<p class="light-text">Quails</p>
										</div>
									</div>
									<div class="grid-list">
										<div class="grid-item">
											<div class="grid-icons">
												<img src="images/ostrich-egg.png" />
											</div>
											<p class="light-text">Ostriches</p>
										</div>
									</div>
								</div>
								</div>
								<div class="rangle-slider gray-range foods-range">
									<p class="animate__animated animate__fadeIn dark-text">Eggs</p>
									<div class="range">
										<input type="range"  name="personal_level_step9"  min="1" max="5" steps="1" value="1">
									</div>
									<ul class="range-labels">
										<li>No change<br/> in diet</li>
										<li>Planning to reduce consumption</li>
										<li>Reduced consumption</li>
										<li>Avoiding consumption</li>
										<li>Have stopped completely</li>
									</ul>
								</div>
								<div class="outer-input foods-check">
									<div class="form-group">
										<input type="checkbox" id="allsame_personal_step_9" name="personal_level_step9_never" value="I have never eaten Eggs" class="never-selection-checkbox">
										<label for="allsame_personal_step_9">I have never eaten Eggs</label>
									</div>
								</div>
							</div>
						</div>
					
				</div>
			</div>
			<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="{{url('/personal-level-step10')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
			</div>
		</div>
	</form>
	</div>
	</div>
</body>

</html>