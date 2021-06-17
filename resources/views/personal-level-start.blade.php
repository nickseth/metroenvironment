@include('header')
<body class="personal-level-start">
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/')}}"><img src="images/metro-logo.svg" /></a>
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
	<p> Tell us a bit more about your personal consumption patterns</p>
	<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back"></a>
<a href="{{url('/personal-level-step1')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
</div>
	 </div>
  </div>
  
</body>