@include('header')

<body class="sec2-bg2">
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
					<h1>#<span>M</span>vironment</h1><strong>Nachhaltigkeit & Arbeit</strong>
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
								<div class="animate__animated animate__fadeIn green-text">Markieren Sie Ihr Bewusstseinsniveau bei den verschiedenen METRO-Nachhaltigkeitsinitiativen</div>
							</div>
							<p class="animate__animated animate__fadeIn gray-text">Dieses Rad weist auf die Nachhaltigkeitsinitiativen von METRO hin. Das Rad beginnt , Abschnitt für Abschnitt an zu blinken. Wählen Sie für die Fragen zu den einzelnen Abschnitten bitte ein Kästchen als Antwort aus.</br>
              Wählen Sie unter jeder Frage das für Sie relevanteste Feld aus.</p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="sec1-box-right animate__animated animate__fadeInUp ">
							<div class="popup-type-container ">
								<h2 class="clr-blue " style="text-align:center;">Wie gut kennen Sie die Nachhaltigkeitsstrategie von METRO und ihre 8 Schwerpunkte?</h2>
								<p class="animate__animated animate__fadeIn gray-text">Klicken Sie auf die Schaltfläche Weiter, um zu beginnen</p>
								<div class="emoji-cover">
									<div class="emoji-cover-item emoji-option-js active" data-value="5">
										<img src="images/sec-3-01.svg" alt="Emoji">
										<div class="emoji-title">Aktiv involviert</div>
									</div>

									<div class="emoji-cover-item emoji-option-js" data-value="4">
										<img src="images/sec-3-02.svg" alt="Emoji">
										<div class="emoji-title">Indirekt involviert</div>
									</div>

									<div class="emoji-cover-item emoji-option-js" data-value="3">
										<img src="images/sec-3-03.svg" alt="Emoji">
										<div class="emoji-title">Ja, ich bin mir bewusst</div>
									</div>

									<div class="emoji-cover-item emoji-option-js" data-value="2">
										<img src="images/sec-3-04.svg" alt="Emoji">
										<div class="emoji-title">Nicht vollständig bewusst</div>
									</div>

									<div class="emoji-cover-item emoji-option-js" data-value="1">
										<img src="images/sec-3-05.svg" alt="Emoji">
										<div class="emoji-title">Das sind Neuigkeiten für mich</div>
									</div>

								</div>
<input type="hidden" name="final_level_step1" value="" class="hidden-smiley-data"/>
								<div class="mt-3 btn-cover">
					        <a href="{{url('/final-level-step2')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
					      </div>
							</div>
							</div>
						</div>
					
				</div>
			</div>
			
			
		</div>
	</form>
	</div>
	
	</div>
</body>

</html>