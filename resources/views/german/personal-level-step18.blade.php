@include('/german/header')

<body class="sec2-bg2">
<div class="loader-wrap"><div class="loader"><img src="images/anim-tree.gif" /></div></div>
<!-- Navbar -->
<nav class="navbar navbar-default">
	<div class="container">
		<div class="d-flex align-center space-between">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{URL::to('/de')}}">
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
	<div class="relative">
		<div class="page-width mt-7 page18">
			<div class="row chat-window" id="chat_window_1">
				<div class="col-xs-12 col-md-12">
					<div class="chat-panel chat-default">
						<div class="panel-body msg_container_base">
							<div class="row msg_container base_receive">
								<div class="avatar">
								<img src="../german_assets/images/chat-guy-1.svg" class="cg1" />
								<img src="../german_assets/images/chat-guy-2.svg" class="cg2" />
								</div>
								<div class="message-section animate__animated animate__bounceIn">
									<div class="messages msg_receive">
										<p>Ich glaube, dass nachhaltiger <br>
										Einkauf teurer ist als<br>
										konventioneller Einkauf.
										</p>
										
									</div>
								</div>
							</div>
							<div class="row msg_container base_sent">
								<div class="message-section">
									<div class="messages msg_sent">
										<p>Ach das ist ein Mythos!</p>
										
									</div>
								</div>
								<div class="avatar">
								<img src="../german_assets/images/chat-gal-1.svg" class="cg1" />
								<img src="../german_assets/images/chat-gal-2.svg" class="cg2" />	
								</div>
							</div>
							<div class="row msg_container base_receive base_receive1">
								<div class="avatar">
									<img src="../german_assets/images/chat-guy-1.svg" class="cg1" />
								<img src="../german_assets/images/chat-guy-2.svg" class="cg2" />
								</div>
								<div class="message-section">
									<div class="messages msg_receive">
										<p>Ich glaube nicht. Herkömmliche Produkte profitieren von Skaleneffekten und senken somit die Preise.
										</p>
										
									</div>
								</div>
							</div>
							<div class="row msg_container base_sent1">
								<div class="message-section">
									<div class="messages msg_sent1">
										<p>Wenn Sie hochwertige Waren kaufen, die länger halten, können Sie seltener einkaufen. Das schont Ressourcen und reduziert die Menge der von uns entsorgten Materialien. Wenn Sie das Ganze also auf lange Sicht betrachten, sparen Sie viel mehr!</p>
										
									</div>
								</div>
								<div class="avatar">
								<img src="../german_assets/images/chat-gal-1.svg" class="cg1" />
								<img src="../german_assets/images/chat-gal-2.svg" class="cg2" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="{{url('/de/personal-level-step19')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
		</div>
	</div>
</div>
</div>
</body>

</html>