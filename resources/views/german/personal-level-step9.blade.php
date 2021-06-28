@include('/german/header')

<body class="sec2-bg2">
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
	<!-- Navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="d-flex align-center space-between">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{url('/de/')}}">
						<img src="../german_assets/images/metro-logo.svg" />
					</a>
				</div>
				<div class=" navbar-collapse right-header text-right" id="myNavbar">
					<h1>#<span>M</span>vironment</h1><strong>NACHHALTIGKEIT & DU</strong>
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
									<img src="../german_assets/images/leaves.svg" />
								</div>
								<div class="animate__animated animate__fadeIn green-text">Haben Sie in den letzten Jahren Ihr Konsumverhalten bei den folgenden Lebensmitteln geändert?</div>
							</div>
							<p class="animate__animated animate__fadeIn gray-text">Bewegen Sie den Schieberegler nach rechts, entsprechend der Option, die für Sie am relevantesten ist. Kreuzen Sie das Kästchen an, wenn die Aussage für Sie zutrifft.</p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="sec1-box-right animate__animated animate__zoomIn">
							<div class="foods-list">
								<div class="grid-container animate__zoomIn ">
									<div class="grid-list">
										<div class="grid-item">
											<div class="grid-icons">
											<img src="../german_assets/images/chicken-egg.png" />
											</div>
											<p class="light-text">Hühner</p>
										</div>
									</div>
									<div class="grid-list">
										<div class="grid-item">
											<div class="grid-icons">
											<img src="../german_assets/images/quails-egg.png" />
											</div>
											<p class="light-text">Wachtel</p>
										</div>
									</div>
									<div class="grid-list">
										<div class="grid-item">
											<div class="grid-icons">
												<img src="../german_assets/images/ostrich-egg.png" />
											</div>
											<p class="light-text">Straußen</p>
										</div>
									</div>
								</div>
								</div>
								<div class="rangle-slider gray-range foods-range">
									<p class="animate__animated animate__fadeIn dark-text">EIER</p>
									<div class="range">
										<input type="range"  name="personal_level_step9"  min="1" max="5" steps="1" value="1">
									</div>
									<ul class="range-labels">
										<li>Keine<br/>Umstellung</li>
										<li>Geplante Verbrauchsreduzierung</li>
										<li>Reduzierter Konsum</li>
										<li>Konsum wird vermieden</li>
										<li>Konsum komplett eingestellt</li>
									</ul>
								</div>
								<div class="outer-input foods-check">
									<div class="form-group">
										<input type="checkbox" id="allsame_personal_step_9" name="personal_level_step9_never" value="I have never eaten Eggs" class="never-selection-checkbox">
										<label for="allsame_personal_step_9">Ich habe noch nie Eier gegessen.</label>
									</div>
								</div>
							</div>
						</div>
					
				</div>
			</div>
			<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="{{url('/de/personal-level-step10')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
			</div>
		</div>
	</form>
	</div>
	</div>
</body>

</html>