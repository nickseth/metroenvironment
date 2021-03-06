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
					<h1>#<span>M</span>vironment</h1><strong>Sustainability & YOU</strong>
				</div>
			</div>
		</div>
	</nav>
	<div class="container ">
	<form class="survey-form page13">
		<div class="relative">
			<div class="page-width mt-1 ">
				<div class="row">
					<div class="col-sm-12">
						<div class="sec1-box-center text-center ">
							<div class="box-top">
								<div class="box-icon animate__animated animate__fadeInLeft">
									<img src="images/leaves.svg" />
								</div>
								<div class="animate__animated animate__fadeIn green-text">While purchasing a company’s products, how would you prioritise <br>
the factors that affect purchase decision?</div>
							</div>
							<p class="animate__animated animate__fadeIn gray-text">Move the slider to the right, corresponding to the option that is most relevant to you, where 1 = Strongly disagree and 5 = Strongly agree.</p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="sec1-box-right animate__animated animate__fadeInUp image-range-slider">
						<img src="images/cart-boy-anim.gif"/>

<div class="rangle-slider">
<p class="animate__animated animate__fadeIn dark-text">Companies that are not related to human rights violations
(exploitation, child labour)</p>
<div class="range">
  <input type="range" min="1" max="5" name="personal_level_step13" steps="1" value="1">
</div>

<ul class="range-labels">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
</ul>

</div>
						</div>
					</div>
				</div>
			</div>
			<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="{{url('/personal-level-step14')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
			</div>
		</div>
	</form>
	</div>
	</div>
</body>

</html>