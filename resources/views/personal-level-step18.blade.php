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
				<h1>#<span>M</span>vironment</h1><strong>Personal level</strong>
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
								<img src="images/chat-guy-1.svg" class="cg1" />
								<img src="images/chat-guy-2.svg" class="cg2" />
								</div>
								<div class="message-section animate__animated animate__bounceIn">
									<div class="messages msg_receive">
										<p>I believe that sustainable <br>
										purchasing is more expensive<br>
										than conventional purchasing.
										</p>
										
									</div>
								</div>
							</div>
							<div class="row msg_container base_sent">
								<div class="message-section">
									<div class="messages msg_sent">
										<p>Oh that is a myth!</p>
										
									</div>
								</div>
								<div class="avatar">
								<img src="images/chat-gal-1.svg" class="cg1" />
								<img src="images/chat-gal-2.svg" class="cg2" />	
								</div>
							</div>
							<div class="row msg_container base_receive base_receive1">
								<div class="avatar">
									<img src="images/chat-guy-1.svg" class="cg1" />
								<img src="images/chat-guy-2.svg" class="cg2" />
								</div>
								<div class="message-section">
									<div class="messages msg_receive">
										<p>I don’t think so. Conventional products enjoy economies of
scale, thus bringing prices down.
										</p>
										
									</div>
								</div>
							</div>
							<div class="row msg_container base_sent1">
								<div class="message-section">
									<div class="messages msg_sent1">
										<p>Purchasing quality goods that last longer allows you to make
purchases less frequently. This preserves resources and
reduces the volume of materials we discard. So, if you see
the picture in the long run, you will be saving much more!</p>
										
									</div>
								</div>
								<div class="avatar">
								<img src="images/chat-gal-1.svg" class="cg1" />
								<img src="images/chat-gal-2.svg" class="cg2" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="{{url('/personal-level-step19')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
		</div>
	</div>
</div>
</div>
</body>

</html>