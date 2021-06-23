@include('/german/header')
<body class="personal-level-start">
<div class="loader-wrap"><div class="loader"><img src="images/anim-tree.gif" /></div></div>
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/de')}}"><img src="../german_assets/images/metro-logo.svg" /></a>
    </div>
    <div class=" navbar-collapse right-header text-right" id="myNavbar">
      <h1>#<span>M</span>vironment</h1>
    </div></div>
  </div>
</nav>

  <div class="parent-zoom" onclick="">
    <div class="child-bg bg-one">
    
    </div>
	
	 <div class="caption-sec2">
	<p> Erzählen Sie uns ein bisschen mehr über Ihr persönliches Konsumverhalten</p>
	<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK"></a>
<a href="{{url('/de/personal-level-step1')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
</div>
	 </div>
  </div>
  
</body>